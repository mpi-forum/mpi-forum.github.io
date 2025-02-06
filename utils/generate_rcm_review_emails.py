#!/usr/bin/env python3

import urllib.parse
import csv
import pickle
import os.path
import email.mime.text
import base64
import math
from googleapiclient.discovery import build
from google_auth_oauthlib.flow import InstalledAppFlow
from google.auth.transport.requests import Request
import keyring

# If modifying these scopes, delete the file token.pickle.
SCOPES = ["https://www.googleapis.com/auth/forms.body", "https://www.googleapis.com/auth/gmail.send"]

reviewers_file = "/Users/wbland/Downloads/MPI 5.0 Authors and Reviewers - Reviewers.csv"
# Make sure to use a pre-filled link here so it gets email out correctly
review_link = "https://docs.google.com/forms/d/e/1FAIpQLSfcHMrmsGtXZi6uatcMWtsH_7uYpMJtZb1yz2TR_5bU2RzLHQ/viewform?usp=pp_url&entry.808589627={pdf_start}&entry.366243350={pdf_end}&entry.120650239={standard_start}&entry.1631623875={standard_end}"

subject_string = "MPI 5.0 Release Candidate Review"

dry_run = 1

from email import encoders
from email.mime.base import MIMEBase
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib

class FastMailSMTP(smtplib.SMTP_SSL):
    """A wrapper for handling SMTP connections to FastMail."""

    def __init__(self, username, password):
        super().__init__('smtp.fastmail.com', port=465)
        self.login(username, password)

    def create_message(self, *, from_addr, to_addr, msg, subject, attachments=None):
        msg_root = MIMEMultipart()
        msg_root['Subject'] = subject
        msg_root['From'] = from_addr
        msg_root['To'] = to_addr
        msg_root['Bcc'] = 'mpiforumbot@gmail.com'

        msg_alternative = MIMEMultipart('alternative')
        msg_root.attach(msg_alternative)
        msg_alternative.attach(MIMEText(msg))

        if attachments:
            for attachment in attachments:
                prt = MIMEBase('application', "octet-stream")
                prt.set_payload(open(attachment, "rb").read())
                encoders.encode_base64(prt)
                prt.add_header(
                        'Content-Disposition', 'attachment; filename="%s"'
                        % attachment.replace('"', ''))
                msg_root.attach(prt)

        print("Created message for: ",to_addr)
        #print("====")
        #print(msg)
        #print("====")

        return msg_root

    def send_message(self, *, message):
        self.service.sendmail(message['From'], [message['To'],message['Bcc']], message.as_string())
        print('Sent message ID: %s' % message['id'])

class GmailSMTP():
    def __init__(self):
        if not os.path.exists('vote_emailer_credentials.json'):
            print("Make sure to run this script with vote_emailer_credentials.json in the current directory.")
            print("If you don't have that file, you can set one up and download it here:")
            print()
            print("https://console.developers.google.com/apis/credentials")
            print("Make sure to be logged in as mpiforumbot@gmail.com and")
            print("download the GMail API key as a JSON file. Put it in this")
            print("directory and name it vote_emailer_credentials.json")
            exit(1)

        creds = None
        # The file token.pickle stores the user's access and refresh tokens, and is
        # created automatically when the authorization flow completes for the first
        # time.
        if os.path.exists('token.pickle'):
            with open('token.pickle', 'rb') as token:
                creds = pickle.load(token)
        # If there are no (valid) credentials available, let the user log in.
        if not creds or not creds.valid:
            if creds and creds.expired and creds.refresh_token:
                creds.refresh(Request())
            else:
                flow = InstalledAppFlow.from_client_secrets_file(
                        'vote_emailer_credentials.json', SCOPES)
                creds = flow.run_local_server(port=0)
            # Save the credentials for the next run
            with open('token.pickle', 'wb') as token:
                pickle.dump(creds, token)

        self.service = build('gmail', 'v1', credentials=creds)

    def create_message(self, *, from_addr, to_addr, msg, subject, attachments=None):
        message = email.mime.text.MIMEText(msg, 'html')
        message['to'] = to_addr
        message['from'] = from_addr
        message['subject'] = subject
        print("Created message for: ",to_addr)
        if to_addr == "work@wesbland.com":
            print("====")
            print(msg)
            print("====")
        return {'raw': base64.urlsafe_b64encode(message.as_bytes()).decode()}

    def send_message(self, *, message):
        try:
            message = (self.service.users().messages().send(userId="me", body=message).execute())
            print('Sent message ID: %s' % message['id'])
            return message
        except urllib.error.HTTPError as error:
            print('An error occurred: %s' % error)

def main():
    keyring.get_keyring()
    service = GmailSMTP()

    reviewers = list(csv.DictReader(open(reviewers_file)));

    for row in iter(reviewers):
        email = row['Email']
        name = row['Name']
        safe_name = urllib.parse.quote_plus(name)
        text_link = review_link.format(name=safe_name, pdf_start=row['PDF Start Page'], pdf_end=row['PDF End Page'], standard_start=row['MPI Standard Start Page'], standard_end=row['MPI Standard End Page'])

        message_text = """\
Hi {name},
<br><br>

Thanks for being an active participant in the MPI Forum this year. As we come to the end of the MPI 5.0 ratification process, we have one more ask for each of you who have been most involved.
<br><br>

As we discussed during the January 2025 meeting now is the time that we will collectively review the MPI 5.0 RC Document before we go through the final steps for ratification. Each of you who have been active participants over the last year have been assigned a chunk of the document (each chunk is 25 pages).
<br><br>

Your assignment is:
<br><br>

PDF Pages: {pdf_start} - {pdf_end}
MPI Standard Pages: {standard_start} - {standard_end}
<br><br>

Note that the PDF has slightly different page numbers than what shows up on each page individually because of the front matter.
<br><br>

You can find the document itself here:
<br><br>

https://github.com/mpi-forum/mpi-forum.github.io/raw/master/docs/mpi-5.0/mpi-50-rc1.pdf
<br><br>

As you are reviewing, these are the guidelines for things you should be looking for:
<br><br>

1. Formatting and whitespace problems
2. Spelling errors or other typos
3. Logical inconsistencies in the overall document
4. Problems with the way approved changes were applied
<br><br>

You are welcome to note any other issues you see as well.
<br><br>

As you finish your review, please use this form ({link}) to provide your feedback. I’ll be able to triage issues from there. If you have no notes, please still fill out that form and mention that so we know each chunk has been covered. These reviews must be completed by February 28th (there are no review deadline extensions 😀) so we can discuss them at the meeting the following week. If you cannot complete your assignment by then, please let Martin and I know as soon as possible so we can try to find someone else who is willing to take over your section. If you are willing to look through an extra section, please let us know that too so we can line up extra reviewers just in case.
<br><br>

If you have any questions, feel free to reach out to us for clarification.
<br><br>

Thanks,
Wes Bland (MPI Forum Secretary)\
                    """.format(name=name, link=text_link,
                               pdf_start=row['PDF Start Page'],
                               pdf_end=row['PDF End Page'],
                               standard_start=row['MPI Standard Start Page'],
                               standard_end=row['MPI Standard End Page'])

        message = service.create_message(from_addr='"MPI Forum Mailer Bot" <mpiforumbot@gmail.com>',
                to_addr=email, msg=message_text, subject=subject_string)
        if not dry_run or email == "work@wesbland.com":
            message_id = service.send_message(message=message)

if __name__ == '__main__':
    main()

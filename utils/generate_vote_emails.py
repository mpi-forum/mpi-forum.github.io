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
SCOPES = ['https://www.googleapis.com/auth/gmail.send']

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
        print("====")
        print(msg)
        print("====")

        return msg_root

    def send_message(service, *, message):
        service.sendmail(message['From'], [message['To'],message['Bcc']], message.as_string())

class GmailSMTP():
    def __init__():
        if not os.path.exists('credentials.json'):
            print("Make sure to run this script with credentials.json in the current directory.")
            print("If you don't have that file, you can set one up and download it here:")
            print()
            print("https://console.developers.google.com/apis/credentials")
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
                        'credentials.json', SCOPES)
                creds = flow.run_local_server(port=0)
            # Save the credentials for the next run
            with open('token.pickle', 'wb') as token:
                pickle.dump(creds, token)

        service = build('gmail', 'v1', credentials=creds)

        return service

    def create_message(self, * sender, to, message_text, subject, attachments=None):
        """Create a message for an email.

        Args:
          sender: Email address of the sender.
          to: Email address of the receiver.
          subject: The subject of the email message.
          message_text: The text of the email message.

        Returns:
          An object containing a base64url encoded email object.
        """
        message = email.mime.text.MIMEText(message_text, 'html')
        message['to'] = to
        message['from'] = sender
        message['subject'] = subject
        #print("Created message for: ",to)
        #print("====")
        #print(message_text)
        #print("====")
        return {'raw': base64.urlsafe_b64encode(message.as_bytes()).decode()}

    def send_message(service, *, message):
        """Send an email message.

        Args:
          service: Authorized Gmail API service instance.
          message: Message to be sent.

        Returns:
          Sent Message.
        """
        try:
            message = (service.users().messages().send(userId="me", body=message).execute())
            print('Message Id: %s' % message['id'])
            return message
        except urllib.error.HTTPError as error:
            print('An error occurred: %s' % error)

def normalize_curr_attendance(val):
    if val == 1:
        return 1
    else:
        return 0

def normalize_prev_attendance(val):
    if val != 0:
        return 1
    else:
        return 0

def main():
    keyring.get_keyring()
    username = 'wesley@wesbland.com'
    password = keyring.get_password("fastmail_mpi_forum", username)
    service = FastMailSMTP(username, password)

    ooe = 0;
    imove = 0;
    registered = 0;

    prev_attendance_file_1 = "/Users/wesbland/mpi/mpi-forum.github.io/_data/meetings/2021/09/attendance.csv"
    prev_attendance_file_2 = "/Users/wesbland/mpi/mpi-forum.github.io/_data/meetings/2021/12/attendance.csv"
    curr_attendance_file   = "/Users/wesbland/mpi/mpi-forum.github.io/_data/meetings/2022/02/attendance.csv"
    curr_registration_file = "/Users/wesbland/mpi/meeting-details/2022-02-feb/2022-02-28-registration.csv"
    # Make sure to use a pre-filled link here so it gets email out correctly
    registration_link = "https://docs.google.com/forms/d/e/1FAIpQLSfcQNgvQPjS-QqtEAyGMwq9Tw266FeyfKDKD_Eu4C6A08esgA/viewform?usp=pp_url&entry.1569039753={name}&entry.1678977275={org}&entry.1823932772={id}"

    prev_ooe = 35

    prev_attendees_1 = list(csv.DictReader(open(prev_attendance_file_1)));
    prev_attendees_2 = list(csv.DictReader(open(prev_attendance_file_2)));
    curr_attendees = list(csv.DictReader(open(curr_attendance_file)));
    curr_registration = list(csv.DictReader(open(curr_registration_file)));

    orgs = {}

    for row in iter(prev_attendees_1):
        org = row['org'];
        if org == "Self (Non-voting participant)":
            continue
        elif org not in orgs:
            #print("Prev 1 New Org: " + org);
            orgs[org] = {'registered': 1, 'attended': normalize_prev_attendance(int(row['attend'])),
                    'prev_1': 1, 'prev_2': 0, 'register_curr': 0, 'attend_prev': 0, 'attend_curr': 0};
        elif orgs[org]['prev_1'] == 1 and orgs[org]['attended'] == 0:
            orgs[org]['attended'] = normalize_prev_attendance(int(row['attend']));
    for row in iter(prev_attendees_2):
        org = row['org'];
        if org == "Self (Non-voting participant)":
            continue
        elif org not in orgs:
            #print("Prev 2 New Org: " + org);
            orgs[org] = {'registered': 1, 'attended': normalize_prev_attendance(int(row['attend'])),
                    'prev_1': 1, 'prev_2': 0, 'register_curr': 0, 'attend_prev':
                    normalize_prev_attendance(int(row['attend'])), 'attend_curr': 0};
        elif orgs[org]['prev_2'] == 0:
            orgs[org]['registered'] = int(orgs[org]['registered']) + 1;
            orgs[org]['attended_prev'] = normalize_prev_attendance(int(row['attend']));
            orgs[org]['attended'] = int(orgs[org]['attended']) + normalize_prev_attendance(int(row['attend']));
            orgs[org]['prev_2'] = 1;
        elif orgs[org]['prev_2'] == 1 and orgs[org]['attended_prev'] == 0:
            orgs[org]['attended_prev'] = normalize_prev_attendance(int(row['attend']));
            orgs[org]['attended'] = int(orgs[org]['attended']) + normalize_prev_attendance(int(row['attend']));
    for row in iter(curr_attendees):
        org = row['org'];
        if org == "Self (Non-voting participant)":
            continue
        elif org not in orgs:
            #print("Curr New Org: " + org);
            registered = registered + 1;
            orgs[org] = {'registered': 1, 'attended': normalize_curr_attendance(int(row['attend'])), 'prev_1': 0, 'prev_2': 0,
                    'attend_curr': int(row['attend']), 'register_curr': 1};
        elif (orgs[org]['register_curr'] == 0 or orgs[org]['attend_curr'] == 0):
            if orgs[org]['register_curr'] == 0:
                registered = registered + 1;
                orgs[org]['registered'] = int(orgs[org]['registered']) + 1;
            orgs[org]['attended'] = int(orgs[org]['attended']) + normalize_curr_attendance(int(row['attend']));
            orgs[org]['attend_curr'] = normalize_curr_attendance(int(row['attend'])) or orgs[org]['attend_curr'];
            orgs[org]['register_curr'] = 1;

    no_register = []
    no_attend = []
    no_curr = []
    eligible = []
    for org in orgs.keys():
        if orgs[org]['registered'] < 2:
            no_register.append(org);
        elif orgs[org]['attended'] < 2:
            no_attend.append(org);
        elif orgs[org]['attend_curr'] != 1:
            no_curr.append(org);
            ooe = ooe + 1;
        else:
            eligible.append(org);
            ooe = ooe + 1;
            imove = imove + 1;

    no_register.sort();
    no_attend.sort();
    no_curr.sort();
    eligible.sort();

    print("REGISTERED ORGS: " + str(registered));
    print("OOE ORGS: " + str(ooe));
    print("IMOVE ORGS: " + str(imove));
    print("INDIVIDUAL BALLOT QUORUM: " + str(math.ceil(imove * 0.75)));
    print("NEEDED FOR MEETING QUORUM: " + str(math.ceil(ooe * 2.0/3.0)));

    print("\n=== Eligible to vote ===\n");
    print(*eligible, sep = '\n');
    print("\n=== Did not register for 2 of last 3 meetings ===\n");
    print(*no_register, sep = '\n');
    print("\n=== Not present at current meeting ===\n");
    print(*no_curr, sep = '\n');
    print("\n=== Did not attend 2 of last 3 meetings ===\n");
    print(*no_attend, sep = '\n');
    print("\n===\n");

    if (imove < (ooe * 2.0 / 3.0)):
        print("Did not meet meeting quorum. IMOVE required: " + str(prev_ooe * 2.0 / 3.0) + "\n");

    for row in iter(curr_registration):
        org = row['What organization will you be representing?'];
        if org == "Self (Non-voting participant)":
            continue
        elif orgs[org]['registered'] < 2:
            print("" + org + " not registered for 2 of the last 3 meetings.");
        elif orgs[org]['attended'] < 2:
            print("" + org + " not attended 2 of the last 3 meetings.");
        elif orgs[org]['attend_curr'] != 1:
            print("" + org + " not attending current meeting.");
        else:
            email = row['Email Address']
            name = row['What is your full name?']
            safe_name = urllib.parse.quote_plus(name)
            safe_org = urllib.parse.quote_plus(org)
            safe_uuid = urllib.parse.quote_plus(row['UUID'])
            text_link = registration_link.format(name=safe_name, org=safe_org, id=safe_uuid)

            message_text = """\
Hi {name},

Voting is now open for the February 2022 Day 1 meeting. You may vote at this link:

{link}

If multiple members of your organization registered, each will get their own
voting link but only one of the ballots will be counted (no guarantees which).
Please coordinate with other members of your organization to avoid confusion.

As per the MPI Forum rules, your organization must have attended the meeting in
order to vote. If no one from your organization attended any portion of the
meeting up to the point where first voting block opened, your organization's
vote will not be counted.

Voting will be open until 12:45pm US Central time on March 2nd, 2022.

Thanks,
Wes Bland (MPI Forum Secretary)\
                            """.format(name=name, link=text_link)

            message = service.create_message(from_addr='"Wes Bland" <work@wesbland.com>',
                    to_addr=email, msg=message_text, subject='February 2022 MPI Forum Day 1 Voting Link')
            #message_id = service.send_message(message=message)

if __name__ == '__main__':
    main()

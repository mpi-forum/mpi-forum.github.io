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

prev_attendance_file_2 = "/Users/wbland/mpi/mpi-forum.github.io/_data/meetings/2023/07/attendance.csv"
prev_attendance_file_1 = "/Users/wbland/mpi/mpi-forum.github.io/_data/meetings/2023/09/attendance.csv"
curr_attendance_file   = "/Users/wbland/mpi/mpi-forum.github.io/_data/meetings/2023/10/attendance.csv"
curr_registration_file = "/Users/wbland/mpi/meeting-details/2023-10-oct/2023-10-31-registration.csv"
# Make sure to use a pre-filled link here so it gets email out correctly
voting_link = "https://docs.google.com/forms/d/e/1FAIpQLSd0hyASGk5IItQm30E2CGQ7sXl1JQu7ysIqXdGqq5gMoFQsEw/viewform?usp=pp_url&entry.1475131656={name}&entry.1088893247={org}&entry.747123479={id}"

prev_ooe = 30
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
        if not os.path.exists('credentials.json'):
            print("Make sure to run this script with credentials.json in the current directory.")
            print("If you don't have that file, you can set one up and download it here:")
            print()
            print("https://console.developers.google.com/apis/credentials")
            print("Make sure to be logged in as mpiforumbot@gmail.com and")
            print("download the GMail API key as a JSON file. Put it in this")
            print("directory and name it credentials.json")
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

def normalize_curr_attendance(val):
    if val == 1:
        return 1
    else:
        return 0

def normalize_prev_attendance(val):
    if val == 1:
        return 1
    else:
        return 0

def main():
    keyring.get_keyring()
    service = GmailSMTP()

    ooe = 0;
    imove = 0;
    registered = 0;

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
    print("NEEDED FOR MEETING QUORUM: " + str(math.ceil(prev_ooe * 2.0/3.0)));

    print("\n=== Eligible to vote ===\n");
    with open('ooe_orgs.csv', 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=['org_name']);
        writer.writeheader();
        for org in eligible:
            writer.writerow({'org_name': org});

    print(*eligible, sep = '\n');
    print("\n=== Did not register for 2 of last 3 meetings ===\n");
    print(*no_register, sep = '\n');
    print("\n=== Not present at current meeting ===\n");
    print(*no_curr, sep = '\n');
    print("\n=== Did not attend 2 of last 3 meetings ===\n");
    print(*no_attend, sep = '\n');
    print("\n===\n");

    if (imove < (prev_ooe * 2.0 / 3.0)):
        print("Did not meet meeting quorum. IMOVE required: " + str(prev_ooe * 2.0 / 3.0) + "\n");

    for row in iter(curr_registration):
        org = row["org"]
        if org == "Self (Non-voting participant)":
            continue
        elif orgs[org]['registered'] < 2:
            print("" + org + " not registered for 2 of the last 3 meetings.");
        elif orgs[org]['attended'] < 2:
            print("" + org + " not attended 2 of the last 3 meetings.");
        elif orgs[org]['attend_curr'] != 1:
            print("" + org + " not attending current meeting.");
        else:
            email = row['email']
            name = row['name']
            safe_name = urllib.parse.quote_plus(name)
            safe_org = urllib.parse.quote_plus(org)
            safe_uuid = urllib.parse.quote_plus(row['uuid'])
            text_link = voting_link.format(name=safe_name, org=safe_org, id=safe_uuid)

            message_text = """\
Hi {name},

Voting is now open for the October 2023 Plenary Day 3 meeting. You may vote at this
link:
<br><br>
{link}
<br><br>
If multiple members of your organization registered, each will get their own
voting link but only one of the ballots will be counted (no guarantees which).
Please coordinate with other members of your organization to avoid confusion.
<br><br>
As per the MPI Forum rules, your organization must have attended the meeting in
order to vote. If no one from your organization attended any portion of the
meeting up to the point where first voting block opened, your organization's
vote will not be counted.
<br><br>
Voting will be open until 12:30pm US Central Time on November 2, 2023.
<br><br>
Thanks,
<br>
Wes Bland (MPI Forum Secretary)\
                            """.format(name=name, link=text_link)

            message = service.create_message(from_addr='"MPI Forum Mailer Bot" <mpiforumbot@gmail.com>',
                    to_addr=email, msg=message_text, subject='October 2023 MPI Forum Plenary Day 3 Voting Link')
            if not dry_run:
                message_id = service.send_message(message=message)

if __name__ == '__main__':
    main()

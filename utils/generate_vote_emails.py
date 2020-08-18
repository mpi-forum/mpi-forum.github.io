#!/usr/bin/env python3

import urllib.parse
import csv
import pickle
import os.path
import email.mime.text
import base64
from googleapiclient.discovery import build
from google_auth_oauthlib.flow import InstalledAppFlow
from google.auth.transport.requests import Request

# If modifying these scopes, delete the file token.pickle.
SCOPES = ['https://www.googleapis.com/auth/gmail.send']

def authenticate():
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

def create_message(sender, to, subject, message_text):
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
  print("Created message for: ",to)
  print("====")
  print(message_text)
  print("====")
  return {'raw': base64.urlsafe_b64encode(message.as_bytes()).decode()}

def send_message(service, user_id, message):
  """Send an email message.

  Args:
    service: Authorized Gmail API service instance.
    user_id: User's email address. The special value "me"
    can be used to indicate the authenticated user.
    message: Message to be sent.

  Returns:
    Sent Message.
  """
  try:
      message = (service.users().messages().send(userId=user_id, body=message).execute())
      print('Message Id: %s' % message['id'])
      return message
  except urllib.error.HTTPError as error:
      print('An error occurred: %s' % error)

def main():
    service = authenticate()

    ooe = 0;
    imove = 0;
    registered = 0;

    prev_attendance_file_1 = "/Users/wbland/writing/mpi/mpi-forum.github.io/_data/meetings/2020/05/attendance.csv"
    prev_attendance_file_2 = "/Users/wbland/writing/mpi/mpi-forum.github.io/_data/meetings/2020/06/attendance.csv"
    curr_attendance_file =   "/Users/wbland/writing/mpi/mpi-forum.github.io/_data/meetings/2020/08/attendance.csv"
    curr_registration_file = "/Users/wbland/writing/mpi/meeting-details/2020-08-aug/2020-08-17-registration.csv"
    prev_ooe = 31

    prev_attendees_1 = list(csv.DictReader(open(prev_attendance_file_1)));
    prev_attendees_2 = list(csv.DictReader(open(prev_attendance_file_2)));
    curr_attendees = list(csv.DictReader(open(curr_attendance_file)));
    curr_registration = list(csv.DictReader(open(curr_registration_file)));

    orgs = {}

    for row in iter(prev_attendees_1):
        org = row['org'];
        if org not in orgs:
            #print("Prev 1 New Org: " + org);
            orgs[org] = {'registered': 1, 'attended': int(row['attend']), 'prev_1': 1, 'prev_2': 0, 'curr': 0};
    for row in iter(prev_attendees_2):
        org = row['org'];
        if org not in orgs:
            #print("Prev 2 New Org: " + org);
            orgs[org] = {'registered': 1, 'attended': int(row['attend']), 'prev_1': 0, 'prev_2': 1, 'curr': 0};
        elif orgs[org]['prev_2'] == 0:
            orgs[org]['registered'] = int(orgs[org]['registered']) + 1;
            orgs[org]['attended'] = int(orgs[org]['attended']) + int(row['attend']);
            orgs[org]['prev_2'] = 1;
    for row in iter(curr_attendees):
        org = row['org'];
        if org not in orgs:
            #print("Curr New Org: " + org);
            orgs[org] = {'registered': 1, 'attended': int(row['attend']), 'prev_1': 0, 'prev_2': 0, 'curr': 1};
        elif orgs[org]['curr'] == 0:
            orgs[org]['registered'] = int(orgs[org]['registered']) + 1;
            orgs[org]['attended'] = int(orgs[org]['attended']) + int(row['attend']);
            orgs[org]['curr'] = int(row['attend']);

    no_register = []
    no_attend = []
    no_curr = []
    eligible = []
    for org in orgs.keys():
        if orgs[org]['curr'] == 1:
            registered = registered + 1;

        if orgs[org]['registered'] < 2:
            no_register.append(org);
        elif orgs[org]['attended'] < 2:
            no_attend.append(org);
        elif orgs[org]['curr'] != 1:
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
        if orgs[org]['registered'] < 2:
            print("" + org + " not registered for 2 of the last 3 meetings.");
        elif orgs[org]['attended'] < 2:
            print("" + org + " not attended 2 of the last 3 meetings.");
        elif orgs[org]['curr'] != 1:
            print("" + org + " not attending current meeting.");
        else:
            email = row['Email Address']
            name = row['What is your name?']
            safe_name = urllib.parse.quote_plus(name)
            safe_org = urllib.parse.quote_plus(org)
            safe_uuid = urllib.parse.quote_plus(row['UUID'])

            message_text = """\
                    Hi {name},<br><br>

                    Voting is now open for the August 2020 meeting. You may vote at
                    <a href=https://form.jotform.com/202304108176142?participantId={id}&name={safe_name}&org={org}>
                    this</a> link.<br><br>

                    If multiple members of your organization registered, each will get their own
                    voting link, but only the first ballot will be counted. Please coordinate with
                    other members of your organization to avoid confusion.

                    As per the MPI Forum rules, your organization must have attended the meeting in
                    order to vote. If no one from your organization attended any portion of the
                    meeting up to the point where first ballot opened, your organization's vote will
                    not be counted.

                    Voting will close at 12pm US Central time on August 17th, 2020.<br><br>

                    Thanks,<br>
                    Wesley Bland (MPI Forum Secretary)\
                    """.format(name=name, safe_name=safe_name, id=safe_uuid, org=safe_org)

            message = create_message('"Wesley Bland" <work@wesbland.com>', email,'August 2020 MPI Forum Voting Link', message_text)
            #message_id = send_message(service, "me", message)

if __name__ == '__main__':
    main()

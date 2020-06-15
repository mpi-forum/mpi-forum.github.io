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
      message = (service.users().messages().send(userId=user_id, body=message)
              .execute())
      print('Message Id: %s' % message['id'])
      return message
  except urllib.error.HTTPError as error:
      print('An error occurred: %s' % error)

def main():
    service = authenticate()

    #attenance_file="/Users/wbland/writing/mpi/meeting-details/2020-06-jun/2020-06-29-registration.csv"
    attenance_file="/Users/wbland/writing/mpi/mpi-forum.github.io/utils/test.csv"

    with open(attenance_file) as csvfile:
        attendees = csv.DictReader(csvfile)
        for row in attendees:
            email = row['Email Address']
            name = row['What is your name?']
            safe_name = urllib.parse.quote_plus(name)
            org = urllib.parse.quote_plus(row['What organization will you be representing?'])
            uuid = urllib.parse.quote_plus(row['UUID'])

            message_text = """\
                    Hi {name},<br><br>

                    Voting is now open for the June/July 2020 meeting. You may vote at
                    <a href=https://form.jotform.com/201614072992151?participantId={id}&name={safe_name}&org={org}>
                    this</a> link.<br><br>

                    If multiple members of your organization registered, each will get their own
                    voting link, but only the first ballot will be counted. Please coordinate with
                    other members of your organization to avoid confusion.

                    As per the MPI Forum rules, your organization must have attended the meeting in
                    order to vote. If no one from your organization attended any portion of the
                    meeting up to the point where voting opened, your organization's vote will not
                    be counted.

                    Voting will close at 10am US Central time on July 1st, 2020.<br><br>

                    Thanks,<br>
                    Wesley Bland (MPI Forum Secretary)\
                    """.format(name=name, safe_name=safe_name, id=uuid, org=org)

            message = create_message('work@wesbland.com', email,'June/July 2020 MPI Forum Voting Link', message_text)
            message_id = send_message(service, "me", message)

            print("Sent to: ",email)
            #print("====")
            #print(message_text)
            #print("====")

if __name__ == '__main__':
    main()

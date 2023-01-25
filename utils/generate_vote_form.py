#!/usr/bin/env python3.8

import os
import sys
import csv

from apiclient import discovery
from httplib2 import Http
from oauth2client import client, file, tools
from google.auth.transport.requests import Request
from google.oauth2.credentials import Credentials
from google_auth_oauthlib.flow import InstalledAppFlow
from googleapiclient.discovery import build
from googleapiclient.errors import HttpError

def main():
    year = "2023"
    month = "02"
    filename = """../_data/meetings/{year}/{month}/votes.csv""".format(year=year, month=month)
    votes_list = list(csv.DictReader(open(filename)));

    votes = {'procedure': [], 'no-no': [], 'errata': [], '1st': [], '2nd': []}
    for vote in iter(votes_list):
        if (vote['yes'] == None or vote['yes'] == "0") and (vote['no'] == None or vote['no'] == "0") and (vote['abstain'] == None or vote['abstain'] == "0"):
            votes[vote['type']].append(vote)

    SCOPES = "https://www.googleapis.com/auth/forms.body"
    DISCOVERY_DOC = "https://forms.googleapis.com/$discovery/rest?version=v1"

    creds = None
    if os.path.exists('token.json'):
        creds = Credentials.from_authorized_user_file('token.json', SCOPES)
    # If there are no (valid) credentials available, let the user log in.
    if not creds or not creds.valid:
        if creds and creds.expired and creds.refresh_token:
            creds.refresh(Request())
        else:
            flow = InstalledAppFlow.from_client_secrets_file(
                'credentials.json', SCOPES)
            creds = flow.run_local_server(port=0)
        # Save the credentials for the next run
        with open('token.json', 'w') as token:
            token.write(creds.to_json())

    form_service = build('forms', 'v1', credentials=creds)

    form = {
        "info": {
            "title": "MPI Forum <month> <year> MPI Forum Voting Day <number>"
        }
    }

    # Creates the initial Form
    createResult = form_service.forms().create(body=form).execute()

    # Request body to add a video item to a Form
    update = {
        "requests": [{
            "createItem": {
                "item": {
                    "title": "Name (Pre-filled - Do not edit)",
                    "questionItem": { "question": { "required": True, "textQuestion": {} } }
                },
                "location": {
                    "index": 0
                }
            },
        }]
    }

    # Add the item to the form
    question_setting = form_service.forms().batchUpdate(
        formId=createResult["formId"], body=update).execute()
    print(question_setting)

    update = {
        "requests": [{
            "createItem": {
                "item": {
                    "title": "Organization (Pre-filled - Do not edit)",
                    "questionItem": { "question": { "required": True, "textQuestion": {} } }
                },
                "location": {
                    "index": 1
                }
            },
        }]
    }

    # Add the item to the form
    question_setting = form_service.forms().batchUpdate(
        formId=createResult["formId"], body=update).execute()
    print(question_setting)

    update = {
        "requests": [{
            "createItem": {
                "item": {
                    "title": "ID (Pre-filled - Do not edit)",
                    "questionItem": { "question": { "required": True, "textQuestion": {} } }
                },
                "location": {
                    "index": 2
                }
            },
        }]
    }

    # Add the item to the form
    question_setting = form_service.forms().batchUpdate(
        formId=createResult["formId"], body=update).execute()
    print(question_setting)

    item_counter = 3
    for vote_type in votes.keys():
        if len(votes[vote_type]) > 0:
            update = {
                "requests": [{
                    "createItem": {
                        "item": {
                            "title": vote_type.capitalize() + " Votes",
                            "textItem": {}
                        },
                        "location": {
                            "index": item_counter
                        }
                    },
                }]
            }
            item_counter = item_counter + 1
            question_setting = form_service.forms().batchUpdate(
                formId=createResult["formId"], body=update).execute()
            print(question_setting)

            for vote in votes[vote_type]:
                update = {
                    "requests": [{
                        "createItem": {
                            "item": {
                                "title": "#" + vote['number'] + ": " + vote['topic'] + " (" + vote['type'] + ")",
                                "questionItem": { "question": { "required": True,
                                                               "choiceQuestion": {
                                                                   "type": "RADIO",
                                                                   "options": [ { "value": "Yes" }, { "value": "No" }, { "value": "Abstain" } ]
                                                                   } } }
                            },
                            "location": {
                                "index": item_counter
                            }
                        },
                    }]
                }
                item_counter = item_counter + 1
                question_setting = form_service.forms().batchUpdate(
                    formId=createResult["formId"], body=update).execute()
                print(question_setting)


if __name__ == '__main__':
    main()

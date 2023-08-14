#!/usr/bin/env python3.8

import csv
import subprocess
import datetime
from github import Github
from dedup_names import dedup_names

startYear = 2021
currYear = 2023
startMonth = 6
currMonth = 9

def main():
    token = subprocess.run(['gh','auth','token'], stdout=subprocess.PIPE).stdout.decode('utf-8').strip()
    gh = Github(token)
    repo = gh.get_repo('mpi-forum/mpi-issues')

    attendeeList = {}
    orgList = {}

    # Get GitHub participants
    gitHubUsers = []
    startDate = datetime.datetime(startYear, startMonth, 1)
    for issue in repo.get_issues_comments(since=startDate):
        if issuer.user.login == 'mpiforumbot':
            continue

        if issue.user.name is None:
            name = issue.user.login
        else:
            name = issue.user.name

        person = dedup_names(name.strip())
        if person in attendeeList.keys():
            attendeeList[person] = attendeeList[person] + 1
        else:
            attendeeList[person] = 1

    # Get meeting participants
    for year in range(startYear, currYear+1):
        for month in range(1, 13):
            if year == startYear and month < startMonth:
                continue
            elif year == currYear and month > currMonth:
                continue

            filename = f'../_data/meetings/{year}/{month:02}/attendance.csv'
            try:
                data = list(csv.DictReader(open(filename)))
            except OSError as e:
                continue

            for personData in data:
                if int(personData['attend']) == -1:
                    continue
                person = dedup_names(personData['name'].strip())
                if person in attendeeList.keys():
                    attendeeList[person] = attendeeList[person] + 1
                else:
                    attendeeList[person] = 1

                org = dedup_names(personData['org'].strip())
                if org == 'Self (Non-voting participant)':
                    continue
                if org in orgList.keys():
                    orgList[org] = orgList[org] + 1
                else:
                    orgList[org] = 1

    print("=== People ===")
    for person in sorted(attendeeList.keys()):
        print(f'{person}')

    print()

    print("=== Orgs ===")
    for org in sorted(orgList.keys()):
        print(f'{org}')

if __name__ == '__main__':
    main()

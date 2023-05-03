#!/usr/bin/env python3.8

import csv
import subprocess
from github import Github

dry_run = True

def hasLabel(labels, label):
    for l in labels:
        if l.name == label:
            return True
    return False

def main():
    token=subprocess.run(['gh','auth','token'], stdout=subprocess.PIPE).stdout.decode('utf-8').strip()
    year = "2023"
    month = "05"
    ballot_quorum = 0
    filename = """../_data/meetings/{year}/{month}/votes.csv""".format(year=year, month=month)
    votes_list = list(csv.DictReader(open(filename)));
    gh = Github(token)
    client = GHClient(access_token=token)
    repo = gh.get_repo('mpi-forum/mpi-issues')

    for vote in iter(votes_list):
        issue = repo.get_issue(number=int(vote['issue_number']))
        outcome = "passed"

        if int(vote['yes']) == 0 and int(vote['no']) == 0 and int(vote['abstain']) == 0 and int(vote['missed']) == 0:
            continue

        if vote['type'] == "no-no" and int(vote['no']) > 0:
            outcome = "failed"
        elif int(vote['yes']) <= ((int(vote['yes']) + int(vote['no'])) * .75):
            outcome = "failed"

        comment = """This {outcome} a [{type} vote](https://mpi-forum.org/meetings/{year}/{month}/votes).
<table>
<tr>
    <td> Yes
    <td> No
    <td> Abstain
<tr>
    <td> {yes}
    <td> {no}
    <td> {abstain}
</table>""".format(outcome=outcome, type=vote['type'], year=year, month=month, yes=vote['yes'], no=vote['no'], abstain=vote['abstain'])

        existing_comments = issue.get_comments()
        skip = False
        for c in existing_comments:
            if c.body == comment:
                print("Skipping " + vote['issue_number'] + " because it is already done")
                skip = True
                break
        if skip:
            continue

        if not dry_run:
            issue.create_comment(comment)
        print("Posting this comment on issue " + vote['issue_number'])
        print(comment)

        if outcome == "passed":
            if vote['type'] == '1st':
                if not hasLabel(issue.get_labels(), "passed first vote"):
                    if not dry_run:
                        issue.add_to_labels("passed first vote")
                    print("Adding 'passed first vote' to issue " + vote['issue_number'])
            elif vote['type'] == '2nd' or vote['type'] == 'errata':
                if not hasLabel(issue.get_labels(), "passed final vote"):
                    if not dry_run:
                        issue.add_to_labels("passed final vote")
                    print("Adding 'passed final vote' to issue " + vote['issue_number'])
        if vote['type'] == 'no-no':
            if hasLabel(issue.get_labels(), "no-no"):
                if not dry_run:
                    issue.remove_from_labels("no-no")
                print("Removing 'no-no' from issue " + vote['issue_number'])
            if hasLabel(issue.get_labels(), "scheduled no-no"):
                if not dry_run:
                    issue.remove_from_labels("scheduled no-no")
                print("Removing 'scheduled no-no' from issue " + vote['issue_number'])
        if hasLabel(issue.get_labels(), "scheduled vote"):
            if not dry_run:
                issue.remove_from_labels("scheduled vote")
            print("Removing 'scheduled vote' from issue " + vote['issue_number'])
        if hasLabel(issue.get_labels(), "scheduled reading"):
            if not dry_run:
                issue.remove_from_labels("scheduled reading")
            print("Removing 'scheduled reading' from issue " + vote['issue_number'])
        if not hasLabel(issue.get_labels(), "had reading"):
            if not dry_run:
                issue.add_to_labels("had reading")
            print("Adding 'had reading' to issue " + vote['issue_number'])

if __name__ == '__main__':
    main()

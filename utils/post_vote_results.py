#!/usr/bin/env python3.8

import csv
import subprocess
from github import Github

def hasLabel(labels, label):
    for l in labels:
        if l.name == label:
            return True
    return False

def main():
    token=subprocess.run(['gh','auth','token'], stdout=subprocess.PIPE).stdout.decode('utf-8').strip()
    year = "2023"
    month = "05"
    filename = """../_data/meetings/{year}/{month}/votes.csv""".format(year=year, month=month)
    votes_list = list(csv.DictReader(open(filename)));
    #gh = Github(token)
    repo = gh.get_repo('mpi-forum/mpi-issues')

    for vote in iter(votes_list):
        issue = repo.get_issue(number=int(vote['issue_number']))
        outcome = "passed"

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
        print("Posting this comment on issue " + vote['issue_number'])
        print(comment)

        issue.create_comment(comment)

        if outcome == "passed":
            if vote['type'] == 'no-no':
                if hasLabel(issue.get_labels(), "no-no"):
                    issue.remove_from_labels("no-no")
            elif vote['type'] == '1st':
                if not hasLabel(issue.get_labels(), "passed first vote"):
                    issue.add_to_labels("passed first vote")
            elif vote['type'] == '2nd' or vote['type'] == 'errata':
                if not hasLabel(issue.get_labels(), "passed final vote"):
                    issue.add_to_labels("passed final vote")
        if hasLabel(issue.get_labels(), "scheduled vote"):
            issue.remove_from_labels("scheduled vote")
        if hasLabel(issue.get_labels(), "scheduled reading"):
            issue.remove_from_labels("scheduled reading")
        if not hasLabel(issue.get_labels(), "had reading"):
            issue.add_to_labels("had reading")

if __name__ == '__main__':
    main()

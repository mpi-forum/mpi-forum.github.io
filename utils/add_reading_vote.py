#!/usr/bin/env python3

import csv
import subprocess
from github import Github
import calendar
import sys

dry_run = False

def hasLabel(labels, label):
    for l in labels:
        if l.name == label:
            return True
    return False


def main():
    token=subprocess.run(['gh','auth','token'], stdout=subprocess.PIPE).stdout.decode('utf-8').strip()
    if len(sys.argv) < 6:
        print("Usage: ./add_reading_vote <year> <month> <issue_number> <pr_number> <presenter> [vote_type]")
        exit(1)
    year = sys.argv[1]
    month = sys.argv[2]
    issue_number = int(sys.argv[3])
    pr_number = int(sys.argv[4])
    presenter = sys.argv[5]
    if len(sys.argv) > 6:
        vote_type = sys.argv[6]
    else:
        vote_type = ""
    reading = False
    if vote_type == "" or vote_type == "errata" or vote_type == "procedure" or vote_type == "no-no":
        reading = True

    votes_filename = """../_data/meetings/{year}/{month}/votes.csv""".format(year=year, month=month)
    agenda_filename = """../_data/meetings/{year}/{month}/agenda.yml""".format(year=year, month=month)
    votes_list = open(votes_filename, 'a')
    agenda_list =open(agenda_filename, 'a')

    gh = Github(token)
    repo = gh.get_repo('mpi-forum/mpi-issues')

    milestones = repo.get_milestones()
    milestone = milestones[0]
    for milestone in milestones:
        if milestone.title == "" + calendar.month_name[int(month)] + " " + year:
            break
        else:
            milestone = None

    issue = repo.get_issue(number=issue_number)
    if not hasLabel(issue.get_labels(), "scheduled_reading") and reading:
        issue.add_to_labels("scheduled reading")
        print("Adding 'scheduled reading' to issue " + str(issue_number))

    if not dry_run:
        issue.edit(milestone=milestone)
        print("Adding milestone to issue " + str(issue_number))

    title = issue.title.replace('"',"\'")
    print("Issue " + str(issue_number) + ' has title ' + title)

    if reading:
        print("Writing to agenda")
        if not dry_run:
            if vote_type == 'no-no':
                agenda_list.write("    - type: No-No Reading\n")
            else:
                agenda_list.write("    - type: Reading\n")
            agenda_list.write("      title: \"" + title + "\"\n")
            agenda_list.write("      issue_number: " + str(issue_number) + "\n")
            agenda_list.write("      pr_number: " + str(pr_number) + "\n")
            agenda_list.write("      presenter: " + presenter + "\n")
            agenda_list.write("      done: 0\n\n")

    print("Writing to votes")
    if vote_type != "":
        votes_list.write("" + str(issue_number) + "," + str(pr_number) + ",\"" + title + "\"," + vote_type + "\n")

        if not hasLabel(issue.get_labels(), f"scheduled {vote_type} vote"):
            if not dry_run:
                issue.add_to_labels(f"scheduled {vote_type} vote")
            print(f"Adding 'scheduled {vote_type} vote' to issue " + str(issue_number))

    votes_list.close()
    agenda_list.close()

if __name__ == '__main__':
    main()

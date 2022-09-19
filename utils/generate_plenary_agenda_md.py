#!/usr/bin/env python3.8

import sys
import yaml

def print_votes(votes):
    if votes:
        for v in votes:
            print("""* [#{num}](https://github.com/mpi-forum/mpi-issues/issues/{num}): {description}"""
                    .format(num=v['number'], description=v['description']))

def main():
    agenda_year = sys.argv[1]
    agenda_month = sys.argv[2]
    filename = """../_data/meetings/{year}/{month}/agenda.yml""".format(year=agenda_year, month=agenda_month)

    with open(filename, 'r') as f:
        agenda = yaml.load(f, Loader=yaml.FullLoader)

    print("# Votes")

    print("## Procedure Votes")
    print_votes(agenda['procedure-votes'])
    print("")

    print("## Errata Votes")
    print_votes(agenda['errata-votes'])
    print("")

    print("## No No Votes")
    print_votes(agenda['no-no-votes'])
    print("")

    print("## First Votes")
    print_votes(agenda['first-votes'])
    print("")

    print("## Second Votes")
    print_votes(agenda['second-votes'])
    print("")


    print("# Plenaries")
    print("| Type | Issue | Title | Presenter |")
    print("| ---- | ----- | ----- | --------- |")
    for p in agenda['plenaries']:
        try:
            number="""[#{num}](https://github.com/mpi-forum/mpi-issues/issues/{num})""".format(num=p['issue_number'])
        except:
            number=''

        print("""| {type} | {num} | {title} | {presenter} |"""
                .format(type=p['type'], num=number, title=p['title'],
                    presenter=p['presenter']))

if __name__ == '__main__':
    main()

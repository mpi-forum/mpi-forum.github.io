#!/usr/bin/env python3

import os
from datetime import timedelta, datetime, date, time

#### RUN FROM TOP OF REPO ####

# Get meeting information
start_date = input("Start date (YYYY-MM-DD): ")
end_date = input("Enddate (YYYY-MM-DD): ")
location = input("Location: ")

start = datetime.strptime(start_date, "%Y-%m-%d")
end = datetime.strptime(end_date, "%Y-%m-%d")

start_day  = start.strftime("%d")
start_month = start.strftime("%m")
start_year = start.strftime("%Y")
end_day  = end.strftime("%d")

# Create the directories
if not os.path.exists('../meetings/' + start_year + '/' + start_month):
    os.makedirs('../meetings/' + start_year + '/' + start_month)

if not os.path.exists('../_data/meetings/' + start_year + '/' + start_month):
    os.makedirs('../_data/meetings/' + start_year + '/' + start_month)

# Create the markdown files
file = open('../meetings/' + start_year + '/' + start_month + '/agenda.md', 'w')
file.write("---\n")
file.write("layout: agenda2\n")
file.write("date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y") + '\n')
file.write("permalink: meetings/" + start_year + "/" + start_month + "/agenda\n")
file.write('year: "' + start_year + '"\n')
file.write('month: "' + start_month + '"\n')
file.write('webex: "https://github.com/mpi-forum/mpi-standard/wiki/Virtual-Forum-Meeting-Information"\n')
file.write("---\n\n")
file.close()

file = open('../meetings/' + start_year + '/' + start_month + '/attendance.md', 'w')
file.write("---\n")
file.write("layout: attendance\n")
file.write("date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y") + '\n')
file.write("permalink: meetings/" + start_year + "/" + start_month + "/attendance\n")
file.write('year: "' + start_year + '"\n')
file.write('month: "' + start_month + '"\n')
file.write('prev_year: ""\n')
file.write('prev_month: ""\n')
file.write('prev_prev_year: ""\n')
file.write('prev_prev_month: ""\n')
print("Add prev_year, prev_month, etc. to ../meetings/" + start_year + '/' + start_month + '/attendance.md\n')
file.write("---\n\n")
file.close()

file = open('../meetings/' + start_year + '/' + start_month + '/logistics.md', 'w')
file.write("---\n")
file.write("layout: logistics\n")
file.write("date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y") + '\n')
file.write("permalink: meetings/" + start_year + "/" + start_month + "/logistics\n")
file.write('year: "' + start_year + '"\n')
file.write('month: "' + start_month + '"\n')
file.write("---\n\n")
file.close()

file = open('../meetings/' + start_year + '/' + start_month + '/notes.md', 'w')
file.write("---\n")
file.write("layout: notes\n")
file.write("date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y") + '\n')
file.write("permalink: meetings/" + start_year + "/" + start_month + "/notes\n")
file.write("title: " + start.strftime("%B %Y Meeting Notes") + '\n')
file.write("---\n\n")
file.close()

file = open('../meetings/' + start_year + '/' + start_month + '/votes.md', 'w')
file.write("---\n")
file.write("layout: votes\n")
file.write("date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y") + '\n')
file.write('year: "' + start_year + '"\n')
file.write('month: "' + start_month + '"\n')
file.write('rules: 3152013\n')
file.write("permalink: meetings/" + start_year + "/" + start_month + "/votes\n")
file.write('registered:\n')
file.write('ooe:\n')
file.write('imove:\n')
file.write("---\n\n")
file.close()

def daterange(start_date, end_date):
    for n in range(int ((end_date - start_date).days + 1)):
        yield start_date + timedelta(n)

# Create the data files
file = open('../_data/meetings/' + start_year + '/' + start_month + '/agenda.yml', 'w')
file.write('schedule:\n')
for day in daterange(start, end):
    file.write('    - day: ' + day.strftime("%A, %B %d") + '\n')
    file.write('    - start: ' + day.strftime("%Y-%m-%dT%00:00") + '\n')
    file.write('      end: ' + day.strftime("%Y-%m-%dT%23:59") + '\n')
    file.write('      title: "Placeholder Agenda Item"\n')
    file.write('    - endday: done\n\n')

file.write('plenaries:\n')
file.write('    - type: Welcome\n')
file.write('      title: Introductions\n')
file.write('      presenter: All\n')
file.write('      done: 0\n\n')
file.write('    - type: Update\n')
file.write('      title: WG Status\n')
file.write('      presenter: All WG chairs or their proxies\n')
file.write('      done: 0\n\n')
file.write('    - type: Reading\n')
file.write('      title: Placeholder Reading\n')
file.write('      issue_number: 1234\n')
file.write('      presenter: Placeholder Presenter\n')
file.write('      done: 0\n\n')
file.close()

file = open('../_data/meetings/' + start_year + '/' + start_month + '/attendance.csv', 'w')
file.write('name,org,attend\n')
file.close()

file = open('../_data/meetings/' + start_year + '/' + start_month + '/ballot.csv', 'w')
file.write('org,"Vote 1"\n')
file.close()

file = open('../_data/meetings/' + start_year + '/' + start_month + '/votes.csv', 'w')
file.write('issue_number,pr_number,topic,type,yes,no,abstain,missed\n')
file.close()

print("This doesn't add links to the main meetings page.")
print('To do that, change the "links" value for the associated')
print('meeting in ../_data/meeting_list.yml from "no" to "yes"')
print("That needs to be done manually, and then everything needs to be checked in.")

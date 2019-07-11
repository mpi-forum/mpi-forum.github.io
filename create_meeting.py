#!/usr/bin/python

import os;
from datetime import timedelta, datetime, date, time;

#### RUN FROM TOP OF REPO ####

# Get meeting information
start_date = raw_input("Start date (YYYY-MM-DD): ")
end_date = raw_input("Enddate (YYYY-MM-DD): ")
location = raw_input("Location: ");

start = datetime.strptime(start_date, "%Y-%m-%d")
end = datetime.strptime(end_date, "%Y-%m-%d")

start_day  = start.strftime("%d")
start_month = start.strftime("%m")
start_year = start.strftime("%Y")
end_day  = end.strftime("%d")

# Create the directories
if not os.path.exists('meetings/' + start_year + '/' + start_month):
    os.makedirs('meetings/' + start_year + '/' + start_month);

if not os.path.exists('_data/meetings/' + start_year + '/' + start_month):
    os.makedirs('_data/meetings/' + start_year + '/' + start_month);

# Create the markdown files
file = open('meetings/' + start_year + '/' + start_month + '/agenda.md', 'w');
print >> file, "---";
print >> file, "layout: agenda2";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + start_year + "/" + start_month + "/agenda";
print >> file, 'year: "' + start_year + '"';
print >> file, 'month: "' + start_month + '"';
print >> file, 'webex: ""';
print >> file, "---\n";
file.close();

file = open('meetings/' + start_year + '/' + start_month + '/attendance.md', 'w');
print >> file, "---";
print >> file, "layout: attendance";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + start_year + "/" + start_month + "/attendance";
print >> file, 'year: "' + start_year + '"';
print >> file, 'month: "' + start_month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + start_year + '/' + start_month + '/logistics.md', 'w');
print >> file, "---";
print >> file, "layout: logistics";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + start_year + "/" + start_month + "/logistics";
print >> file, 'year: "' + start_year + '"';
print >> file, 'month: "' + start_month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + start_year + '/' + start_month + '/notes.md', 'w');
print >> file, "---";
print >> file, "layout: notes";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + start_year + "/" + start_month + "/notes";
print >> file, "title: " + start.strftime("%B %Y Meeting Notes");
print >> file, "---\n";
file.close();

file = open('meetings/' + start_year + '/' + start_month + '/votes.md', 'w');
print >> file, "---";
print >> file, "layout: votes";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, 'year: "' + start_year + '"';
print >> file, 'month: "' + start_month + '"';
print >> file, 'rules: 3152013';
print >> file, "permalink: meetings/" + start_year + "/" + start_month + "/votes";
print >> file, 'registered:';
print >> file, 'ooe:';
print >> file, 'imove:';
print >> file, "---\n";
file.close();

def daterange(start_date, end_date):
    for n in range(int ((end_date - start_date).days + 1)):
        yield start_date + timedelta(n)

# Create the data files
file = open('_data/meetings/' + start_year + '/' + start_month + '/agenda.yml', 'w');
print >> file, 'schedule:\n';
for day in daterange(start, end):
    print >> file, '    - day: ' + day.strftime("%A, %B %d") + '\n'
    print >> file, '    - start: 12:00am'
    print >> file, '    - end: 11:59pm'
    print >> file, '    - title: "Placeholder Agenda Item"\n'
    print >> file, '    - endday: done\n\n'

print >> file, 'procedure-votes:\n';
print >> file, '    - number: 1234'
print >> file, '    - description: "Placeholder Procedure Vote"\n'
print >> file, 'errata-votes:\n';
print >> file, 'no-no-votes:\n';
print >> file, 'first-votes:\n';
print >> file, 'second-votes:\n';
print >> file, 'plenaries:';
print >> file, '    - type: Welcome'
print >> file, '    - title: Introductions'
print >> file, '    - presenter: All'
print >> file, '    - done: 0\n'
print >> file, '    - type: Update'
print >> file, '    - title: WG Status'
print >> file, '    - presenter: All WG chairs or their proxies'
print >> file, '    - done: 0\n'
print >> file, '    - type: Reading'
print >> file, '    - title: Placeholder Reading'
print >> file, '    - issue_number: 1234'
print >> file, '    - presenter: Placeholder Presenter'
print >> file, '    - done: 0\n'
file.close();

file = open('_data/meetings/' + start_year + '/' + start_month + '/attendance.csv', 'w');
print >> file, 'name,org,attend';
file.close();

file = open('_data/meetings/' + start_year + '/' + start_month + '/ballot.csv', 'w');
print >> file, 'org,"Vote 1"';
file.close();

file = open('_data/meetings/' + start_year + '/' + start_month + '/votes.csv', 'w');
print >> file, 'topic,type,yes,no,abstain,missed';
file.close();

print "This doesn't add links to the main meetings page."
print 'To do that, change the "links" value for the associated'
print 'meeting in _data/meeting_list.yml from "no" to "yes"'
print "That needs to be done manually, and then everything needs to be checked in."

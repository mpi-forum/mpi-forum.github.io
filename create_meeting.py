#!/usr/bin/python

import os;
from datetime import datetime, date, time;

#### RUN FROM TOP OF REPO ####

# Get meeting information
month = raw_input("2 digit month: ");
year = raw_input("4 digit year: ");
start_day = raw_input("Starting Day: ");
end_day = raw_input("Ending Day: ");
location = raw_input("Location: ");

start = date(int(year), int(month), int(start_day))
end = date(int(year), int(month), int(end_day))

# Create the directories
if not os.path.exists('meetings/' + year + '/' + month):
    os.makedirs('meetings/' + year + '/' + month);

if not os.path.exists('_data/meetings/' + year + '/' + month):
    os.makedirs('_data/meetings/' + year + '/' + month);

# Create the markdown files
file = open('meetings/' + year + '/' + month + '/agenda.md', 'w');
print >> file, "---";
print >> file, "layout: agenda2";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + year + "/" + month + "/agenda";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, 'webex: ""';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/attendance.md', 'w');
print >> file, "---";
print >> file, "layout: attendance";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + year + "/" + month + "/attendance";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/logistics.md', 'w');
print >> file, "---";
print >> file, "layout: logistics";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + year + "/" + month + "/logistics";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/notes.md', 'w');
print >> file, "---";
print >> file, "layout: notes";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, "permalink: meetings/" + year + "/" + month + "/notes";
print >> file, "title: " + start.strftime("%B %Y Meeting Notes");
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/votes.md', 'w');
print >> file, "---";
print >> file, "layout: votes";
print >> file, "date: " + start.strftime("%B %d, %Y - ") + end.strftime("%B %d, %Y")
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, 'rules: 3152013';
print >> file, "permalink: meetings/" + year + "/" + month + "/votes";
print >> file, 'registered: ';
print >> file, 'ooe: ';
print >> file, 'imove: ';
print >> file, "---\n";
file.close();

# Create the data files
file = open('_data/meetings/' + year + '/' + month + '/agenda.yml', 'w');
print >> file, 'schedule: \n';
for day in range(int(start_day), int(end_day)+1):
    tmp_day = date(int(year), int(month), day)
    print >> file, '    - day: ' + tmp_day.strftime("%A, %B %d") + '\n'
    print >> file, '    - start: 12:00am'
    print >> file, '    - end: 11:59pm'
    print >> file, '    - title: "Placeholder Agenda Item"\n'
    print >> file, '    - endday: done\n\n'

print >> file, 'procedure-votes: \n';
print >> file, '    - number: 1234'
print >> file, '    - description: "Placeholder Procedure Vote"\n'
print >> file, 'errata-votes: \n';
print >> file, 'no-no-votes: \n';
print >> file, 'first-votes: \n';
print >> file, 'second-votes: \n';
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

file = open('_data/meetings/' + year + '/' + month + '/attendance.csv', 'w');
print >> file, 'name,org,attend';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/ballot.csv', 'w');
print >> file, 'org,"Vote 1"';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/votes.csv', 'w');
print >> file, 'topic,type,yes,no,abstain,missed';
file.close();

print "This doesn't add links to the main meetings page."
print 'To do that, change the "links" value for the associated'
print 'meeting in _data/meeting_list.yml from "no" to "yes"'
print "That needs to be done manually, and then everything needs to be checked in."

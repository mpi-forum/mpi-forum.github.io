#!/usr/bin/python

import os;

months = {
    '01': "January",
    '02': "February",
    '03': "March",
    '04': "April",
    '05': "May",
    '06': "June",
    '07': "July",
    '08': "August",
    '09': "September",
    '10': "October",
    '11': "November",
    '12': "December"
}

#### RUN FROM TOP OF REPO ####

# Get meeting information
month = raw_input("2 digit month: ");
year = raw_input("4 digit year: ");
start_day = raw_input("Starting Day: ");
end_day = raw_input("Ending Day: ");
location = raw_input("Location: ");

# Create the directories
if not os.path.exists('meetings/' + year + '/' + month):
    os.makedirs('meetings/' + year + '/' + month);

if not os.path.exists('_data/meetings/' + year + '/' + month):
    os.makedirs('_data/meetings/' + year + '/' + month);

# Create the markdown files
file = open('meetings/' + year + '/' + month + '/agenda.md', 'w');
print >> file, "---\n";
print >> file, "layout: agenda2\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, "permalink: meetings/" + year + "/" + month + "/agenda\n";
print >> file, 'year: "' + year + '"\n';
print >> file, 'month: "' + month + '"\n';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/attendance.md', 'w');
print >> file, "---\n";
print >> file, "layout: attendance\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, "permalink: meetings/" + year + "/" + month + "/attendance\n";
print >> file, 'year: "' + year + '"\n';
print >> file, 'month: "' + month + '"\n';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/landing.md', 'w');
print >> file, "---\n";
print >> file, "layout: meeting_landing\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, "permalink: meetings/" + year + "/" + month + "/landing\n";
print >> file, 'year: "' + year + '"\n';
print >> file, 'month: "' + month + '"\n';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/logistics.md', 'w');
print >> file, "---\n";
print >> file, "layout: logistics\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, "permalink: meetings/" + year + "/" + month + "/logistics\n";
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/notes.md', 'w');
print >> file, "---\n";
print >> file, "layout: notes\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, "permalink: meetings/" + year + "/" + month + "/notes\n";
print >> file, "title: " + months[month] + " " + year + " Meeting Notes\n";
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/votes.md', 'w');
print >> file, "---\n";
print >> file, "layout: votes\n";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year + "\n";
print >> file, 'year: "' + year + '"\n';
print >> file, 'month: "' + month + '"\n';
print >> file, 'rules: 3152013\n';
print >> file, "permalink: meetings/" + year + "/" + month + "/votes\n";
print >> file, 'registered: \n';
print >> file, 'ooe: \n';
print >> file, 'imove: \n';
print >> file, "---\n";
file.close();

# Create the data files
file = open('_data/meetings/' + year + '/' + month + '/agenda.yml', 'w');
print >> file, 'schedule: \n';
print >> file, '    - day: \n'
print >> file, '    - endday: done\n'
print >> file, 'procedure-votes: \n';
print >> file, 'errata-votes: \n';
print >> file, 'no-no-votes: \n';
print >> file, 'first-votes: \n';
print >> file, 'second-votes: \n';
print >> file, 'plenaries: \n';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/attendance.csv', 'w');
print >> file, 'name,org,attend\n';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/ballot.csv', 'w');
print >> file, 'org,"Vote 1"\n';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/votes.csv', 'w');
print >> file, 'topic,type,yes,no,abstain,missed\n';
file.close();

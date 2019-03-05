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
print >> file, "---";
print >> file, "layout: agenda2";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year;
print >> file, "permalink: meetings/" + year + "/" + month + "/agenda";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/attendance.md', 'w');
print >> file, "---";
print >> file, "layout: attendance";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year;
print >> file, "permalink: meetings/" + year + "/" + month + "/attendance";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/logistics.md', 'w');
print >> file, "---";
print >> file, "layout: logistics";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year;
print >> file, "permalink: meetings/" + year + "/" + month + "/logistics";
print >> file, 'year: "' + year + '"';
print >> file, 'month: "' + month + '"';
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/notes.md', 'w');
print >> file, "---";
print >> file, "layout: notes";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year;
print >> file, "permalink: meetings/" + year + "/" + month + "/notes";
print >> file, "title: " + months[month] + " " + year + " Meeting Notes";
print >> file, "---\n";
file.close();

file = open('meetings/' + year + '/' + month + '/votes.md', 'w');
print >> file, "---";
print >> file, "layout: votes";
print >> file, "date: " + months[month] + " " + start_day + ", " + year + " - " + months[month] + " " + end_day + ", " + year;
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
print >> file, 'name,org,attend';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/ballot.csv', 'w');
print >> file, 'org,"Vote 1"';
file.close();

file = open('_data/meetings/' + year + '/' + month + '/votes.csv', 'w');
print >> file, 'topic,type,yes,no,abstain,missed';
file.close();

print "This doesn't add links to the main meetings page (Meeting_details.md)."
print "That needs to be done manually, and then everything needs to be checked in."
print "The string to be added is: "
print "|[Logistics]("+year+"/"+month+"/logistics)|[Agenda]("+year+"/"+month+"/agenda)|[Presentations](https://github.com/mpi-forum/mpi-forum.github.io/tree/master/slides/"+year+"/"+month+")|[Attendance]("+year+"/"+month+"/attendance)|[Voting]("+year+"/"+month+"/votes)|[Notes]("+year+"/"+month+"/notes)|"

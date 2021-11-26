#!/usr/bin/env python3

import csv
import sys

# For this function to work, the attendance list needs to include the exact fields as described
# below. Otherwise this function won't be able to confirm that the ballot came from the correct
# person (or that the person even registered).
def confirm_id(id, name, org, attendance_list):
    #print("MATCH ID for " + name + ", " + org);
    for entry in iter(attendance_list):
        #print(entry);
        if (id == entry['UUID'] and
                name == entry['What is your full name?'] and
                org == entry['What organization will you be representing?']):
            return 1;
    return 0;

def main():
    registration_file=sys.argv[1]; # File with registrations from Google Form

    ballots=[];
    votes={};
    ballot_dict={};

    print("Opening file...");

    registration_list = list(csv.DictReader(open(registration_file)));

    writer = csv.DictWriter(open('attendance.csv', 'w', newline=''), ['name','org','attend'], quoting = csv.QUOTE_ALL);
    writer.writeheader();

    print("Writing attendance.csv...");

    names = {};

    for registration in iter(registration_list):
        name = registration['What is your full name?'];
        org = registration['What organization will you be representing?'];

        if name in names:
            print("Omitting duplicate name: " + name);
            continue;
        else:
            names[name] = 1;

        writer.writerow({'name': name, 'org': org, 'attend': '1'});

    print("\n=====\n");

    print("Move attendance.csv to the appropriate folder.");

if __name__ == '__main__':
    main()

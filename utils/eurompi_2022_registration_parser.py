#!/usr/bin/env python3

import csv
import sys
import uuid

def main():
    registration_file=sys.argv[1]; # File with registrations from Google Form

    ballots=[];
    votes={};
    ballot_dict={};

    print("Opening file...");

    registration_list = list(csv.DictReader(open(registration_file)));

    attend_writer = csv.DictWriter(open('attendance.csv', 'w', newline=''), ['name','org','attend'], quoting = csv.QUOTE_ALL);
    attend_writer.writeheader();
    registration_writer = csv.DictWriter(open('2022-09-28-registration.csv', 'w', newline=''), ['Email Address','What is your full name?','What organization will you be representing?','UUID'], quoting = csv.QUOTE_ALL);
    registration_writer.writeheader();

    print("Writing attendance.csv...");

    names = {};

    for registration in iter(registration_list):
        first_name = registration['First Name'];
        last_name = registration['Last Name'];
        name = first_name + " " + last_name

        if registration['For the MPI Forum - What organization will you be representing?'] == "":
            print("Omitting non-attendee: " + name);
            continue

        email = registration['Email']
        org = registration['For the MPI Forum - What organization will you be representing?']
        if org == "Other":
            org = registration['What organization will you be representing?']
        reg_uuid = uuid.uuid4()

        if name in names:
            print("Omitting duplicate name: " + name);
            continue;
        else:
            names[name] = 1;

        attend_writer.writerow({'name': name, 'org': org, 'attend': '1'});
        registration_writer.writerow({'Email Address': email, 'What is your full name?': name, 'What organization will you be representing?': org,'UUID': reg_uuid})

    print("\n=====\n");

    print("Move attendance.csv to the appropriate folder.");

if __name__ == '__main__':
    main()

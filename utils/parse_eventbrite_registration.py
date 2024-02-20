#!/usr/bin/env python3

import csv
import sys
import uuid

orgs = {
        }

def main():
    registration_file=sys.argv[1] # File with registrations from Google Form

    ballots=[]
    votes={}
    org_dict={
            "Forschungszentrum Jülich GmbH": "Forschungszentrum Julich",
            "ParTec AG, Germany": "ParTec",
            "University of Illinois at Urbana-Champaign": "University of Illinois Urbana-Champaign",
            "Inria": "INRIA",
            "LLNL": "Lawrence Livermore National Laboratory",
            "Intel": "Intel Corporation",
            }

    print("Opening file...")

    registration_list = list(csv.DictReader(open(registration_file)))
    if "Ticket Type" in registration_list[0]:
        any_remote = True
    else:
        any_remote = False

    attendanceWriter = csv.DictWriter(open('attendance.csv', 'w', newline=''), ['name','org','remote','attend'], quoting = csv.QUOTE_ALL)
    attendanceWriter.writeheader()
    registrationWriter = csv.DictWriter(open('registration.csv', 'w', newline=''), ['name','org','email','uuid'], quoting = csv.QUOTE_ALL)
    registrationWriter.writeheader()

    print("Writing attendance.csv and registration.csv...")

    names = {}

    for registration in iter(registration_list):
        first_name = registration['First Name']
        last_name = registration['Last Name']
        name = first_name + " " + last_name
        org = registration['Organization you are representing'].strip()
        email = registration['Email']

        if org in org_dict:
            org = org_dict[org]

        if any_remote and registration['Ticket Type'] == "On-line Only":
            remote = 1
        else:
            remote = 0

        if name in names:
            print("Omitting duplicate name: " + name)
            continue
        else:
            names[name] = 1

        attendanceWriter.writerow({'name': name, 'org': org, 'remote': remote, 'attend': '1'})
        registrationWriter.writerow({'name': name, 'org': org, 'email': email, 'uuid': uuid.uuid1()})

    print("\n=====\n")

    print("Move attendance.csv to the appropriate folder.")

if __name__ == '__main__':
    main()

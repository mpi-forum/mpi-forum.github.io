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
            "TACC Austin": "The Texas Advanced Computing Center",
            "TACC": "The Texas Advanced Computing Center",
            "Paratools SAS": "ParaTools SAS",
            "High Performance Computing Center Stuttgart": "HLRS, University of Stuttgart",
            "Sandia National Laboratories": "Sandia National Laboratory",
            "LANL": "Los Alamos National Laboratory",
            "ORNL": "Oak Ridge National Laboratory",
            "Texas Advanced Computing Center": "The Texas Advanced Computing Center",
            "RWTH Aachen": "RWTH Aachen University",
            "ParTec AG": "ParTec",
            "Argonne": "Argonne National Laboratory",
            "Bull (Eviden)": "Eviden",
            "CIDS, ZIH, TU Dresden": "CIDS, ZIH, TUD Dresden University of Technology",
            "nvidia": "NVIDIA",
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
    inPersonWriter = csv.DictWriter(open('inPerson.csv', 'w', newline=''), ['First Name','Last Name','Email','Company (opt)','Under 18 (opt)'], quoting = csv.QUOTE_ALL)
    inPersonWriter.writeheader()

    print("Writing attendance.csv and registration.csv...")

    names = {}

    for registration in iter(registration_list):
        first_name = registration['First Name']
        last_name = registration['Last Name']
        name = first_name + " " + last_name
        org = registration['Organization you are representing'].strip()
        email = registration['Email']
        ticket_type = registration['Ticket Type']

        if org == "":
            continue

        if org in org_dict:
            org = org_dict[org]

        if any_remote and ticket_type == "On-line Attendance":
            remote = 1
        elif any_remote and ticket_type == "In-Person Attendance":
            remote = 0
        else:
            print("Unexpected ticket type: " + ticket_type)
            exit(1)

        if name in names:
            print("Omitting duplicate name: " + name)
            continue
        else:
            names[name] = 1

        attendanceWriter.writerow({'name': name, 'org': org, 'remote': remote, 'attend': '1'})
        registrationWriter.writerow({'name': name, 'org': org, 'email': email, 'uuid': uuid.uuid1()})
        if remote == 0 and name != "Wes Bland":
            inPersonWriter.writerow({'First Name': first_name, 'Last Name': last_name, 'Email': email, 'Company (opt)':'', 'Under 18 (opt)':''})

    print("\n=====\n")

    print("Move attendance.csv to the appropriate folder.")

if __name__ == '__main__':
    main()

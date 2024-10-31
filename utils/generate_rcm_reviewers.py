#!/usr/bin/env python3

import csv
from dedup_names import dedup_names

prevMeetings = ["../_data/meetings/2023/10/attendance.csv",
                "../_data/meetings/2023/12/attendance.csv",
                "../_data/meetings/2024/03/attendance.csv",
                "../_data/meetings/2024/06/attendance.csv",
                "../_data/meetings/2024/09/attendance.csv"]

prevDetails = ["../../meeting-details/2023-10-oct/2023-10-31-registration.csv",
               "../../meeting-details/2023-12-dec/2023-12-04-registration.csv",
               "../../meeting-details/2024-03-mar/2024-03-18-registration.csv",
               "../../meeting-details/2024-06-jun/2024-06-17-registration.csv",
               "../../meeting-details/2024-09-sep/2024-09-23-registration.csv"]

def main():
    attendeeList = {}
    emailList = {}

    for fileName in prevMeetings:
        data = list(csv.DictReader(open(fileName)))
        for personData in data:
            if int(personData['attend']) == -1:
                continue
            person = dedup_names(personData['name'].strip())
            if person in attendeeList.keys():
                attendeeList[person] = attendeeList[person] + 1
            else:
                attendeeList[person] = 1

    # Special cases (3 = reviewer, 0 = not active)
    attendeeList['William Gropp'] = 0

    for person in sorted(attendeeList.keys()):
        if attendeeList[person] > 2:
            emailList[person] = ""

    for fileName in prevDetails:
        data = list(csv.DictReader(open(fileName)))
        for person in emailList.keys():
            if emailList[person] == "":
                for detailData in data:
                    if dedup_names(detailData['name']) == person:
                        emailList[person] = detailData['email']
                        break

    for person in sorted(attendeeList.keys()):
        if attendeeList[person] > 2:
            print(f"{person:40s} {emailList[person]:40s}")

if __name__ == '__main__':
    main()

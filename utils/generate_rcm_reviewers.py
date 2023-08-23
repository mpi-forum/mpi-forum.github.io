#!/usr/bin/env python3.8

import csv
from dedup_names import dedup_names

prevMeetings = ["../_data/meetings/2022/12/attendance.csv",
                "../_data/meetings/2023/02/attendance.csv",
                "../_data/meetings/2023/03/attendance.csv",
                "../_data/meetings/2023/05/attendance.csv",
                "../_data/meetings/2023/07/attendance.csv"]

prevDetails = ["../../meeting-details/2023-07-jul/2023-07-10-registration.csv",
               "../../meeting-details/2023-05-may/2023-05-02-registration.csv",
               "../../meeting-details/2023-03-mar/2023-03-13-registration.csv",
               "../../meeting-details/2023-02-feb/2023-02-01-registration.csv",
               "../../meeting-details/2022-12-dec/2022-12-05-registration.csv"]

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

    attendeeList['Hugo Taboada'] = 3
    attendeeList['Rolf Rabenseifner'] = 0

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
                        print("Found " + person + " in " + fileName)
                        break

    for person in sorted(attendeeList.keys()):
        if attendeeList[person] > 2:
            print("" + person + "\t" + emailList[person])

if __name__ == '__main__':
    main()

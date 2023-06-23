#!/usr/bin/env python3.8

import csv
from dedup_names import dedup_names

prevMeetings = ["../_data/meetings/2022/12/attendance.csv",
                "../_data/meetings/2023/02/attendance.csv",
                "../_data/meetings/2023/03/attendance.csv",
                "../_data/meetings/2023/05/attendance.csv",
                "../_data/meetings/2023/07/attendance.csv"]

def main():
    attendeeList = {}
    for fileName in prevMeetings:
        data = list(csv.DictReader(open(fileName)))
        for personData in data:
            if int(personData['attend']) != 1:
                continue
            person = dedup_names(personData['name'].strip())
            if person in attendeeList.keys():
                attendeeList[person] = attendeeList[person] + 1
            else:
                attendeeList[person] = 1

    for person in sorted(attendeeList.keys()):
        if attendeeList[person] > 2:
            print(person)

if __name__ == '__main__':
    main()

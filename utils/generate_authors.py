#!/usr/bin/env python3.8

import csv
from dedup_names import dedup_names

startYear = 2021
currYear = 2023
startMonth = 6
currMonth = 7

def main():
    attendeeList = {}
    for year in range(startYear, currYear+1):
        for month in range(1, 13):
            if year == startYear and month < startMonth:
                continue
            elif year == currYear and month > currMonth:
                continue

            filename = f'../_data/meetings/{year}/{month:02}/attendance.csv'
            try:
                data = list(csv.DictReader(open(filename)))
            except OSError as e:
                continue

            for personData in data:
                if int(personData['attend']) == -1:
                    continue
                person = dedup_names(personData['name'].strip())
                if person in attendeeList.keys():
                    attendeeList[person] = attendeeList[person] + 1
                else:
                    attendeeList[person] = 1

    for person in sorted(attendeeList.keys()):
        print(f'{person}')

if __name__ == '__main__':
    main()

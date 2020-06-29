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
                name == entry['What is your name?'] and
                org == entry['What organization will you be representing?']):
            return 1;
    return 0;

def main():
    attendance_file=sys.argv[1]; # File with UUIDs for each attendee
    ballot_file=sys.argv[2]; # File with list of ballots on which to be voted
    votes_file=sys.argv[3]; # File with votes captured from JotForm

    ballots=[];
    votes={};
    ballot_dict={};

    print("Opening files...");

    attendance_list = list(csv.DictReader(open(attendance_file)));
    ballot_list = list(csv.DictReader(open(ballot_file)));
    votes_list = list(csv.DictReader(open(votes_file)));

    print("Creating ballot list...");

    # Create dictionary for CSV key line
    for ballot in iter(ballot_list):
        ballots.append("" + ballot['topic'] + " (" + ballot['type'] + ")");
        ballot_dict["" + ballot['topic'] + " (" + ballot['type'] + ")"] = {"topic" :
                ballot['topic'], "type" : ballot['type'], "yes" : 0, "no" : 0, "abstain" : 0,
                "missed" : 0};

    header = ballots;
    header.insert(0, "org");

    print("Reading votes...");

    for vote in iter(votes_list):
        # To count the vote, the field names in the CSV file need to exactly match what is typed
        # below. Otherwise the votes won't be found properly and something weird will happen here
        # (probably a crash).
        id = vote['Participant ID'];
        name = vote['Name'];
        org = vote['Org'];

        # Validate that the entry matches the original ID
        if (not confirm_id(id, name, org, attendance_list)):
            print("Incorrect ID for " + name + ", " + org);
            return 1;

        # Check that the org has not yet voted already
        if org in votes:
            print("" + org + " has already votes. Discarding ballot from " + name);
            continue;

        # Create ballot entry for org
        votes[org]={};
        votes[org]['org']=org;
        for ballot in ballots:
            if ballot == "org":
                continue;
            votes[org][ballot]=vote[ballot];
            ballot_dict[ballot][vote[ballot].lower()]=ballot_dict[ballot][vote[ballot].lower()] + 1;

    print("Writing ballot.csv...");

    with open('ballot.csv', 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, header, quoting = csv.QUOTE_ALL);

        writer.writeheader()
        for org in votes.keys():
            writer.writerow(votes[org]);

    print("Writing votes.csv...");

    with open('votes.csv', 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, ['topic', 'type', 'yes', 'no', 'abstain', 'missed'],
                quoting = csv.QUOTE_ALL);

        writer.writeheader()
        for key in ballot_dict.keys():
            writer.writerow(ballot_dict[key]);

    print("\n=====\n");

    print("Move votes.csv and ballot.csv to the appropriate folders.");
    print("Update registered, ooe, and imove numbers in votes.md.");

if __name__ == '__main__':
    main()

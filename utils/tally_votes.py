#!/usr/bin/env python3

import csv
import sys
import os.path

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

def delete_from_list(org, ooe_list):
    for entry in iter(ooe_list):
        if (org == entry['org_name']):
            ooe_list.remove(entry)

def main():
    attendance_file=sys.argv[1]; # File with UUIDs for each attendee
    ballot_file=sys.argv[2]; # File with list of ballots on which to be voted
    votes_file=sys.argv[3]; # File with votes captured from Google Forms
    prev_votes_file="../_data/meetings/2022/12/votes.csv"
    prev_ballots_file="../_data/meetings/2022/12/ballot.csv"
    if not os.path.isfile(prev_votes_file):
        prev_votes_file=""
    if not os.path.isfile(prev_ballots_file):
        prev_ballots_file=""

    ballots=[];
    ballot_dict = {};
    votes = {};
    orgs_in_this_file = [];
    votes_in_this_file = []
    previous_topics = []

    print("Opening files...");

    attendance_list = list(csv.DictReader(open(attendance_file)));
    ballot_list = list(csv.DictReader(open(ballot_file)));
    votes_list = list(csv.DictReader(open(votes_file)));
    ooe_list = list(csv.DictReader(open('ooe_orgs.csv')));
    if prev_votes_file != "":
        prev_ballot_list = list(csv.DictReader(open(prev_votes_file)));
        for ballot in prev_ballot_list:
            topic = "#" + ballot['number'] + ": " + ballot['topic'] + " (" + ballot['type'] + ")"
            if ballot['topic'] == "daybreak" or (int(ballot['yes']) == 0 and int(ballot['no']) == 0
                    and int(ballot['abstain']) == 0 and int(ballot['missed']) == 0):
                continue;
            ballot_dict[topic] = ballot;
            previous_topics.append(topic);
            ballots.append(topic);
    if prev_ballots_file != "":
        prev_votes_list = list(csv.DictReader(open(prev_ballots_file)));
        for vote in prev_votes_list:
            votes[vote['org']] = vote;

    print("Creating ballot list...");

    # Create dictionary for CSV key line
    for ballot in iter(ballot_list):
        topic =  "#" + ballot['number'] + ": " + ballot['topic'] + " (" + ballot['type'] + ")"
        if ballot['topic'] == "daybreak" or topic in ballots:
            continue;
        ballots.append(topic);
        ballot_dict[topic] = {
                "number": ballot['number'],
                "topic" : ballot['topic'],
                "type" : ballot['type'],
                "yes" : 0,
                "no" : 0,
                "abstain" : 0,
                "missed" : 0};

    header = ballots;
    header.insert(0, "org");

    print("Reading votes...");

    for vote in iter(votes_list):
        # To count the vote, the field names in the CSV file need to exactly match what is typed
        # below. Otherwise the votes won't be found properly and something weird will happen here
        # (probably a crash).
        id = vote['ID (Pre-filled - Do not edit)'];
        name = vote['Name (Pre-filled - Do not edit)'];
        org = vote['Organization (Pre-filled - Do not edit)'];

        # Validate that the entry matches the original ID
        if (not confirm_id(id, name, org, attendance_list)):
            print("Incorrect ID for " + name + ", " + org);
            return 1;

        # Check that the org has not yet voted already
        if org in orgs_in_this_file:
            print("" + org + " has already votes. Discarding ballot from " + name);
            continue;
        else:
            orgs_in_this_file.append(org);

        # Create ballot entry for org
        if org not in votes:
            votes[org] = {};
            votes[org]['org'] = org;

        for ballot in ballots:
            if ballot == "org" or ballot in previous_topics:
                continue;

            # Add to the list of topics in this file
            if ballot not in votes_in_this_file and ballot in vote and vote[ballot] != "":
                votes_in_this_file.append(ballot)

            if ballot in vote and vote[ballot]:
                votes[org][ballot] = vote[ballot];
                ballot_dict[ballot][vote[ballot].lower()] = int(ballot_dict[ballot][vote[ballot].lower()]) + 1;

        # Delete the org from the list of orgs that haven't voted yet
        delete_from_list(org, ooe_list)

    print("\n=====\n");
    print("Orgs not voted...")
    for org in ooe_list:
        name = org['org_name'];
        print(name);
        if name not in votes:
            votes[name] = {};
            votes[name]['org'] = name;
        for ballot in ballots:
            if ballot == "org" or ballot not in votes_in_this_file:
                continue;
            votes[name][ballot] = 'abstain';
            ballot_dict[ballot]['abstain'] = int(ballot_dict[ballot]['abstain']) + 1;
    print("\n=====\n");

    print("Writing ballot.csv...");

    with open('ballot.csv', 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, header, quoting = csv.QUOTE_ALL, extrasaction='ignore');

        writer.writeheader()
        for org in votes.keys():
            writer.writerow(votes[org]);

    print("Writing votes.csv...");

    with open('votes.csv', 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, ['number', 'topic', 'type', 'yes', 'no', 'abstain', 'missed'],
                quoting = csv.QUOTE_ALL);

        writer.writeheader()
        for key in ballot_dict.keys():
            writer.writerow(ballot_dict[key]);

    print("\n=====\n");

    print("Move votes.csv and ballot.csv to the appropriate folders.");
    print("Update registered, ooe, and imove numbers in votes.md.");

if __name__ == '__main__':
    main()

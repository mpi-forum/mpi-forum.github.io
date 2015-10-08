<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

print("<ol>\n\n");
ballot("Ballots 3 and 4:", 23, 0, 1, 0,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
print("</ol>\n\n");

include_once("$topdir/include/footer.php");

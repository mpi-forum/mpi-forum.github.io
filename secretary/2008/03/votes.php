<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

print("<ol>\n\n");
ballot("Ballot 3: items 1-4 and 7-14", 23, 0, 1, 1,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
print("</ol>\n\n");

include_once("$topdir/include/footer.php");

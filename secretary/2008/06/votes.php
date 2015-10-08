<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

print("<ol>\n\n");
ballot("Ballot 4:", 22, 0, 0, 0,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
ballot("MPI-1.3, 1st vote:", 22, 0, 0, 0,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
ballot("MPI-2.1, 1st vote:", 22, 0, 0, 0,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
print("</ol>\n\n");

include_once("$topdir/include/footer.php");

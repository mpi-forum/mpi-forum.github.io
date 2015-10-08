<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

print("<ol>\n\n");
ballot("MPI-1.3, 2nd vote:", 22, 1, 0, 4,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
ballot("MPI-2.1, 2nd vote:", 23, 0, 0, 4,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
ballot("MPI-2.2 Remove send buffer restriction, 1st vote:", 19, 1, 3, 4,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
ballot("MPI-2.2 const for C bindings, 1st vote:", 17, 4, 6, 0,
       "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>");
print("</ol>\n\n");

include_once("$topdir/include/footer.php");

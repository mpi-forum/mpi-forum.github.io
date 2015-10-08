<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

$passed = "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>";
$failed = "<font color=\"#bb0000\"><strong>Ballot failed</strong></font>";

function ticket($num, $title, $vote) {
    $str = "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">Ticket #$num</a>: \"$title\", ";
    if (1 == $vote) {
        $str .= "1st";
    } else {
        $str .= "2nd";
    }
    $str .= " vote";
    return $str;
}

print("<p><strong>NOTE:</strong> \"Missed\" counts the same as \"abstain\".</p>\n\n<ol>\n\n");

ballot(ticket(228, "MPIR Specification - An Official Companion Document for the MPI Standard", 2),
       14, 0, 2, 3);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

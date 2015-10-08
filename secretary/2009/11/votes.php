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

?>

<p>Note that the second vote for ticket #171 was not conducted at the
physical November 2009 meeting.  Instead, it was conducted as an email
vote from December 4-11, 2011.  The vote was <a
href="http://lists.mpi-forum.org/mpi-forum/2009/12/0481.php">announced
via this archived email</a>.  Results were tabulated several days
later, with all eligible organizations voting; the result was <a
href="http://lists.mpi-forum.org/mpi-forum/2009/12/0504.php">announced
via email.</a></p>

<?php

ballot(ticket(171, "change MPI_C_BOOL external32 size to 1 byte", 2),
       26, 0, 0, 0);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

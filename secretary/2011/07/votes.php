<?
$short_desc = "Votes";
$long_desc = "Votes from the meeting";
$file = "votes.php";
include_once("subpage.php");

$passed = "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>";
$failed = "<font color=\"#bb0000\"><strong>Ballot failed</strong></font>";


function ticket($num, $title, $vote) {
    if ($num < 0) {
        $str = "$title ";
    } else {
        if ($num > 0) {
            $str = "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">Ticket #$num</a>: \"$title\", ";
        } else if (0 == $num) {
            $str = "Ticket #$num (usually small spelling and grammar fixes): \"$title\", Final ";
        }
        if (1 == $vote) {
            $str .= "1st";
        } else if (2 == $vote) {
            $str .= "2nd";
        }
        $str .= " vote";
    }
    return $str;
}

print("<p><strong>NOTE:</strong> \"Missed\" counts the same as \"abstain\".</p>\n\n<ol>\n\n");

ballot(ticket(-1, "Ok to vote on #270 even though there is no implementation yet", 0),
       15, 0, 3, 1);

ballot(ticket(270, "Updated RMA chapter", 1),
       13, 0, 5, 1);

ballot(ticket(265, "Support for large counts using derived datatypes", 1),
       14, 1, 1, 3);

ballot(ticket(140, "Add const Keyword to the C bindings", 1),
       16, 1, 1, 1);

ballot(ticket(274, "Matched probe Language Bindings / Language Bindings Support addition", 1),
       18, 0, 0, 1);

ballot(ticket(258, "Sparse Collectives on Process Topologies", 1),
       15, 0, 1, 3);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

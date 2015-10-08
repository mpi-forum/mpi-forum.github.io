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

ballot(ticket(287, "Shared Memory Interoperability for MPI", 1),
       16,0,0,2);

ballot(ticket(266, "MPIT Tool Interface / Reorganization of the Profiling Chapter", 1),
       15,0,1,2);

ballot(ticket(204, "Query minor/implementation specific versions", 1),
       15,0,1,2);

ballot(ticket(279, "Make C++ bindings optional", 1),
       12,3,3,0);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

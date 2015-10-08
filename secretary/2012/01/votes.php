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

ballot(ticket(287, "MPI_Comm_split_type functionality", 2),
       17, 1, 0, 0);

ballot(ticket(204, "Query minor/implementation specific versions", 2),
       18, 0, 0, 0);

ballot(ticket(279, "Make C++ bindings optional", 2),
       16, 1, 1, 0);

ballot(ticket(270, "Updated RMA chapter", 2),
       16, 1, 1, 0);

ballot(ticket(266, "MPIT Tool Interface / Reorganization of the Profiling Chapter", 2),
       18, 0, 0, 0);

ballot(ticket(299, "Change displs arguments in neighborhood w collectives to MPI_Aint", 1),
       17, 0, 1, 0);

ballot(ticket(229, "New MPI-3 Fortran Support - #A: Overview over all related tickets", 1),
       16, 0, 1, 1);

ballot(ticket(298, "Adding clarification to MPI_WIN_LOCK_ALL", 1),
       16, 0, 0, 2);

ballot("Should Fault Tolerance still be a gating factor for MPI-3.0?",
       5, 10, 3, 0);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

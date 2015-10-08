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

print("<ol>\n\n");
ballot(ticket(6, "Function Pointer Arguments to MPI::Grequest::Start", 1),
       23, 0, 0, 4, $passed);
ballot(ticket(10, "MPI_CANCEL Argument is Wrong Type", 1),
       22, 1, 0, 4, $passed);
ballot(ticket(11, "Remove C++ Deprecated Section", 1),
       23, 0, 0, 4, $passed);
ballot(ticket(41, "Typo in description of MPI_Cart_shift", 1),
       23, 0, 0, 4, $passed);
ballot(ticket(42, "Minor typo in description of MPI_Cart_rank", 1),
       23, 0, 0, 4, $passed);
ballot(ticket(49, "MPI-2.1 Errata MPI_MAX_OBJECT_NAME (page 237 lines 1+3, page 563, lines 18+20)", 1),
       23, 0, 0, 4, $passed);

ballot(ticket(21, "Typo in a personal name", 2),
       22, 1, 0, 4, $passed);
ballot(ticket(45, "Send Buffer Access", 2),
       21, 2, 0, 4, $passed);
print("</ol>\n\n");

include_once("$topdir/include/footer.php");

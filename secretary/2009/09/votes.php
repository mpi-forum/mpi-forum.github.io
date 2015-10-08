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

ballot("MPI v2.2 Frontmatter",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 1",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 2",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 3",
       14, 0, 1, 0);

ballot("MPI v2.1 Chapter 4",
       14, 0, 1, 0);

ballot("MPI v2.1 Chapter 5",
       14, 1, 0, 0);

ballot("MPI v2.1 Chapter 6",
       14, 1, 0, 0);

ballot("MPI v2.1 Chapter 7",
       14, 1, 0, 0);

ballot("MPI v2.1 Chapter 8",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 9",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 10",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 11",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 12",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 13",
       14, 1, 0, 0);

ballot("MPI v2.1 Chapter 14",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 15",
       15, 0, 0, 0);

ballot("MPI v2.1 Chapter 16",
       15, 0, 0, 0);

ballot("MPI v2.2 Appendix",
       14, 1, 0, 0);

ballot("MPI v2.2 Changelog",
       14, 1, 0, 0);

ballot("MPI v2.2 (entire document)",
       14, 1, 0, 0);

print("<p><hr width=50%></p>\n\n");

ballot(ticket(171, "change MPI_C_BOOL external32 size to 1 byte", 1),
       14, 0, 1, 0);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

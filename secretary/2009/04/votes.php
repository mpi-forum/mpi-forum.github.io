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
ballot(ticket(1, "Fortran MPI_*_ERRHANDLER callback functions are varargs", 1),
       20, 1, 1, 1, $passed);
ballot(ticket(3, "Repeating a Neighbor in a Graph Communicator Ambiguity with MPI_GRAPH_NEIGHBOR[_COUNT]", 1),
       21, 0, 0, 2, $passed);
ballot(ticket(4, "Remove MPI-2.1 A.1.1 p494:31-32 table", 1),
       21, 0, 0, 2, $passed);
ballot(ticket(8, "Text Updates to Language Bindings Chapter", 1),
       21, 0, 0, 2, $passed);
ballot(ticket(30, "Clarification to intercomm MPI_Barrier", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(40, "MPI-2.1 Errata MPI::F_DOUBLE_COMPLEX (page 495 line 11)", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(43, "MPI_REPLACE in MPI_Accumulate", 1),
       21, 0, 1, 1, $passed);
ballot(ticket(44, "Non blocking versus non-blocking versus nonblocking", 1),
       20, 0, 0, 3, $passed);
ballot(ticket(53, "Explicitly encourage routines for \"good\" one-sided memory for all memory types", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(60, "Modernize example on p 279", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(61, "MPI-2.1 Change-Log: Version number modified to 2.1", 1),
       21, 0, 1, 1, $passed);
ballot(ticket(63, "MPI_CHAR for printable characters - C & C++ consisteny", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(67, "MPI-2.1 Errata: Error in name of participating institution for MPI 2.1", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(68, "MPI-2.1 errata: Need to add acknowledgment for NSF support for MPI 2.1", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(74, "Nonnegative vs. non-negative", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(87, "Wording changes to collective chapter for consistency", 1),
       21, 0, 0, 2, $passed);
ballot(ticket(89, "Philosophical difference with current classification of barriers", 1),
       13, 1, 7, 2, $passed);
ballot(ticket(90, "Minor grammar corrections for collectives chapter", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(91, "Undefined term in description of Reduce-Scatter", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(92, "Need to fix MPI_EXSCAN advice to users", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(93, "Inconsistent description of arrays in collective operations", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(97, "Small bug in RMA example", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(101, "Version number changed to (2,2)", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(104, "MPI_ARGV_NULL and MPI_ARGVS_NULL missing on p465:13-15.", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(113, "Minor typo in MPI_ALLTOALLV", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(115, "Corrections to point-to-point chapter examples", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(118, "Corrections to collectives chapter: fix examples and remove deprecated functions", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(120, "Typos in Collectives Chapter", 1),
       22, 0, 0, 1, $passed);
ballot(ticket(123, "Fix errors in example in profiling chapter", 1),
       22, 0, 0, 1, $passed);

print("<hr>\n\n");

ballot(ticket(109, "MPI-3: Nonblocking Collective Operations", 1),
       21, 0, 0, 2, $passed);

print("<hr>\n\n");

ballot(ticket(9, "Consistency in \"Naming Conventions\" Section", 2),
       21, 0, 0, 2, $passed);
ballot(ticket(16, "Error in Example 4.18", 2),
       21, 0, 0, 2, $passed);
ballot(ticket(17, "Fix text about freeing error classes and codes", 2),
       21, 0, 0, 2, $passed);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

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
ballot(ticket(7, "Function pointer typedefs: \"_function\" vs. \"_fn\"", 1),
       11, 1, 4, 1, $passed);

ballot(ticket(13, "Small clarifications in chapter 10", 1),
       14, 0, 0, 3, $passed);

ballot(ticket(18, "New Predefined Datatypes", 1),
       12, 1, 3, 1, $passed);

ballot(ticket(19, "Inconsistent comments about intercommunicators", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(24, "Add a local Reduction Function", 1),
       11, 1, 4, 1, $passed);

ballot(ticket(27, "Regular (non-vector) version of MPI_Reduce_scatter", 1),
       13, 0, 2, 2, $passed);

ballot(ticket(31, "Add MPI_IN_PLACE option to Alltoall", 1),
       15, 0, 1, 1, $passed);

ballot(ticket(33, "Fix Scalability Issues in Graph Topology Interface", 1),
       9, 3, 5, 0, $passed);

ballot(ticket(37, "Clarify semantics of one-sided semantics when changing synchronization mode", 1),
       14, 0, 2, 1, $passed);

ballot(ticket(50, "Ibsend and Irsend Advice to Users misleading", 1),
       15, 0, 1, 1, $passed);

ballot(ticket(51, "Inconsistent use of MPI_ANY_SOURCE in argument description", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(55, "MPI-2.1 Cross-language attribute example is wrong", 1),
       15, 1, 0, 1, $passed);

ballot(ticket(57, "Fortran specific length types are not consistently listed", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(59, "Clarification on MPI::FILE_NULL, MPI::WIN_NULL and MPI::COMM_NULL", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(64, "Parameterized and optional named predefined datatypes in reduction operations", 1),
       16, 0, 1, 0, $passed);

ballot(ticket(65, "Predefined handles before MPI_Init and constants in general, Clarification Solution 1", 1),
       14, 0, 3, 0, $passed);

ballot(ticket(66, "Extending MPI_COMM_CREATE to create several disjoint sub-communicators from an intracommunicator", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(70, "Misleading rationale for MPI_Test (and MPI_Win_test)", 1),
       15, 0, 0, 2, $passed);

ballot(ticket(71, "Specify order of atribute delete callbacks on MPI_COMM_SELF at MPI_FINALIZE", 1),
       15, 1, 0, 1, $passed);

ballot(ticket(72, "Convenience function: MPI_CART_SHIFT_VECTOR", 1),
       0, 12, 4, 1, $failed);

ballot(ticket(77, "Version 2.2 intro and text", 1),
       15, 0, 0, 2, $passed);

ballot(ticket(80, "Misleading discussion of thread ordering", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(94, "Add MPI_IN_PLACE option to Exscan", 1),
       13, 0, 3, 1, $passed);

ballot(ticket(98, "Additional change requried for changes to Send Buffer restriction (#45)", 1),
       15, 1, 0, 1, $passed);

ballot(ticket(99, "Change-Log is also used for important clarifications for the MPI users.", 1),
       15, 0, 0, 2, $passed);

ballot(ticket(100, "Change-Log from Version 2.1 to Version 2.2", 1),
       15, 0, 0, 2, $passed);

ballot(ticket(103, "Fortran in this document refers to Fortran 90", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(105, "Matching arguments and collective routines.", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(107, "Types of predefined constants in Appendix A", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(116, "Data type chapter example corrections", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(121, "Filling out list of CHAR types in Section 5.9.3", 1), 
       15, 0, 0, 2, $passed);

ballot(ticket(122, "Typo in MPI_CART_SHIFT example 7.4", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(124, "Slightly changed description of MPI_REDUCE_SCATTER, explanation on \"in place\"", 1),
       15, 0, 0, 2, $passed);

ballot(ticket(127, "Add C++ versions of Fortran COMPLEX8 etc.", 1),
       13, 0, 3, 1, $passed);

ballot(ticket(128, "Verify and correct example \"Building Name Service for Intercommunications\"", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(132, "Change \"a data item\" to \"data\" in allgather on intercommunicators", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(135, "Define matching semantics of collective operations in threaded environments", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(136, "Advice to users about associativity in reduction operations", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(137, "MPI_REQUEST_GET_STATUS should allow inactive and NULL request arguments", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(141, "MPI_Aint/MPI_ADDRESS_KIND and MPI_Offset/MPI_OFFSET_KIND equality", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(142, "Fix incorrect mentions of 3 routines", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(143, "MPI_Request_free bad advice to users", 1),
       15, 1, 1, 0, $passed);

ballot(ticket(146, "Fix MPI_INIT description text", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(148, "Missing entries in the Index pages.", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(149, "Obsolete reference to deprecated function MPI_Attr_get", 1),
       16, 0, 0, 1, $passed);

ballot(ticket(150, "Deprecate the C++ bindings", 1),
       16, 1, 0, 0, $passed);

ballot(ticket(151, "Predefined handles before MPI_Init and constants in general, Enhancment Solution 2", 1),
       0, 12, 5, 0, $failed);

print("<hr>\n\n");

ballot(ticket(109, "MPI-3: Nonblocking Collective Operations", 2),
       16, 0, 0, 1, $passed);

print("<hr>\n\n");

ballot(ticket(1, "Fortran MPI_*_ERRHANDLER callback functions are varargs", 2),
       15, 0, 1, 1, $passed);

ballot(ticket(3, "Repeating a Neighbor in a Graph Communicator Ambiguity with MPI_GRAPH_NEIGHBOR[_COUNT]", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(4, "Remove MPI-2.1 A.1.1 p494:31-32 table", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(8, "Text Updates to Language Bindings Chapter", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(30, "Clarification to intercomm MPI_Barrier", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(40, "MPI-2.1 Errata MPI::F_DOUBLE_COMPLEX (page 495 line 11)", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(43, "MPI_REPLACE in MPI_Accumulate", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(44, "Non blocking versus non-blocking versus nonblocking", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(53, "Explicitly encourage routines for \"good\" one-sided memory for all memory types", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(60, "Modernize example on p 279", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(61, "MPI-2.1 Change-Log: Version number modified to 2.1", 2),
       14, 1, 1, 1, $passed);

ballot(ticket(63, "MPI_CHAR for printable characters - C & C++ consisteny", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(67, "MPI-2.1 Errata: Error in name of participating institution for MPI 2.1", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(74, "Nonnegative vs. non-negative", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(87, "Wording changes to collective chapter for consistency", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(89, "Philosophical difference with current classification of barriers", 2),
       10, 2, 4, 1, $passed);

ballot(ticket(90, "Minor grammar corrections for collectives chapter", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(91, "Undefined term in description of Reduce-Scatter", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(92, "Need to fix MPI_EXSCAN advice to users", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(93, "Inconsistent description of arrays in collective operations", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(97, "Small bug in RMA example", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(101, "Version number changed to (2,2)", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(104, "MPI_ARGV_NULL and MPI_ARGVS_NULL missing on p465:13-15.", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(113, "Minor typo in MPI_ALLTOALLV", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(115, "Corrections to point-to-point chapter examples", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(118, "Corrections to collectives chapter: fix examples and remove deprecated functions", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(120, "Typos in Collectives Chapter", 2),
       16, 0, 0, 1, $passed);

ballot(ticket(123, "Fix errors in example in profiling chapter", 2),
       16, 0, 0, 1, $passed);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

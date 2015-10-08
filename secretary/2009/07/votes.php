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

ballot(ticket(7, "Function pointer typedefs: \"_function\" vs. \"_fn\"", 2),
       23, 1, 1, 0);

ballot(ticket(13, "Small clarifications in chapter 10", 2),
       21, 0, 0, 4);

ballot(ticket(18, "New Predefined Datatypes", 2),
       20, 1, 2, 2);

ballot(ticket(19, "Inconsistent comments about intercommunicators", 2),
       25, 0, 0, 0);

ballot(ticket(24, "Add a local Reduction Function", 2),
       21, 1, 2, 1);

ballot(ticket(27, "Regular (non-vector) version of MPI_Reduce_scatter", 2),
       24, 0, 1, 0);

ballot(ticket(31, "Add MPI_IN_PLACE option to Alltoall", 2),
       25, 0, 0, 0);

ballot(ticket(33, "Fix Scalability Issues in Graph Topology Interface", 2),
       18, 0, 6, 1);

ballot(ticket(37, "Clarify semantics of one-sided semantics when changing synchronization mode", 2),
       24, 0, 1, 0);

ballot(ticket(50, "Ibsend and Irsend Advice to Users misleading", 2),
       25, 0, 0, 0);

ballot(ticket(51, "Inconsistent use of MPI_ANY_SOURCE in argument description", 2),
       20, 0, 2, 3);

ballot(ticket(55, "MPI-2.1 Cross-language attribute example is wrong", 2),
       24, 1, 0, 0);

ballot(ticket(57, "Fortran specific length types are not consistently listed", 2),
       25, 0, 0, 0);

ballot(ticket(64, "Parameterized and optional named predefined datatypes in reduction operations", 2),
       25, 0, 0, 0);

ballot(ticket(65, "Predefined handles before MPI_Init and constants in general, Clarification Solution 1", 2),
       25, 0, 0, 0);

ballot(ticket(66, "Extending MPI_COMM_CREATE to create several disjoint sub-communicators from an intracommunicator", 2),
       25, 0, 0, 0);

ballot(ticket(68, "MPI-2.1 errata: Need to add acknowledgment for NSF support for MPI 2.1", 2),
       23, 0, 0, 2);

ballot(ticket(70, "Misleading rationale for MPI_Test (and MPI_Win_test)", 2),
       22, 0, 0, 3);

ballot(ticket(71, "Specify order of attribute delete callbacks on MPI_COMM_SELF at MPI_FINALIZE", 2),
       24, 1, 0, 0);

ballot(ticket(77, "Version 2.2 intro and text", 2),
       22, 0, 0, 3);

ballot(ticket(94, "Add MPI_IN_PLACE option to Exscan", 2),
       25, 0, 0, 0);

ballot(ticket(98, "Additional change requried for changes to Send Buffer restriction (#45)", 2),
       20, 1, 4, 0);

ballot(ticket(99, "Change-Log is also used for important clarifications for the MPI users.", 2),
       22, 0, 0, 3);

ballot(ticket(100, "Change-Log from Version 2.1 to Version 2.2", 2),
       22, 0, 0, 3);

ballot(ticket(103, "Fortran in this document refers to Fortran 90", 2),
       22, 0, 0, 3);

ballot(ticket(105, "Matching arguments and collective routines.", 2),
       17, 0, 6, 2);

ballot(ticket(107, "Types of predefined constants in Appendix A", 2),
       11, 3, 8, 3);

ballot(ticket(116, "Data type chapter example corrections", 2),
       22, 0, 0, 3);

ballot(ticket(121, "Filling out list of CHAR types in Section 5.9.3", 2),
       22, 0, 0, 3);

ballot(ticket(122, "Typo in MPI_CART_SHIFT example 7.4", 2),
       23, 0, 0, 2);

ballot(ticket(124, "Slightly changed description of MPI_REDUCE_SCATTER, explanation on \"in place\"", 2),
       21, 0, 0, 4);

ballot(ticket(127, "Add C++ versions of Fortran COMPLEX8 etc.", 2),
       5, 6, 14, 0);

ballot(ticket(128, "Verify and correct example \"Building Name Service for Intercommunications\"", 2),
       22, 0, 0, 3);

ballot(ticket(132, "Change \"a data item\" to \"data\" in allgather on intercommunicators", 2),
       23, 0, 0, 2);

ballot(ticket(136, "Advice to users about associativity in reduction operations", 2),
       22, 0, 1, 2);

ballot(ticket(137, "MPI_REQUEST_GET_STATUS should allow inactive and NULL request arguments", 2),
       25, 0, 0, 0);

ballot(ticket(141, "MPI_Aint/MPI_ADDRESS_KIND and MPI_Offset/MPI_OFFSET_KIND equality", 2),
       23, 0, 0, 2);

ballot(ticket(142, "Fix incorrect mentions of 3 routines", 2),
       21, 0, 0, 4);

ballot(ticket(143, "MPI_Request_free bad advice to users", 2),
       25, 0, 0, 0);

ballot(ticket(146, "Fix MPI_INIT description text", 2),
       23, 0, 0, 2);

ballot(ticket(148, "Missing entries in the Index pages.", 2),
       23, 0, 0, 2);

ballot(ticket(149, "Obsolete reference to deprecated function MPI_Attr_get", 2),
       21, 0, 0, 4);

ballot(ticket(150, "Deprecate the C++ bindings", 2),
       18, 2, 1, 4);

print("</ol>\n\n");

include_once("$topdir/include/footer.php");

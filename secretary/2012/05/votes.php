<?
$short_desc = "Votes";
$long_desc = "Votes and Formal Readings from the meeting";
$file = "votes.php";
include_once("subpage.php");

$passed = "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>";
$failed = "<font color=\"#bb0000\"><strong>Ballot failed</strong></font>";


function ticket($num, $title, $vote) 
{
    global $trac_ticket_base;

    if ($num < 0) {
        if (empty($title)) {
            $str = get_trac_title($num) . " ";
        } else {
            $str = "$title ";
        }
    } else {
        if ($num > 0) {
            $str = "<a href=\"$trac_ticket_base$num\">Ticket #$num</a>: \"";

        if (empty($title)) {
            $str .= get_trac_title($num);
        } else {
            $str .= "$title ";
        }
        $str .= "\", ";

        } else if (0 == $num) {
            $str = "Ticket #$num (usually small spelling and grammar fixes): \"$title\", Final ";
        }
        if (0 == $vote) {
            $str .= "1st-and-only vote (ticket 0)";
        } else if (1 == $vote) {
            $str .= "1st vote";
        } else if (2 == $vote) {
            $str .= "2nd vote";
        }
    }
    return $str;
}

////////////////////////////////
// Prior meeting

print("<h2>Prior Meeting</h2>

<p>See the <a href=\"../03/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

print("<li> There were no formal readings at this meeting.</li>\n");
print("</ol><p>\n\n");

////////////////////////////////
// Votes

print("$line\n\n<h2>Votes:</h2>
<p><strong>NOTE:</strong> \"Missed\" counts the same as \"abstain\".</p>

<p><ol>\n\n");

////////////////////////////////
// First votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
ballot52012(ticket(187, "Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types", 1),
       15, 0, 1, 0);

ballot52012(ticket(192, "C++ binding for Dist_graph_neighbors_count is badly broken", 1),
       14, 1, 1, 0);

ballot52012(ticket(195, "Topology awareness in MPI_Dims_create", 1),
       2, 10, 4, 0);

ballot52012(ticket(217, "MPI3 Hybrid Programming: Proposal for Helper Threads", 1),
       7, 8, 1, 0);

ballot52012(ticket(256, "MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined", 1),
       15, 0, 1, 0);

ballot52012(ticket(271, "Functions to query MPI_Info object attached to windows and communicators", 1),
       14, 1, 1, 0);

ballot52012(ticket(273, "Add Immediate versions of nonblocking collective I/O routines", 1),
       8, 2, 6, 0);

ballot52012(ticket(278, "Update examples to not use deprecated constructs (where possible)", 1),
       10, 0, 6, 0);

ballot52012(ticket(281, "Remove C++ Bindings", 1),
       11, 5, 0, 0);

ballot52012(ticket(294, "MPI_UNWEIGHTED should not be NULL", 1),
       16, 0, 0, 0);

ballot52012(ticket(300, "Fix issue with definition of nonblocking in One Sided Chapter", 1),
       14, 0, 2, 0);

ballot52012(ticket(303, "Move MPI-1 deprecated functions to new \"Removed Interfaces\" chapter", 1),
       9, 5, 2, 0);

ballot52012(ticket(313, "MPI_INIT & MPI_FINALIZE", 1),
       11, 1, 4, 0);

ballot52012(ticket(310, "clarify MPI behavior when multiple MPI processes run in the same address space", 1),
       3, 7, 6, 0);

ballot52012(ticket(317, "correct error related to MPI_REQUEST_FREE", 1),
       15, 0, 1, 0);

ballot52012(ticket(323, "User-Level Failure Mitigation", 1),
       7, 5, 4, 0);

ballot52012(ticket(328, "fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv", 1),
       16, 0, 0, 0);

////////////////////////////////
// Second votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
ballot(ticket(308, "RMA - Remove sentence on offset in datatypes", 2),
       16, 0, 0, 0);

ballot(ticket(309, "RMA - Clarify usage of status for request-based RMA operations", 2),
       16, 0, 0, 0);

ballot(ticket(284, "Allocate a shared memory window", 2),
       13, 0, 3, 0);

ballot(ticket(280, "Add a new datatype creation routine - MPI_Type_create_hindexed_block", 2),
       16, 0, 0, 0);

ballot(ticket(168, "Nonblocking Communicator Duplication", 2),
       13, 1, 2, 0);

ballot(ticket(272, "Remove non-blocking collective C++ bindings", 2),
       13, 1, 2, 0);

ballot(ticket(286, "Noncollective Communicator Creation", 2),
       15, 0, 1, 0);

ballot(ticket(305, "Update MPI_Intercomm_create to use collective tag space", 2),
       14, 1, 1, 0);



print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

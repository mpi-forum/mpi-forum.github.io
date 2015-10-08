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
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><strong>NOTE:</strong> As of the end of the meeting, the owners of these tickets intend to bring them for vote at the next meeting.

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");
reading(192, "C++ binding for Dist_graph_neighbors_count is badly broken");

reading(194, "Ensure MPI_Dims_create is really suitable for MPI_Cart_create");
reading(195, "Topology awareness in MPI_Dims_create");

reading(217, "MPI3 Hybrid Programming: Proposal for Helper Threads");
reading(256, "MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined");
reading(271, "Functions to query MPI_Info object attached to windows and communicators");
reading(273, "Add Immediate versions of nonblocking collective I/O routines (re-reading from last meeting)");
reading(278, "Update examples to not use deprecated constructs (where possible)");
reading(281, "Remove C++ bindings (re-reading from last meeting)");
reading(294, "MPI_UNWEIGHTED should not be NULL (re-reading from last meeting)");

reading(300, "Fix issue with definition of nonblocking in One Sided Chapter");
reading(303, "Move MPI-2 deprecated functions to new \"Removed interfaces\" chapter");
reading(310, "clarify MPI behavior when multiple MPI processes run in the same address space");
reading(311, "provide a mechanism for migrating threads between MPI processes");
reading(313, "MPI_INIT & MPI_FINALIZE");
reading(317, "correct error related to MPI_REQUEST_FREE");
reading(323, "New FT proposal");
reading(324, "Clarify MPI_ERRORS_ARE_FATAL scope of abort <font color=red>(this was changed to ticket 0 -- SEE TICKET FOR MORE DETAILS)</font>");
reading(326, "MPI3 Fault Tolerance - Files");
reading(327, "MPI3 Fault Tolerance - Dynamic process management");
reading(328, "fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv");

printf("</ol><p>\n\n");

////////////////////////////////
// Votes

print("$line\n\n<h2>Votes:</h2>
<p><strong>NOTE:</strong> \"Missed\" counts the same as \"abstain\".</p>

<p><ol>\n\n");

////////////////////////////////
// Ticket 0 votes

ballot(ticket(0, "Big ticket 0 glob: #162, #182, #185, #207, #215, #219, #254, #255, #262, #263, #312, #322", 0),
       17, 0, 0, 4);

ballot(ticket(125, "Use of [] in output arrays", 0),
       18, 0, 0, 3);

ballot(ticket(126, "Consistent use of [] for input arrays", 0),
       18, 0, 0, 3);

ballot(ticket(293, "K&R style on 6.7.6", 0),
       18, 0, 0, 3);

ballot(ticket(321, "MPI_WAIT/TEST language unclear about non blocking I/O, Generalized, or collective requests.", 0),
       19, 0, 0, 2);

ballot(ticket(158, "Clarification that MPI_Cart_map and MPI_Graph_map are local calls", 0),
       16, 2, 1, 2);

ballot(ticket(259, "Text updates for MPI_DIST_GRAPH", 0),
       17, 1, 0, 3);

////////////////////////////////
// First votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
ballot(ticket(308, "RMA - Remove sentence on offset in datatypes", 1),
       17, 0, 2, 2);

ballot(ticket(309, "RMA - Clarify usage of status for request-based RMA operations", 1),
       19, 0, 0, 2);

ballot(ticket(284, "Allocate a shared memory window", 1),
       16, 0, 3, 2);

ballot(ticket(280, "Add a new datatype creation routine - MPI_Type_create_hindexed_block", 1),
       19, 0, 1, 1);

ballot(ticket(168, "Nonblocking Communicator Duplication", 1),
       17, 0, 1, 3);

ballot(ticket(272, "Remove non-blocking collective C++ bindings", 1),
       17, 0, 2, 2);

ballot(ticket(286, "Noncollective Communicator Creation", 1),
       19, 0, 1, 1);

ballot(ticket(305, "Update MPI_Intercomm_create to use collective tag space", 1),
       19, 0, 1, 1);

////////////////////////////////
// Second votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
ballot(ticket(298, "Adding clarification to MPI_WIN_LOCK_ALL", 2),
       20, 0, 0, 1);

ballot(ticket(229, "New MPI-3 Fortran Support - #A: Overview over all related tickets", 2),
       19, 0, 1, 1);

ballot(ticket(299, "Change displs arguments in neighborhood w collectives to MPI_Aint", 2),
       19, 0, 1, 1);

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

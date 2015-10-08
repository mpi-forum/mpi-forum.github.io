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

<p>See the <a href=\"../05/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

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
<p><strong>NOTE <font size=+3>NOTE <font color=red size=+5>NOTE:</font></font></strong> The Forum voted during this meeting that \"abstain\" now means the same as \"no\".  There is no longer a \"missed\" category -- if you missed a vote, it's the same as abstaining, which is therefore a \"no\".

<p><ol>\n\n");

////////////////////////////////
// First votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(

// First-and-only vote for this errata item
ballot72012(ticket(340, "C/Fortran predefined datatypes for C++ types", 1),
            19, 0, 2);


////////////////////////////////
// Second votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
ballot72012(ticket(187, "Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types", 2),
            20, 0, 1);

ballot72012(ticket(192, "C++ binding for Dist_graph_neighbors_count is badly broken", 2),
            19, 1, 1);

ballot72012(ticket(256, "MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined", 2),
            20, 0, 1);

ballot72012(ticket(271, "Functions to query MPI_Info object attached to windows and communicators", 2),
            20, 0, 1);

ballot72012(ticket(278, "Update examples to not use deprecated constructs (where possible)", 2),
            20, 0, 1);

ballot72012(ticket(281, "Remove C++ Bindings", 2),
            15, 4, 2);

ballot72012(ticket(294, "MPI_UNWEIGHTED should not be NULL", 2),
            20, 0, 1);

ballot72012(ticket(300, "Fix issue with definition of nonblocking in One Sided Chapter", 2),
            20, 0, 1);

ballot72012(ticket(303, "Move MPI-1 deprecated functions to new \"Removed Interfaces\" chapter", 2),
            16, 2, 3);

ballot72012(ticket(313, "MPI_INIT & MPI_FINALIZE", 2),
            17, 1, 3);

ballot72012(ticket(317, "correct error related to MPI_REQUEST_FREE", 2),
            19, 0, 2);

ballot72012(ticket(328, "fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv", 2),
            20, 0, 1);

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

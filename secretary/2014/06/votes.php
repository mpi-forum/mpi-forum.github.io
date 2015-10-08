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
            $str .= "1st-and-only vote";
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

<p>See the <a href=\"../../2014/03/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

print("<p>Errata</p>");
reading(374, "Comm_free/Type_free/Win_free: clarify attribute destructor semantics");
reading(383, "Consistency of tools information interface variable information");
reading(393, "Fortran module CONTAINS - Advice to implementors");
reading(403, "Error in description of size-specific types");
reading(413, "Add example for use of shared memory");
reading(415, "Errata: mpi_f08 MPI_Status must use INTEGER fields");
reading(419, "Neighborhood collectives not for non-symmetric general graphs.");
reading(422, "Chap. 2 Terms & Conventions consistency updates (errata)");
reading(424, "Incorrect Fortran type for flag in IMPROBE");
reading(427, "Fortran cross-reference update (ticket-0)");
reading(429, "Clarification on assertions on shared memory windows");

print("<p>Normal tickets</p>");
reading(323, "User-Level Failure Mitigation");
reading(349, "MPI_Aint addressing arithmetic");
reading(380, "MPI_Comm_create_endpoints Proposal");
reading(402, "Update dynamic window example to use MPI_Aint_add");
reading(404, "MPI_Aint diff arithmetic");
reading(411, "MPI info key namespacing");
reading(421, "MPI_Aint addressing arithmetic (ticket-0 additions)");
reading(431, "MPI 3.0 Errata: MPI Address Errata");

print("</ol><p>\n\n");

////////////////////////////////
// Votes

$registered = 20;
$attended = 20;
$ooe = 20;
$imove = 19;
$ivq = 3 / 4 * $imove;

print("$line\n\n<h2>Votes:</h2>

<table border=0>\n");
function row($left, $right) {
    print("<tr><td align=right valign=top><strong>$left:</strong></td><td align=left>$right</td></tr>\n");
}
row("Registered", $registered);
row("Attended", $attended);
row("OOE", $ooe);
row("IMOVE", $imove);
row("Votes needed for<br />individual vote quorum", "&gt;$ivq");

print("</table>

<p><ol>\n\n");

////////////////////////////////

// Only vote for accepting changes since reading
ballot3152013("Accept changes to #403 since it was read last meeting (1st-and-only vote)",
18, 0, 0, 1, $imove);
ballot3152013("Accept changes to #419 since it was read last meeting (1st-and-only vote)",
18, 0, 0, 1, $imove);

// First-and-only vote for errata tickets
ballot3152013(ticket(374, "Comm_free/Type_free/Win_free: clarify attribute destructor semantics", 0),
              5, 5, 8, 1, $imove);
ballot3152013(ticket(393, "Fortran module CONTAINS - Advice to implementors", 0),
18, 0, 0, 1, $imove);
ballot3152013(ticket(403, "Error in description of size-specific types", 0),
18, 0, 0, 1, $imove);
ballot3152013(ticket(413, "Add example for use of shared memory", 0),
16, 1, 1, 1, $imove);
ballot3152013(ticket(415, "Errata: mpi_f08 MPI_Status must use INTEGER fields", 0),
18, 0, 0, 1, $imove);
ballot3152013(ticket(419, "Neighborhood collectives not for non-symmetric general graphs.", 0),
18, 0, 0, 1, $imove);
ballot3152013(ticket(422, "Chap. 2 Terms & Conventions consistency updates (errata)", 0),
0, 15, 3, 1, $imove);
ballot3152013(ticket(424, "Incorrect Fortran type for flag in IMPROBE", 0),
18, 0, 0, 1, $imove);
ballot3152013(ticket(427, "Fortran cross-reference update (ticket-0)", 0),
0, 13, 5, 1, $imove);

// First of 2 votes (i.e., non-errata)
ballot3152013(ticket(273, "Add Immediate versions of nonblocking collective I/O routines", 1),
17, 0, 1, 1, $imove);
ballot3152013(ticket(349, "MPI_Aint addressing arithmetic", 1),
16, 0, 2, 1, $imove);
ballot3152013(ticket(402, "Update dynamic window example to use MPI_Aint_add", 1),
16, 0, 2, 1, $imove);
ballot3152013(ticket(404, "MPI_Aint diff arithmetic", 1),
16, 0, 2, 1, $imove);
ballot3152013(ticket(369, "Add same_disp_unit info key for RMA window creation", 1),
17, 0, 1, 1, $imove);
ballot3152013(ticket(357, "thread-safety of MPI_INITIALIZED, MPI_FINALIZED, MPI_QUERY_THREAD and MPI_IS_THREAD_MAIN in all uses for library correctness", 1),
18, 0, 0, 1, $imove);

// Second of 2 votes (i.e., non-errata)
ballot3152013(ticket(400, "MPI_T: new return code to catch invalid use of interface", 2),
              18, 0, 0, 1, $imove);


print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

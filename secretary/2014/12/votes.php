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

<p>See the <a href=\"../../2014/06/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

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
reading(383, "Consistency of tools information interface variable information");
reading(394, "MPI_T: Clarify values of watermark variables between and during stopped and started periods");
reading(433, "Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers");
reading(441, "Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE.");
reading(444, "Errata: Fortran and Persistent Requests");
reading(431, "Errata: MPI Address Errata");
reading(421, "Errata: MPI_Aint addressing arithmetic (on top of 349/402/404)");
reading(447, "Errata: Tools section is an exception: no Fortran interface");
reading(449, "Errata: Missing in C in wording about handle-comparison");
reading(451, "Errata: Correcting description of nonblocking");
reading(453, "Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons");

print("<p>Normal tickets</p>");
reading(380, "Endpoints");
reading(461, "Wildcard info keys");
reading(411, "MPI info key namespacing");

print("</ol><p>\n\n");

////////////////////////////////
// Votes

$registered = 23;
$attended = 23;
$ooe = 23;
$imove = 21;
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
ballot3152013("CHANGE SINCE 2-WEEK DEADLINE: Add Immediate versions of nonblocking collective I/O routines (1st-and-only vote)",
  21, 0, 0, 0, $imove);
ballot3152013("CHANGE SINCE 2-WEEK DEADLINE: Add same_disp_unit info key for RMA window creation (1st-and-only vote)",
  21, 0, 0, 0, $imove);
ballot3152013("CHANGE SINCE 2-WEEK DEADLINE: Errata: MPI_Aint addressing arithmetic (1st-and-only vote)",
  21, 0, 0, 0, $imove);
ballot3152013("CHANGE SINCE 2-WEEK DEADLINE: Errata: Missing in C in wording about handle-comparison (1st-and-only vote)",
  21, 0, 0, 0, $imove);

// First-and-only vote for errata tickets
ballot3152013(ticket(383, "Consistency of tools information interface variable information", 0),
  20, 0, 1, 0, $imove);
ballot3152013(ticket(394, "MPI_T: Clarify values of watermark variables between and during stopped and started periods", 0),
  21, 0, 0, 0, $imove);
ballot3152013(ticket(433, "Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers", 0),
  21, 0, 0, 0, $imove);
ballot3152013(ticket(441, "Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE.", 0),
  20, 1, 0, 0, $imove);
ballot3152013(ticket(444, "Errata: Fortran and Persistent Requests", 0),
  21, 0, 0, 0, $imove);
ballot3152013(ticket(431, "Errata: MPI Address Errata", 0),
  20, 0, 0, 1, $imove);
ballot3152013(ticket(421, "Errata: MPI_Aint addressing arithmetic (on top of 349/402/404)", 0),
  20, 0, 0, 1, $imove);
ballot3152013(ticket(447, "Errata: Tools section is an exception: no Fortran interface", 0),
  19, 1, 0, 1, $imove);
ballot3152013(ticket(449, "Errata: Missing in C in wording about handle-comparison", 0),
  20, 0, 0, 1, $imove);
ballot3152013(ticket(451, "Errata: Correcting description of nonblocking", 0),
  21, 0, 0, 0, $imove);
ballot3152013(ticket(453, "Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons", 0),
  21, 0, 0, 0, $imove);

// First of 2 votes (i.e., non-errata)

// Second of 2 votes (i.e., non-errata)
ballot3152013(ticket(273, "Add Immediate versions of nonblocking collective I/O routines", 2), 20, 0, 1, 0, $imove);
ballot3152013(ticket(349, "MPI_Aint addressing arithmetic", 2), 21, 0, 0, 0, $imove);
ballot3152013(ticket(402, "Update dynamic window example to use MPI_Aint_add", 2), 21, 0, 0, 0, $imove);
ballot3152013(ticket(404, "MPI_Aint diff arithmetic", 2), 21, 0, 0, 0, $imove);
ballot3152013(ticket(369, "Add same_disp_unit info key for RMA window creation", 2), 21, 0, 0, 0, $imove);
ballot3152013(ticket(357, "thread-safety of MPI_INITIALIZED, MPI_FINALIZED, MPI_QUERY_THREAD and MPI_IS_THREAD_MAIN in all uses for library correctness", 2), 21, 0, 0, 0, $imove);


print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

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

<p>See the <a href=\"../../2013/12/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

reading(273, "Add Immediate versions of nonblocking collective I/O routines");
reading(323, "User-Level Failure Mitigation");
reading(349, "MPI_Aint addressing arithmetic");
reading(357, "thread-safety of MPI_INITIALIZED, MPI_FINALIZED, MPI_QUERY_THREAD and MPI_IS_THREAD_MAIN in all uses for library correctness");
reading(369, "Add same_disp_unit info key for RMA window creation");
reading(380, "MPI_Comm_create_endpoints Proposal");
reading(402, "Update dynamic window example to use MPI_Aint_add");
reading(404, "MPI_Aint diff arithmetic");
reading(405, "MPI_T: Errata item to explicitly state the intent of MPI_CHAR in the tools interface");
reading(406, "MPI_T: Errata item to remove MPI_T_ERR_INVALID_ITEM");
reading(408, "Deprecate mpif.h and freeze the mpi module");
reading(409, "Re-order chapters: Lang Bindings, Deprecated, Removed");
reading(411, "MPI info key namespacing");

print("</ol><p>\n\n");

////////////////////////////////
// Votes

$registered = 18;
$attended = 18;
$ooe = 22;
$imove = 18;
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

// First-and-only vote for errata tickets
ballot3152013(ticket(405, "MPI_T: Errata item to explicitly state the intent of MPI_CHAR in the tools interface", 0),
              16, 0, 0, 2, $imove);

ballot3152013(ticket(406, "MPI_T: Errata item to remove MPI_T_ERR_INVALID_ITEM", 0),
              16, 0, 0, 2, $imove);

// Only vote for accepting changes since reading
ballot3152013("Accept changes to #357 since it was read last meeting (1st-and-only vote)",
              16, 0, 0, 2, $imove);

// First of 2 votes (i.e., non-errata)
ballot3152013(ticket(400, "MPI_T: new return code to catch invalid use of interface", 1),
              16, 0, 0, 2, $imove);

// Second of 2 votes (i.e., non-errata)
ballot3152013(ticket(377, "MPI_T get variables and categories by index", 2),
              16, 0, 0, 2, $imove);
ballot3152013(ticket(378, "MPI_T Optional output parameters", 2),
              16, 0, 0, 2, $imove);


print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

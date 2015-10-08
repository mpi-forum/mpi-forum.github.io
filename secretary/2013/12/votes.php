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

<p>See the <a href=\"../../2013/09/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

reading(400, "MPI_T: new return code to catch invalid use of interface");
reading(349, "MPI_Aint addressing arithmetic");
print("</ol><p>\n\n");

////////////////////////////////
// Votes

$registered = 19;
$attended = 20;
$ooe = 21;
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

// First-and-only vote for errata tickets
#ballot3152013(ticket(385, "MPI 3.0 Errata: Tools interface: MPI_T_PVAR_CLASS_SIZE description"),
#              12, 0, 2, 0, $imove);

// First of 2 votes (i.e., non-errata)
ballot3152013("Accept changes to #377 since it was read last meeting",
              18, 0, 0, 1, $imove);

ballot3152013(ticket(377, "MPI_T get variables and categories by index", 1),
              18, 0, 1, 0, $imove);

ballot3152013(ticket(378, "MPI_T Optional output parameters", 1),
              18, 0, 1, 0, $imove);

// Second of 2 votes (i.e., non-errata)
ballot3152013(ticket(375, "Message Queue Support For Debugger Side Document", 2),
              18, 0, 0, 1, $imove);


print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

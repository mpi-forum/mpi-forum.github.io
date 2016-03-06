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

<p>See the <a href=\"../../2015/12/\">prior meeting</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

//print("$line\n\n<h2>Formal Readings:</h2>
//
//<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

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

print("Notes:
<ul>
<li> \"Miss\" counts the same as \"abstain\"</li>
</ul><p>");

// Only vote for accepting changes since reading
ballot3152013("CHANGE SINCE 2-WEEK WINDOW: Addition of errata item for #29 Pair datatypes example (no no vote)",
  21, 0, 0, 0, $imove);
ballot3152013("#29 Pair datatypes example (1st-and-only vote)",
  21, 0, 0, 0, $imove);

ballot3152013("CHANGE SINCE 2-WEEK WINDOW: Addition of errata item for #34 DIMS_CREATE example fix)",
  19, 0, 2, 0, $imove);
ballot3152013("#34 DIMS_CREATE example fix (1st-and-only vote)",
  21, 0, 0, 0, $imove);

ballot3152013("#12 MPI_T example error (1st-and-only vote)",
  21, 0, 0, 0, $imove);

ballot3152013("#5 MPIR_Being_debugged (1st of 2 votes)",
  20, 0, 1, 0, $imove);
ballot3152013("#7 MPI_COMM_FREE advice to implementers (1st of 2 votes)",
  21, 0, 0, 0, $imove);

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

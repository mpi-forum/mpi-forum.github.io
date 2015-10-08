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

<p>See the <a href=\"../../2015/06/\">prior meeting</a> to know what will be coming up for this meeting.</p>\n\n");

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

$registered = 25;
$attended = 24;
$ooe = 25;
$imove_1 = 23;
# One organization didn't show up until the last ballot, thereby
# changing the iMOVE number. :-(
$imove_2 = 24;
$ivq_1 = 3 / 4 * $imove_1;
$ivq_2 = 3 / 4 * $imove_2;

print("$line\n\n<h2>Votes:</h2>

<table border=0>\n");
function row($left, $right) {
    print("<tr><td align=right valign=top><strong>$left:</strong></td><td align=left>$right</td></tr>\n");
}
row("Registered", $registered);
row("Attended", $attended);
row("OOE", $ooe);
row("IMOVE 1", $imove_1);
row("Votes needed for<br />individual vote quorum 1", "&gt;$ivq_1");
row("IMOVE 2<br />(an organization showed up for the last vote)", $imove_2);
row("Votes needed for<br />individual vote quorum 2", "&gt;$ivq_2");

print("</table>

<p><ol>\n\n");

////////////////////////////////

print("Notes:
<ul>
<li> All votes in this section used the IMOVE value 1 ($imove_1) and vote qurorum 1 ($ivq_1).</li>
<li> \"Miss\" counts the same as \"abstain\"</li>
</ul><p>");

// Only vote for accepting changes since reading
ballot3152013("CHANGE SINCE LAST MEETING: Procedures document (no no vote)",
  20, 0, 0, 3, $imove_1);
ballot3152013("Procedures document (1st-and-only vote)",
  20, 0, 0, 3, $imove_1);

ballot3152013("CHANGE SINCE LAST MEETING: Tools chapter (1st-and-only vote)",
  20, 0, 0, 3, $imove_1);
ballot3152013("CHANGE SINCE LAST MEETING: RMA chapter (1st-and-only vote)",
  20, 0, 0, 3, $imove_1);
ballot3152013("CHANGE SINCE 4-WEEK WINDOW/NOT ON LIST: Changelog (no no vote)",
  20, 0, 0, 3, $imove_1);
ballot3152013("CHANGE SINCE LAST MEETING/NOT ON LIST: Minor editorial changes (no no vote)",
  20, 0, 0, 3, $imove_1);

// //////////////////////////

print("Notes:
<ul>
<li> All votes in this section used the IMOVE value 2 ($imove_2) and vote qurorum 2 ($ivq_2) because an organization showed up for the last day of the meeting, changing the number of IMOVE organizations at the meeting.</li>
<li> \"Miss\" counts the same as \"abstain\"</li>
</ul><p>");

ballot3152013("MPI-3.1",
  23, 0, 0, 1, $imove_1);

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

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
// Votes

$registered = 20;
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

print("Notes:
<ul>
<li> \"Miss\" counts the same as \"abstain\"</li>
</ul><p>");

// Procedures vote
ballot3152013("Procedure Changes: #35 Allow move of voting block as an exception (1st and only vote)",
17, 0, 0, 2, $imove);

// Only vote for accepting changes since reading
ballot3152013("CHANGE SINCE 2-WEEK WINDOW: #26 Deprecate point-to-point send cancel (no no vote)",
  18, 0, 0, 1, $imove);

// 1st vote
ballot3152013("#26 Deprecate point-to-point send cancel (1st of 2 votes)",
  17, 0, 1, 1, $imove);

// 2nd vote
ballot3152013("#5 MPIR_Being_debugged (2nd of 2 votes)",
  17, 0, 1, 1, $imove);
ballot3152013("#7 MPI_COMM_FREE advice to implementers (2nd of 2 votes)",
  17, 0, 1, 1, $imove);

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

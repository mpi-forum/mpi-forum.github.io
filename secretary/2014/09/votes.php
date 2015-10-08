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

<P>The meeting quorum was not met; there were no formal readings.</p>\n");

////////////////////////////////
// Votes

$registered = 20;
$attended = 20;
$ooe = 20;
$imove = 19;
$ivq = 3 / 4 * $imove;

print("$line\n\n<h2>Votes:</h2>

<p>The meeting quorum was not met; there were no votes.</p>\n");

include_once("$topdir/include/footer.php");

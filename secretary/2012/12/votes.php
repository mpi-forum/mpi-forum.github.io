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

<p>See the <a href=\"../09/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

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
<p><strong>NOTE <font size=+3>NOTE <font color=red size=+5>NOTE:</font></font></strong> The Forum voted during a prior meeting that \"abstain\" now means the same as \"no\".  There is no longer a \"missed\" category -- if you missed a vote, it's the same as abstaining, which is therefore a \"no\".

<p><ol>\n\n");

////////////////////////////////
// First votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(

ballot72012("Motion to adjourn the MPI Forum indefinitely",
            2, 13, 3);

// First-and-only vote for this errata item
ballot72012(ticket(345, "MPI-3.0 Errata: Corrections to the Fortran interface", 1),
            15, 0, 3);


////////////////////////////////
// Second votes

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(

print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

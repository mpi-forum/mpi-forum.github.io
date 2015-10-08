<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

$webex = "(<a href=\"https://cisco.webex.com/ciscosales/j.php?ED=247028927&UID=0&PW=NODI0MWJkOTAw&RT=MiM3\">Webex link</a>)";

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, December 9, 2013 - Working Groups $webex");
agenda_item(" 2:00pm -   3:30pm", "Tools WG (Kathryn)");
agenda_item(" 2:00pm -   3:30pm", "Point-to-Point WG (Rich and Brian)");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   6:00pm", "Tools WG (Kathryn)");
agenda_item(" 4:00pm -   6:00pm", "Fault Tolerance WG (Aur&eacute;lien, Rich and Wesley)");
agenda_day_end();

agenda_day_start("Tuesday, December 10, 2013 - Working Groups $webex");
agenda_item("  9:00am - 10:30pm", "Hybrid WG (Pavan)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Hybrid WG (Pavan)");
agenda_item(" 12:30pm -  1:30pm", "Working lunch (provided)");
agenda_item(" 1:30pm  -  3:30pm", "RMA WG (Rajeev)");
agenda_item(" 3:30pm  -  4:00pm", "Break");
agenda_item(" 4:00pm  -  6:00pm", "RMA WG (Rajeev)");
agenda_day_end();

agenda_day_start("Wednesday, December 11, 2013 - Plenary $webex");
agenda_item("  9:00am - 10:15am", "Point to Point WG (Rich and Brian)");
agenda_item(" 10:15am - 10:45am", "Break");
agenda_item(" 10:45am - 11:00am", "Working Group Updates (Working group leads)");
agenda_item(" 11:00am - 11:15am", "Updates on tickets (".ticket(377).")");
agenda_item(" 11:15am - 12:00pm", "Readings (".ticket(400).",".ticket(349).",".ticket(402)."-not a reading, just discussion)");
agenda_item(" 12:00pm - 12:45pm", "Working lunch (provided) with Logo Discussion");
agenda_item(" 12:45pm -  1:30pm", "Discussion on MPI 3.1 vs. 4.0 (Martin)");
agenda_item(" 1:30pm  -  3:30pm", "Hybrid Discussion (including a discussion on ".ticket(381)." (Pavan)");
agenda_item(" 3:30pm  -  4:00pm", "Break");
agenda_item(" 4:00pm  -  5:30pm", "Hybrid Discusssion (Pavan)");
agenda_item(" 5:30pm  -  6:30pm", "Attributes Proposal (Fab)");
agenda_item(" 6:30pm  -  7:00pm", "Break");
agenda_item(" 7:00pm  - 10:00pm", "Common Dinner (optional, pay on your own)");
agenda_day_end();

agenda_day_start("Thursday, December 12, 2013 - Plenary $webex");
agenda_item(" 9:00am -   9:30am", "Vote on updates in ticket (".ticket(377).")");
agenda_item("                  ", "First Votes (".ticket(377).",".ticket(378).")");
agenda_item("                  ", "Second Votes (".ticket(375).")");
agenda_item(" 9:30am -  10:30am", "Fault Tolerance Discussions (Status, Overview, Use-cases) (Aur&eacute;lien, Rich and Wesley)");
agenda_item("10:30am -  10:45am", "Break");
agenda_item("10:45am -  12:00pm", "Fault Tolerance Discussions (Status, Overview, Use-cases) (Aur&eacute;lien, Rich and Wesley)");
agenda_item("12:00pm           ", "Close");
agenda_day_end();

include_once("$topdir/include/footer.php");
?>

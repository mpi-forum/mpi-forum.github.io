<?
$short_desc = "Agenda (draft)";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, June 2, 2015 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "Tools WG / PMPI2 Discussions and ".ticket(428));
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Tools WG / PMPI2 Discussions");
agenda_day_end();

agenda_day_start("Tuesday, June 3, 2015 - Working Groups");
agenda_item(" 9:00am - 10:00am", "FT WG");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "FT WG");
agenda_item(" 12:00pm -  1:00pm", "Lunch");
agenda_item(" 1:00pm - 2:00pm", "Persistance WG");
agenda_item(" 2:00pm - 2:30pm", "Break");
agenda_item(" 2:30pm - 5:00pm", "Hybrid WG");
agenda_day_end();

agenda_day_start("Wednesday, June 4, 2014 - Plenary and WG vote");
agenda_item(" 9:00am - 9:15am", "Working Group Updates");
agenda_item(" 9:15am - 9:30am", "Proposal and vote for a new Datatypes WG (Jeff H.)");
agenda_item(" 9:30am - 10:30am", "Readings");
agenda_who(411,"Jeff H.");
agenda_item(" ", "Update on ".ticket(349)."+".ticket(402)."+".ticket(404)."+".ticket(431)." filed as Ticket ".ticket(421)."(Jim)");
agenda_item(" 10:30am - 10:45am", "Break");
agenda_item(" 10:45am - 11:15am", "Errata readings");
agenda_who(374,"Jeff S.");
agenda_who(383,"Jeff S.");
agenda_who(393,"Jeff S.");
agenda_who(403,"Jeff S.");
agenda_who(413,"Jeff S.");
agenda_who(415,"Jeff S.");
agenda_who(419,"Jeff S.");
agenda_who(422,"Jeff S.");
agenda_who(424,"Jeff S.");
agenda_who(427,"Jeff S.");
agenda_who(429,"Jeff S.");
agenda_item(" 11:15am - 12:15pm", "Large count plenary (Jeff H.)");
agenda_item(" 12:15pm -  1:00pm", "Lunch");
agenda_item(" 1:00pm - 1:30pm", "Update on persistent communication proposals (Puri)");
agenda_item(" 1:30pm - 3:30pm", "Hybrid WG Plenary (Jim): Endpoints (".ticket(380).") and other business");
agenda_item(" 3:30pm - 3:45pm", "Break");
agenda_item(" 3:45pm - 5:45pm", "Reading FT WG (Wesley): ".ticket(323));
agenda_item(" 6:00pm -  9:00pm", "Dinner (optional, pay on your own)");
agenda_day_end();

agenda_day_start("Thursday, June 5, 2014 - Plenary and Votes");
agenda_item("  9:00am", "Starting of voting block");
agenda_item("  9:00am -  9:30am", "Updates to tickets as neded and votes on accepting updates");
#agenda_item("                  ", "Ticket ".ticket(421)." which modifies ".ticket(349)."+".ticket(402)."+".ticket(404), " and/or ticket ".ticket(431));

agenda_item("  9:30am - 10:00am", "Errata votes: ".ticket(374).", <strike>".ticket(383)."</strike>, ".ticket(393).", ".ticket(403).", ".ticket(413).", ".ticket(415).", ".ticket(419).", ".ticket(422).", ".ticket(424).", ".ticket(427).", <strike>".ticket(429)."</strike>, <strike>".ticket(431)."</strike>");
agenda_item("                     ", "First Vote: ".ticket(273).", ".ticket(349).", ".ticket(402).", ".ticket(404).", <strike>".ticket(421)."</strike>, ".ticket(369).", ".ticket(357));
agenda_item("                  ", "Second Vote: ".ticket(400));
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:30pm", "P2P WG plea for input from applications (Dan)");
agenda_item(" 12:30pm           ", "Close");
agenda_day_end();

include_once("$topdir/include/footer.php");
?>

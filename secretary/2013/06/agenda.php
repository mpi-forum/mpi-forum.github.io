<?
$short_desc = " Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

function webex($link, $pw) {
    return "<br /><a href=\"$link\">Webex link (pw: $pw)</a>";
}

agenda_day_start("Tuesday, June 4, 2013 - Working Groups");
add_webex("TBD","TBD","mpi");
agenda_item(" 1:00pm -   3:00pm", "Fortran WG");
agenda_item(" 1:00pm -   3:00pm", "FT and RMA WG Joint Session" .
            webex("https://cisco.webex.com/ciscosales/j.php?ED=227654742&UID=0&PW=NYzJiNDVmYWZj&RT=MiM0", "resume"));
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   4:30pm", "Fortran WG (cont.)");
agenda_item(" 3:30pm -   5:00pm", "FT WG" .
            webex("https://cisco.webex.com/ciscosales/j.php?ED=227654742&UID=0&PW=NYzJiNDVmYWZj&RT=MiM0", "resume"));
agenda_item(" 4:30pm -   5:30pm", "Fortran and Tools WG Joint Session");
agenda_day_end();

agenda_day_start("Wednesday, June 5, 2013 - Working Groups");
add_webex("TBD","TBD","mpi");
agenda_item(" 9:00am - 10:15pm", "Tools WG");
agenda_item(" 9:00am - 10:15pm", "I/O WG (includes FT/IO discussion)");
agenda_item("10:15am - 10:30am", "Break");
agenda_item("10:30am - 12:00pm", "Tools WG (cont.)");
agenda_item("10:30am - 12:00pm", "Persistent Communication WG" .
            webex("https://cisco.webex.com/ciscosales/j.php?ED=227536662&UID=0&PW=NNGYzMjIyMDZi&RT=MiM0", "endure"));
agenda_item("12:00pm -  1:00pm", "Lunch break");
agenda_item(" 1:00pm -  3:00pm", "Tools WG / Fortran Wrapper Generation".
            webex("https://cisco.webex.com/ciscosales/j.php?ED=227826342&UID=0&PW=NYmI4NDllYzUw&RT=MiM0", "aaahhhh"));
agenda_item(" 1:00pm -  3:00pm", "Hybrid WG");
agenda_item(" 3:00pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  4:30pm", "RMA WG");
agenda_item(" 4:30pm -  5:30pm", "Collective WG");
agenda_day_end();

agenda_day_start("Thursday, June 6, 2013 - Working Groups and Plenary");
add_webex("TBD","TBD","mpi");
agenda_item(" 9:00am - 11:00am", "Point to Point Communication WG");
agenda_item(" 9:00pm - 11:00am", "Communicator Discussion (Pavan and Anh)" .
            webex("https://cisco.webex.com/ciscosales/j.php?ED=228573162&UID=0&PW=NYmJmMDU4ZmMy&RT=MiM0", "mpi4"));
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 11:30am", "Working Group Updates (Working group leads)");
agenda_item("11:30am - 11:45am", "Reading of Tools Errata Ticket ".ticket(354)." (Kathryn)");
agenda_item("11:45am - 12:00pm", "Official votes on Errata Ticket ".ticket(354));
agenda_item("12:00pm - 12:15pm", "Finance Update (Rich)");
agenda_item("12:15pm -  1:00pm", "Lunch break");
agenda_item(" 1:00pm -  3:00pm", "Official Reading of Message Queue Side Document (Anh)");
agenda_item(" 3:00pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  4:15pm", "FT Plenary (Aurelien)".webex("https://cisco.webex.com/ciscosales/j.php?ED=227655172&UID=0&PW=NOTYxMGZlMjMy&RT=MiM0", "resume"));
agenda_item(" 4:15pm -  5:00pm", "Function Classification Plenary (Wesley)");
agenda_item(" 5:00pm -  5:30pm", "Non-Blocking Functions Discussion Plenary (Wesley for Pavan)");
agenda_day_end();

agenda_day_start("Friday, June 7, 2013 - Plenary");
add_webex("TBD","TBD","mpi");
agenda_item("  9:00am -   9:45am", "The MPI 4.0 Process (Martin)");
agenda_item("  9:45am -  10:15am", "Administrative Issues (Martin)");
agenda_item(" 10:15am -  10:30am", "Break");
agenda_item(" 10:30am -  11:00am", "Fortran Plenary");
agenda_item(" 11:00am -  12:00pm", "RMA Plenary / MPI_Aint_add");
agenda_item(" 12:00pm           ", "Close");
agenda_day_end();

include_once("$topdir/include/footer.php");
?>

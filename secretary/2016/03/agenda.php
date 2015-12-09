<?
$short_desc = "Agenda DRAFT";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, February 29, 2016 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "WG time");
agenda_item(" 2:00pm -   3:30pm", "WG time");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "WG time");
agenda_item(" 4:00pm -   5:30pm", "WG time");
agenda_day_end();

agenda_day_start("Tuesday, February 1, 2016 - Working Groups");
agenda_item(" 9:00am - 10:30am", "WG time");
agenda_item(" 9:00am - 10:30am", "WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "WG time");
agenda_item(" 11:00am - 12:30pm", "WG time");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "WG time");
agenda_item(" 1:30pm - 3:00pm", "WG time");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "WG time");
agenda_item(" 3:30pm - 5:00pm", "WG time");
agenda_day_end();


agenda_day_start("Wednesday, February 2, 2016 - Plenary");
agenda_item(" 9:00am - 10:30am", "Persistence WG - Tony");
agenda_item(" 9:00am - 10:30am", "Large Counts WG - Jeff H.");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "Plenary Discusssions (agenda, see below)");
agenda_day_end();

agenda_day_start("Thursday, February 3, 2016 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">Reading #29</a> - ERRATA: Fix and improve MPI_2REAL and MPI_FLOAT_INT definitions","Jeff",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Thursday, Sept 20, 2012");
agenda_item("  9:00am -  10:00am", "Discussion of outside comments on the MPI 3.0 draft");
agenda_item(" 10:00am - 12:00pm", "MPI 3.0: chapter votes");
agenda_item(" 12:00pm -  1:00pm", "Lunch break - on own");
agenda_item(" 1:00pm -  6:00pm", "MPI-Next: organizational structure and areas of focus");
agenda_day_end();


agenda_day_start("Friday, Sept 21, 2012");
agenda_item(" 9:00am -  9:30am", "MPI 3.0 - final vote");
agenda_item(" 9:30am - 12:00pm", "Working group time");
agenda_item(" 12:00pm -  1:00pm", "Lunch break - on own");
agenda_item(" 1:00pm -  3:00pm", "Working group time");
agenda_item(" 3:00pm -  6:00pm", "MPI-Next: organizational structure and areas of focus - cont'd");
agenda_day_end();

include_once("$topdir/include/footer.php");

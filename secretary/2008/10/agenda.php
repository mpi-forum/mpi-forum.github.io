<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of Oct 11, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, Oct 20, 2008");
agenda_item(" 1:00pm -  1:45pm", "Reports from the working groups");
agenda_item(" 1:45pm -  2:00pm", "Items from the floor");
agenda_item(" 2:00pm -  3:00pm", "MPI 2.2 Plenary session");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  5:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item(" 5:00pm -  7:00pm", "MPI higher-level language support");
agenda_item(" 7:00pm -  9:00pm", "Break for dinner");


agenda_day_start("Tuesday, Oct 21, 2008");
agenda_item(" 9:00am - 11:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item("10:45am - 11:00am", "Break");
agenda_item("11:00am -  1:00pm", "RMA working group ; Misc Working Group");
agenda_item(" 1:00pm -  2:00pm", "Working lunch - RMA working group; Misc Working Group");
agenda_item(" 2:00pm -  5:00pm", "Fault tolerance working group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item(" 7:00pm -  9:00pm", "Dinner");

agenda_day_start("Wed, Oct 22, 2008");
agenda_item("9:00am - 11:30am", "Collectives working group; ABI Consortium meeting");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

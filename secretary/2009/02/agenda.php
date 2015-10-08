<?
$short_desc = "Agenda";
#$long_desc = "Agenda (as of Feb 2, 2009)";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, Feb 9, 2009");
agenda_item(" 1:00pm -  1:30pm", "Reports from the working groups");
agenda_item(" 1:30pm -  2:30pm", "MPI 3.0 process and timeline discussion");
agenda_item(" 2:30pm -  4:30pm", "MPI 3.0 - Tools working group; Fault Tolerance Working Group");
agenda_item(" 4:30pm -  6:30pm", "MPI 2.2 Plenary session");
agenda_item(" 6:30pm -  7:00pm", "Non Blocking Collectives - document changes");
agenda_item(" 7:00pm -  9:00pm", "Break for dinner");
agenda_day_end();

agenda_day_start("Tue, Feb 10, 2009");
agenda_item(" 9:00am - 10:45am", "MPI 2.2 Plenary session - cont'd");
agenda_item("10:45am - 11:00am", "Break");
agenda_item("11:00am -  1:00pm", "RMA working group ; Fortran Working Group");
agenda_item(" 1:00pm -  2:00pm", "Working lunch - RMA working group; Fortran Working Group");
agenda_item(" 2:00pm -  5:00pm", "Fault tolerance working group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item(" 7:00pm -  9:00pm", "Dinner");
agenda_day_end();

agenda_day_start("Wed, Feb 11, 2009");
agenda_item("9:00am - 11:00am", "Collectives working group; ABI Consortium meeting");
agenda_item("11:00am - 11:30am", "Nonblock Collectives MPI-3 proposal: First Vote");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

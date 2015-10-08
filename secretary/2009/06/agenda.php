<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, June 8, 2009");
agenda_item(" 1:00pm -  1:30pm", "Reports from the working groups");
agenda_item(" 1:30pm -  2:00pm", "MPI 3.0 process and timeline discussion");
agenda_item(" 2:00pm -  5:00pm", "MPI 2.2 Voting");
agenda_item(" 5:00pm -  6:30pm", "Hybrid Programming Working Group");
agenda_item(" 6:30pm -  7:00pm", "Non Blocking Collectives - Second Vote");
agenda_day_end();

agenda_day_start("Tue, June 9, 2009");
agenda_item(" 9:00am - 10:45am", "MPI 3.0 Plenary session - Corrections");
agenda_item("10:45am - 11:00am", "Break");
agenda_item("11:00am -  1:00pm", "Working Lunch - RMA working group ; Fortran Working Group");
agenda_item(" 1:00pm -  3:00pm", "Collectives working group");
agenda_item(" 3:00pm -  5:00pm", "Active Messages Working Group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "MPI 3.0 Plenary session - Corrections, cont'd");
agenda_day_end();

agenda_day_start("Wed, June 10, 2009");
agenda_item(" 9:00am - 11:30am", "Fault tolerance working group ; Tools Working Group");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

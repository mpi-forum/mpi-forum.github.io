<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Wed, November 11, 2009");
agenda_item(" 1:00pm -  1:30pm", "Reports from the working groups");
agenda_item(" 1:30pm -  2:00pm", "MPI 3.0 priorities discussion");
agenda_item(" 2:00pm -  4:00pm", "MPI 3.0 Backward compatibility discussion");
agenda_item(" 4:00pm -  4:30pm", "Break");
agenda_item(" 4:30pm -  7:00pm", "Hybrid Programming Working Group");
agenda_day_end();

agenda_day_start("Thu, November 12, 2009");
agenda_item(" 8:00am - 11:00am", "Fault Tolerance working group");
agenda_item("11:00am - 12:00pm", "Collectives working group");
agenda_item("12:00pm -  1:00pm", "Working Lunch - Collectives working group");
agenda_item(" 1:00pm -  3:00pm", "Tools Working Group");
agenda_item(" 3:00pm -  3:30pm", "Break ");
agenda_item(" 3:30pm -  5:30pm", "RMA working group");
agenda_item(" 5:30pm -  7:00pm", "MPI 3 - Corrections ");
agenda_day_end();

agenda_day_start("Fri, November 13, 2009");
agenda_item(" 9:00am - 10:30am", "MPI 3.0 Plenary session - Corrections");
agenda_item("10:30am - 11:30am", "Fortran Binding - Plenary session");
agenda_item("11:30am - 12:00pm", "Wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

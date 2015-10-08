<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Wed, September 2, 2009");
agenda_item(" 12:00pm -  1:00pm", "Working lunch - State of MPI 2.2");
agenda_item(" 1:00pm -  1:30pm", "Reports from the working groups");
agenda_item(" 1:30pm -  2:00pm", "MPI 3.0 priorities discussion");
agenda_item(" 2:00pm -  4:45pm", "MPI 3.0 Backward compatibility discussion");
agenda_item(" 5:00pm -  7:00pm", "Hybrid Programming Working Group");
agenda_day_end();

agenda_day_start("Thur, September 3, 2009");
agenda_item(" 9:00am - 12:00am", "MPI 2.2 final reviews and corrections");
agenda_item("12:00pm -  1:00pm", "Working Lunch - MPI 2.2 final reviews and corrections - cont'd ");
agenda_item(" 1:00pm -  2:00pm", "MPI 2.2 final reviews and corrections - cont'd ");
agenda_item(" 2:00pm -  3:00pm", "RMA working group ");
agenda_item(" 3:00pm -  3:30pm", "Break ");
agenda_item(" 3:30pm -  4:30pm", "Collectives working group");
agenda_item(" 4:30pm -  5:30pm", "Fault Tolerance working group");
agenda_item(" 5:30pm -  7:00pm", "Tools Working Group");
agenda_day_end();

agenda_day_start("Fri, September 4, 2009");
agenda_item(" 9:00am - 11:00am", "MPI 3.0 Plenary session - Corrections");
agenda_item("11:00am - 12:00pm", "MPI 2.2 final voting");
agenda_item("12:00pm -  1:00pm", "Working lunch - MPI 3.0 time lines, and wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

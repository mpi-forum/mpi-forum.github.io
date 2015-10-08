<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Thursday, September 16, 2010");
agenda_item(" 1:00pm -  2:00pm", "Status updates, and general MPI 3.0 discussion");
agenda_item(" 2:00pm -  3:00pm", "Plenary - First vote on MPI-3 nonblocking collectives operations integration");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  4:30pm", "Plenary session - First reading of MPIR Companion Document");
agenda_item(" 4:45pm -  7:00pm", "Fault Tolerance working group");
agenda_item(" 4:45pm -  7:00pm", "RMA Working group");
agenda_day_end();

agenda_day_start("Friday, September 17, 2010");
agenda_item(" 9:00am - 11:00am", "Collectives working group");
agenda_item(" 9:00am - 11:00am", "Fortran working group ");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "Plenary - Interface issues: Large data, scalability, misc.");
agenda_item("12:00pm -  2:00pm", "Working lunch: Plenary - Interface issues: Large data, scalability, misc.");
agenda_item(" 2:00pm -  2:45pm", "Plenary - Tools working group");
agenda_item(" 2:45pm -  3:30pm", "Plenary - RMA working group");
agenda_item(" 3:30pm -  3:45pm", "Break");
agenda_item(" 3:45pm -  5:30pm", "Hybrid working group");
agenda_item(" 5:30pm -  7:00pm", "RMA working group");
agenda_day_end();

agenda_day_start("Saturday, September 18, 2010");
agenda_item(" 9:00am - 10:00am", "Plenary session - Mprobe proposal - ticket #38");
agenda_item("10:00am - 11:30am", "Plenary session - corrections");
agenda_item("11:30am - 12:00pm", "Wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

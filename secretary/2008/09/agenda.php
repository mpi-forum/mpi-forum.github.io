<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of August 4, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Wed, Sept 3, 2008");
agenda_item(" 1:00pm -  1:45pm", "Reports from the working groups");
agenda_item(" 1:45pm -  2:00pm", "Items from the floor");
agenda_item(" 2:00pm -  2:30pm", "Preparation of final MPI-2.1 and MPI-1.3 votes");
agenda_item(" 2:30pm -  3:00pm", "MPI 2.2 Plenary session");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  5:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item(" 5:00pm -  7:00pm", "MPI Tool Support");
agenda_item(" 7:00pm -  9:00pm", "Break for dinner");


agenda_day_start("Thursday, Sept 4, 2008");
agenda_item(" 9:00am -  9:30am", "Final vote MPI-2.1 and MPI-1.3");
agenda_item(" 9:30am - 11:00pm", "MPI 2.2 Plenary session - cont'd");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am -  1:00pm", "Collectives working group");
agenda_item(" 1:00pm -  2:00pm", "Working lunch - Collectives working group");
agenda_item(" 2:00pm -  5:00pm", "Fault tolerance working group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "ABI working group ; MPI 2.2 Plenary session - cont'd");
agenda_item(" 7:00pm -  9:00pm", "Dinner");

agenda_day_start("Friday, Sept 5, 2008");
agenda_item(" 9:00am -  9:30am", "MPI-2.1 wrap up");
agenda_item(" 9:30am - 11:30am", "RMA working group");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

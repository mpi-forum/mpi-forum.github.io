<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, Dec  6, 2010");
agenda_item(" 1:00pm -  1:30pm", "Plenary session: Misc admin items ");
agenda_item(" 1:30pm -  4:00pm", "Plenary session: Sparse collectives - Formal reading");
agenda_item(" 4:00pm -  4:15pm", "Plenary session: Second Vote on MPIR Companion Document");
agenda_item(" 4:15pm -  4:30pm", "Break");
agenda_item(" 4:30pm -  7:00pm", "MPI-3 release process");
agenda_day_end();

agenda_day_start("Tuesday, Dec 7, 2010");
agenda_item(" 9:00am - 11:00am", "Backward compatibility working group");
agenda_item(" 9:00am - 11:00am", "Fortran working group ");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "Fault Tolerance working group");
agenda_item("11:15am - 12:00pm", "Collectives working group");
agenda_item("12:00pm -  1:00pm", "Working lunch: Fault Tolerance working group");
agenda_item("12:00pm -  1:00pm", "Working lunch: Collectives working group");
agenda_item(" 1:00pm -  2:00pm", "Collectives working group");
agenda_item(" 1:00pm -  2:00pm", "Fault Tolerance working group");
agenda_item(" 2:00pm -  3:00pm", "Plenary session: Persistence working group");
agenda_item(" 3:00pm -  4:30pm", "RMA working group");
agenda_item(" 3:00pm -  4:30pm", "Persistence working group");
agenda_item(" 4:30pm -  4:45pm", "Break");
agenda_item(" 4:45pm -  7:00pm", "Point-To-Point working group");
agenda_item(" 4:45pm -  7:00pm", "RMA working group");
agenda_day_end();

agenda_day_start("Wednesday, Dec 8, 2010");
agenda_item(" 9:00am - 11:00am", "Tools working group");
agenda_item(" 9:00am - 11:00am", "RMA working group");
agenda_item("10:30am - 11:30am", "C++ binding deprecation discussion");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

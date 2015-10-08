<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, Oct 11, 2010");
agenda_item(" 1:00pm -  2:00pm", "Plenary session: MPI_Count ");
agenda_item(" 2:00pm -  2:45pm", "Plenary session: Sparse collectives");
agenda_item(" 2:45pm -  3:00pm", "Plenary session: First Vote on MPIR Companion Document");
agenda_item(" 3:00pm -  3:15pm", "Plenary session: Nonblocking collectives - 2nd vote");
agenda_item(" 3:15pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  7:00pm", "Plenary Session: Fortran working group");
agenda_day_end();

agenda_day_start("Tuesday, Oct 12, 2010");
agenda_item(" 9:00am - 11:00am", "Tools working group");
agenda_item(" 9:00am - 11:00am", "Fortran working group ");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "Plenary Session: Piggybacking proposal");
agenda_item("12:00pm -  1:00pm", "Working lunch: Fault Tolerance working group");
agenda_item("12:00pm -  1:00pm", "Working lunch: Hybrid working group");
agenda_item(" 1:00pm -  2:30pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  2:00pm", "Hybrid working group");
agenda_item(" 2:00pm -  5:00pm", "RMA working group");
agenda_item(" 2:00pm -  5:00pm", "Persistance working group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "Collectives working group");
agenda_item(" 5:15pm -  7:00pm", "RMA working group");
agenda_day_end();

agenda_day_start("Wednesday, Oct 13, 2010");
agenda_item(" 9:00am -  9:30am", "Plenary session: Mprobe proposal - ticket #38");
agenda_item(" 9:30am - 11:30am", "Plenary session: Tickets");
agenda_item("1130am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

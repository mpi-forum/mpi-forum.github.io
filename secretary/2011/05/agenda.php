<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, May 9, 2011");
agenda_item(" 1:00pm -  3:00pm", "FT working group");
agenda_item(" 1:00pm -  3:00pm", "RMA working group");
agenda_item(" 3:00pm -  4:00pm", "Plenary Session: Tools group - MPI_T formal reading -Ticket #266");
agenda_item(" 4:00pm -  4:15pm", "Break");
agenda_item(" 4:15pm -  6:00pm", "Plenary Session: Tools group - MPI_T formal reading -Ticket #266");
agenda_item(" 6:00pm -  8:00pm", "Plenary Session: Fortran working group - formal reading -Tickets #229 to #253");
agenda_day_end();

agenda_day_start("Tuesday, May 10, 2011");
agenda_item(" 9:00am - 12:00pm", "Plenary session: RMA - Formal Reading - Ticket #270 ");
agenda_item("12:00pm -  2:00pm", "Working Lunch - Plenary session: RMA - Formal Reading - Ticket #270 ");
agenda_item(" 2:00pm -  3:00pm", "Plenary session: Sparse Collectives - Formal Reading - Ticket #258 ");
agenda_item(" 3:00pm -  5:00pm", "Plenary session: Persistence working group ");
agenda_item(" 5:00pm -  6:00pm", "Hybrid working group");
agenda_item(" 6:00pm -  8:00pm", "Plenary session: Hybrid working group ");
agenda_day_end();

agenda_day_start("Wednesday, May 11, 2011");
agenda_item(" 9:00am - 11:00am", "Plenary Session: Fortran working group - formal reading -Tickets #229 to #253");
agenda_item("11:00am - 12:00am", "Plenary session: First reading - count - Ticket #265 ");
agenda_item("12:00am -  1:00pm", "Working lunch: Plenary session: First reading - Const - Ticket #140 ");
agenda_item(" 1:00am -  2:00am", "Plenary session: Info object");
agenda_item(" 2:00am -  3:00am", "Plenary session: Data type changes");
agenda_item(" 3:00pm -  3:15pm", "Remove Nonblocking Collectives C++ bindings - Ticket #272");
agenda_item(" 3:15pm -  3:30pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

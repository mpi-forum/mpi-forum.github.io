<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, March 28, 2011");
agenda_item(" 1:00pm -  3:30pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  3:30pm", "Hybrid working group");
agenda_item(" 3:30pm -  4:00pm", "Plenary Session: Timers");
agenda_item(" 4:00pm -  4:15pm", "Break");
agenda_item(" 4:15pm -  4:30pm", "Plenary session: 2nd vote - MProbe, ticket #38");
agenda_item(" 4:30pm -  7:00pm", "Plenary Session: RMA working group - First reading of proposal #1 - Ticket #270");
agenda_day_end();

agenda_day_start("Tuesday, March 29, 2011");
agenda_item(" 9:00am -11:30am", "RMA plenary: continued first first reading");
agenda_item("11:30am - 1:00pm", "Working Lunch - Plenary Session: MPI_info and disabling PMPI");
agenda_item(" 1:00pm - 4:00pm", "Plenary Session: Tools group - MPI_T formal reading -Ticket #266");
agenda_item(" 4:00pm - 4:15pm", "Break");
agenda_item(" 4:15pm - 4:45pm", "Plenary Session: const");
agenda_item(" 5:15pm - 7:00pm", "Collective working group");
agenda_day_end();

agenda_day_start("Wednesday, March 30, 2011");
agenda_item(" 9:00am -11:00am", "Plenary Session: Count - first reading, ticket #265 + #269 ");
agenda_item("11:00am -11:45am", "Plenary Session: RMA working group");
agenda_item("11:45am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

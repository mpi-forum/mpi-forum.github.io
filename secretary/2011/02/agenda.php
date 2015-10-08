<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, Feb  7, 2011");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  3:00pm", "Collectives working group");
agenda_item(" 3:00pm -  3:15pm", "Plenary session: 1st vote - MProbe, ticket #38");
agenda_item(" 3:15pm -  3:30pm", "Break - refreshments provided");
agenda_item(" 3:30pm -  6:00am", "Plenary session: RMA working group");
agenda_item(" 6:00am -  7:00pm", "Plenary session: Sparse Collectives - Formal Reading");
agenda_day_end();

agenda_day_start("Tuesday, Feb 8, 2011");
agenda_item(" 9:00am - 11:00am", "RMA working group");
agenda_item(" 9:00am - 11:00am", "Persistence working group");
agenda_item("11:00am - 11:30am", "Plenary session: Profiling Interface - minor changes review and vote ");
agenda_item("11:30am - 12:00pm", "Plenary session: External Interfaces - minor changes review and vote ");
agenda_item("12:00pm -  1:00pm", "Plenary session: MPI Count - Working lunch");
agenda_item(" 1:00pm -  4:00pm", "Plenary session: Tools Group - MPT proposal overview");
agenda_item(" 4:00pm -  4:15pm", "Break - Refreshments provided");
agenda_item(" 4:15pm -  7:00pm", "RMA working group");

agenda_day_end();

agenda_day_start("Wednesday, Feb 9, 2011");
agenda_item(" 9:00am - 11:30am", "Plenary session: Hybrid Programming working group");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of June 26, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, June 30, 2008");
agenda_item("1:00pm - 2:30pm", "Current status: MPI 2.1, 2.2, 3.0");
agenda_item("2:30pm - 3:00pm", "Current status: User disucssion and Feedback");
agenda_item("3:00pm - 3:15pm", "Break");
agenda_item("3:15pm - 4:00pm", "Discussion: Forum priorities, and progress");
agenda_item("4:00pm - 4:20pm", "MPI-2.1: Workplan and preparation for votes");
agenda_item("4:20pm - 5:00pm", "MPI-2.1: Discussion on on Ballot 4 (2nd vote), MPI-1.3 (1st vote), and MPI-2.1 (1st vote)");
agenda_item("5:00pm - 6:30pm", "Break for dinner");
agenda_item("6:30pm - 8:30pm", "Fault Tolerance working group<br />Fortran working group");

agenda_day_start("Tuesday, July 1, 2008");
agenda_item("9:00am - 9:30am", "MPI-2.1 Votes (ballot 4, MPI-1.3 first vote, MPI-2.1 (1st vote)");
agenda_item("9:30am - 10:30am", "Fault Tolerance working group");
agenda_item("10:30am - 10:45am", "Break");
agenda_item("10:45am - 11:30am", "Full Forum: Collectives discussion");
agenda_item("11:30am - 12:15pm", "Full Forum: Error handling in MPI");
agenda_item("12:15pm - 1:30pm", "Break for lunch");
agenda_item("1:30pm - 3:00pm", "Collective Operations working group <br /> ABI working group");
agenda_item("3:00pm - 3:15pm", "Break");
agenda_item("3:15pm - 5:15pm", "MPI 2.2 Plenary session");
agenda_item("5:15pm - 7:00pm", "MPI Subsetting working group");
agenda_item("7:00pm - 9:00pm", "Dinner: Fish Market, 3775 El Camino Real, Santa Clara<br />Reservation is in the name of \"MPI Metting\"");

agenda_day_start("Wednesday, July 2, 2008");
agenda_item("9:00am - 9:30am", "MPI-2.1 implementation schedule and wrap up");
agenda_item("9:30am - 11:30am", "RMA working group");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_item("12:00pm - ?", "Lunch");
agenda_day_end();

include_once("$topdir/include/footer.php");

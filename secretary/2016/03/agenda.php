<?
$short_desc = "Agenda DRAFT";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, February 29, 2016 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "WG time");
agenda_item(" 2:00pm -   3:30pm", "WG time");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "WG time");
agenda_item(" 4:00pm -   5:30pm", "WG time");
agenda_day_end();

agenda_day_start("Tuesday, March 1, 2016 - Working Groups");
agenda_item(" 9:00am - 10:30am", "WG time");
agenda_item(" 9:00am - 10:30am", "WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "WG time");
agenda_item(" 11:00am - 12:30pm", "WG time");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "WG time");
agenda_item(" 1:30pm - 3:00pm", "WG time");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "WG time");
agenda_item(" 3:30pm - 5:00pm", "WG time");
agenda_day_end();


agenda_day_start("Wednesday, March 2, 2016 - Plenary");
agenda_item(" 9:00am - 10:30am", "Persistence WG - Tony");
agenda_item(" 9:00am - 10:30am", "Large Counts WG - Jeff H.");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "Plenary Discusssions (agenda, see below)");

agenda_item(" 6:00pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();

agenda_day_start("Thursday, March 3, 2016 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item("                ", "No-No-Vote Readings and Votes:");
agenda_item("                ", "Errata Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/12\">PR #12</a>: MPI_T code example bug");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">PR #29</a>: Fix and improve MPI_2REAL and MPI_FLOAT_INT definitions");
agenda_item("                ", "First Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/5\">PR #5</a>:  MPIR being_debugged");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/7\">PR #7</a>: Cleanup Advice and Definition of MPI_COMM_FREE");
agenda_item(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",0);
plenary_item("Errata Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">PR #29</a>: Fix and improve MPI_2REAL and MPI_FLOAT_INT definitions","Jeff",0);
plenary_item("Possible Readings","need to be confirmed (with ready to read PR number) at least 2 weeks prior to meeting","",0);
plenary_item("","Persistent Collectives","Tony",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">PR #1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">PR #3</a>: Define new MPI Error handler for subcommunicator abort","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/11\">Reading #11</a>: Communicator Info Assertions","Jim",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

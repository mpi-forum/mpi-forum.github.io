<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, December 7, 2015 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "Fortran WG - Craig");
agenda_item(" 2:00pm -   3:30pm", "Tools WG - Kathryn");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Hybrid WG - Pavan");
agenda_item(" 4:00pm -   5:30pm", "Tools WG - Kathryn");
agenda_day_end();

agenda_day_start("Tuesday, December 8, 2015 - Working Groups");
agenda_item(" 9:00am - 10:30am", "Tools WG - Kathryn");
agenda_item(" 9:00am - 10:30am", "RMA WG - Bill/Rajeev");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "RMA WG - Bill/Rajeev");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "FT WG - Wesley");
agenda_item(" 1:30pm - 3:00pm", "P2P WG - Dan");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "FT WG - Wesley");
agenda_item(" 3:30pm - 5:00pm", "P2P WG - Dan");
agenda_day_end();

agenda_day_start("Wednesday, December 9, 2015 - WG and Plenary Discussions");
agenda_item(" 9:00am - 10:30am", "Persistence WG - Tony");
agenda_item(" 9:00am - 10:30am", "Large Counts WG - Jeff H.");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "Plenary Discusssions (agenda, see below)");
agenda_day_end();

agenda_day_start("Thursday, December 10, 2015 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();

agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",0);
plenary_item("","Update on persistence WG","Tony",0);
plenary_item("","Reading #5:  MPIR being_debugged","Martin/Jeff",0);
plenary_item("","Reading #12 - ERRATA: MPI_T code example bug","Martin/Jeff",0);
plenary_item("","Reading #6 (?):  MPIR line numbers","Martin/Jeff",0);
plenary_item("","Reading #1: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",0);
plenary_item("","Reading #3: Define new MPI Error handler for subcommunicator abort","Wesley",0);
plenary_item("","Reading #7: Cleanup Advice and Definition of MPI_COMM_FREE","Wesley",0);
plenary_item("","Reading #11: Communicator Info Assertions","Dan",0);
plenary_item("","Reading ?: Large count proposal","Jeff H.",0);
plenary_item("","Update and Q/A on github transition","Jeff/Wesley",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

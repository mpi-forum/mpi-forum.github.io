<?
$short_desc = "Agenda DRAFT";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, February 29, 2016 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "Tools WG time (debugging)");
agenda_item(" 2:00pm -   3:30pm", "RMA WG time");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Tools WG time (debugging)");
agenda_item(" 4:00pm -   5:30pm", "RMA WG time");
agenda_day_end();

agenda_day_start("Tuesday, March 1, 2016 - Working Groups");
agenda_item(" 9:00am - 10:30am", "Tools WG time (MPI_T, MPI Ext. Intf.)");
agenda_item(" 9:00am - 10:30am", "P2P WG time");
agenda_item(" 9:00am - 10:30am", "FT WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Tools WG time (MPI_T, MPI Ext. Intf.)");
agenda_item(" 11:00am - 12:30pm", "P2P WG time");
agenda_item(" 11:00am - 12:30pm", "FT WG time");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Tools WG time (MPI_T, MPI Ext. Intf. (overflow))");
agenda_item(" 1:30pm - 3:00pm", "Hybrid WG time");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:30pm", "Hybrid WG time");
agenda_item(" 3:30pm - 5:30pm", "Large Count WG time");
agenda_day_end();


agenda_day_start("Wednesday, March 2, 2016 - Plenary");
agenda_item(" 9:00am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:30pm - 4:00pm", "Break");
agenda_item(" 4:30pm - 6:30pm", "Plenary Discusssions (agenda, see below)");

agenda_item(" 6:45pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();

agenda_day_start("Thursday, March 3, 2016 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item("                ", "Procedures Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception");
agenda_item("                ", "Errata Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/12\">#12</a>: MPI_T code example bug");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">#29</a>: Fix and improve MPI_2REAL and MPI_FLOAT_INT definitions");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/34\">#34</a>: Bug in code example 7.9 in call to MPI_DIMS_CREATE");
agenda_item("                ", "First Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/5\">#5</a>: MPIR being_debugged");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/7\">#7</a>: Cleanup Advice and Definition of MPI_COMM_FREE");
agenda_item(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",0);
plenary_item("Procedures Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception","Martin",0);
plenary_item("Errata Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/12\">#12</a>: MPI_T code example bug","Kathryn",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">#29</a>: Fix and improve MPI_2REAL and MPI_FLOAT_INT definitions","Jeff",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/29\">#34</a>: Bug in code example 7.9 in call to MPI_DIMS_CREATE ","Dan",0);
plenary_item("Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">#1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">#3</a>: Define new MPI Error handler for subcommunicator abort","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/28\">#28</a>: Add Catastrophic and Noncatastrophic Error Codes)","Wesley",0);

plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/11\">#11</a>: Communicator Info Assertions","Jim",0);

plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel)","Dan",0);

plenary_item("","Re-evaluating MPI Threading levels","Ryan",0);
plenary_item("","MPI Sessions","Jeff",0);

plenary_item("","The FENIX library","Marc Gamell",0);

plenary_item("Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/20\">#20</a>: ULFM part 1","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/21\">#21</a>: ULFM part 2","Wesley",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/22\">#22</a>: ULFM part 3","Wesley",0);

plenary_item("Other","Hybrid WG plenary","Pavan",0);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/32\">#32</a>:Allocating receive and freeing send","Dan",0);
plenary_item("","Fortran datatypes","Jeff S.",0);
plenary_item("","Location discussion 2017","Martin",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

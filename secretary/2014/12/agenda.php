<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, December 8, 2014 - Working Groups and Plenary");
agenda_item(" 2:00pm -   3:30pm", "Tools WG (PMPI-2 Disucssion) - Martin and Jeff S.");
agenda_item(" 2:00pm -   3:30pm", "Large Count WG - Jeff H.");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Tools WG (PMPI-2 Disucssion) - Martin and Jeff S.");
agenda_item(" 4:00pm -   5:30pm", "Large Count and GREQ WG - Jeff H.");
agenda_day_end();

agenda_day_start("Tuesday, December 9, 2014 - Working Groups");
agenda_item(" 9:00am - 10:00am", "P2P WG - Dan");
agenda_item(" 9:00am - 10:00am", "RMA WG - Bill");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "P2P WG - Dan");
agenda_item(" 10:30am - 12:00pm", "RMA WG - Bill");
agenda_item(" 12:00pm -  1:00pm", "Lunch (provided)");
agenda_item(" 1:00pm - 3:00pm", "P2P WG - Dan");
agenda_item(" 1:00pm - 3:00pm", "Hybrid WG - Pavan");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" Note:", "If necessary, we'll go longer than 5:30pm");
agenda_item(" about 5:30pm (after plen.)", "Fortran WG (Rolf, Craig)");
agenda_day_end();

agenda_day_start("Wednesday, December 10, 2014 - Plenary Discussions");
agenda_item(" 9:00am - 10:00am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm -  1:00pm", "Lunch (provided)");
agenda_item(" 1:00pm - 3:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:00pm - 3:20pm", "Break");

agenda_item("  3:20pm", "Starting of voting block (changed on unanimous consent)");
agenda_item("", "Updates to tickets as neded and votes on accepting updates");
agenda_item("", ticket(273).": Vote 2: Add Immediate versions of nonblocking collective I/O routines");
agenda_item("", ticket(369).": Vote 2: Add same_disp_unit info key for RMA window creation");
agenda_item("", ticket(421).": Errata: MPI_Aint addressing arithmetic (on top of 349/402/404)");
agenda_item("", ticket(449).": Errata: Missing in C in wording about handle-comparison - ticket 0 change");

agenda_item("", "Errata votes - as read the previous day, if agreed upon");
agenda_item("", ticket(383).": Consistency of tools information interface variable information"); // <!-- 15min -->
agenda_item("", ticket(394).": MPI_T: Clarify values of watermark variables between and during stopped and started periods"); // <!-- 15min -->
agenda_item("", ticket(433).": Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers");
agenda_item("", ticket(441).": Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE. ");
agenda_item("", ticket(444).": Errata: Fortran and Persistent Requests");
agenda_item("", ticket(431).": Errata: MPI Address Errata");
agenda_item("", ticket(421).": Errata: MPI_Aint addressing arithmetic (on top of 349/402/404)");
agenda_item("", ticket(447).": Errata: Tools section is an exception: no Fortran interface");
agenda_item("", ticket(449).": Errata: Missing in C in wording about handle-comparison");
agenda_item("", ticket(451).": Errata: Correcting description of nonblocking");
agenda_item("", ticket(453).": Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons");

agenda_item("                  ", "First Vote: ");
agenda_item("                  ", "Second Vote: ");
agenda_item("", "   Ticket ".ticket(273).": Vote 2: Add Immediate versions of nonblocking collective I/O routines");
agenda_item("", "   Ticket ".ticket(349).": Vote 2: MPI_Aint addressing arithmetic");
agenda_item("", "   Ticket ".ticket(402).": Vote 2: Update dynamic window example to use MPI_Aint_add");
agenda_item("", "   Ticket ".ticket(404).": Vote 2: MPI_Aint diff arithmetic");
agenda_item("", "   Ticket ".ticket(369).": Vote 2: Add same_disp_unit info key for RMA window creation");
agenda_item("", "   Ticket ".ticket(357).": Vote 2: thread-safety of MPI_INITIALIZED, MPI_FINALIZED, MPI_QUERY_THREAD and MPI_IS_THREAD_MAIN in all uses for library correctness");
agenda_item("after votes", "Discussion and Logistics in Finishing MPI 3.1, incl. chapter committees - Martin   ");
agenda_item("                  ", "Meeting Dates for September 2015 Meeting");

agenda_item(" 6:00pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();


agenda_day_start("Thursday, December 11, 2014 - Working Groups");
agenda_item(" 9:00am - 12:00pm", "Persistence WG - Tony");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();

agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",1);
plenary_item("","Chapter Committee Discussion","",1);
plenary_item("Ticket readings", "","",0);
plenary_item("", ticket(380).": Endpoints","Jim",1); // <!-- 1h -->
plenary_item("", ticket(461).": Wildcard Info Keys","Jim",1); // <!-- 15 min -->
plenary_item("", ticket(411).": MPI info key namespacing", "Pavan",1); // <!-- 1h  -->

plenary_item("Errata readings", "","",0);
plenary_item("", ticket(383).": Consistency of tools information interface variable information","Martin",1); // <!-- 15min -->
plenary_item("", ticket(394).": MPI_T: Clarify values of watermark variables between and during stopped and started periods","Martin",1); // <!-- 15min -->
plenary_item("", ticket(433).": Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers","Rolf",1);
plenary_item("", ticket(441).": Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE. ","Rolf",1);
plenary_item("", ticket(444).": Errata: Fortran and Persistent Requests","Rolf",1);
plenary_item("", ticket(431).": Errata: MPI Address Errata","Rolf",1);
plenary_item("", ticket(421).": Errata: MPI_Aint addressing arithmetic (on top of 349/402/404)","Rolf",1);
plenary_item("", ticket(447).": Errata: Tools section is an exception: no Fortran interface","Rolf",1);
plenary_item("", ticket(449).": Errata: Missing in C in wording about handle-comparison","Rolf",1);
plenary_item("", ticket(451).": Errata: Correcting description of nonblocking","Rolf",1);
plenary_item("", ticket(453).": Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons","Rolf",1);

plenary_item("Other Discussions", "","",0);
plenary_item("", "Hybrid WG","Jim",1); // <!-- 1h min -->
plenary_item("", ticket(323).": ULFM","Wesley",1); // <!-- 1h -->
plenary_item("", ticket(301).": deprecate MPI_COMM_JOIN","Fab",1); // <!-- 15 min -->
plenary_item("", "Fortran WG - deprecation of MPI_SIZEOF and mpif.h","Jeff S.",1); // <!-- 2h -->
plenary_item("", "Endpoints in McMPI","Dan",1); // <!-- 2h -->
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

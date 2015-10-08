<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, September 15, 2014 - Working Group + Errata");
agenda_item("10:00am -  12:00pm", "Tools WG (Kathryn)");
agenda_item("12:00pm -   1:30pm", "Lunch / outside restaurant");
agenda_item(" 1:45pm -   6:00pm", "Errata readings (with 30min break)");
agenda_item("", "   Ticket ".ticket(433).": Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers");
agenda_item("", "   Ticket ".ticket(441).": Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE. ");
agenda_item("", "   Ticket ".ticket(442).": Errata: Fortran vector subscipts and MPI_BOTTOM");
agenda_item("", "   Ticket ".ticket(444).": Errata: Fortran and Persistent Requests");
agenda_item("", "   Ticket ".ticket(445).": Errata: Fortran and Permament Data Movement: All nonblocking");
agenda_item("", "   Ticket ".ticket(431).": Errata: MPI Address Errata");
agenda_item("", "   Ticket ".ticket(421).": Errata: MPI_Aint addressing arithmetic (on top of 349/402/404");
agenda_item("", "   Ticket ".ticket(447).": Errata: Tools section is an exception: no Fortran interface");
agenda_item("", "   Ticket ".ticket(448).": Errata: errata: Semantic term matching is missing - may be considered Ticket 0");
agenda_item("", "   Ticket ".ticket(449).": Errata: Missing in C in wording about handle-comparison");
agenda_item("", "   Ticket ".ticket(451).": Errata: Correcting description of nonblocking");
agenda_item("", "   Ticket ".ticket(453).": Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons");
agenda_item("", "   Ticket ".ticket(455).": Errata: Removal of duplicated text on MPI_Aint and MPI_Offset");
agenda_item("", "Ticket 0, but discussion required");
agenda_item("", "   Ticket ".ticket(446).": Fortran cross-reference update");
agenda_item("", "Ticket 0 additions that where announced, but are not needed, unless there are objections: ");
agenda_item("", "   Ticket ".ticket(440).": Fortran cross-reference correction");
agenda_item("", "   Ticket ".ticket(443).": Fortran MPI_BOTTOM not for initialization or assignment");
agenda_item("", "   Ticket ".ticket(450).": Outdated cross-reference to MPI-1");
agenda_item("", "   Ticket ".ticket(452).": Wording correction about deprecated and removed functions");
agenda_day_end();

agenda_day_start("Tuesday, September 16, 2015 - Plenary");
agenda_item("10:00am -  11:00am", "Fault Tolerance (Aurelien and George)");
agenda_item("11:00am -  12:00pm", "Point to Point discussion/feedback (Ken)");
agenda_item("12:00pm -   1:30pm", "Lunch / outside restaurant");
agenda_Item(" 1:30pm -   3:00pm", "Tour of the K Computer");
agenda_Item(" 3:00pm -   3:30pm", "Remote Notification Ideas (Torsten)");
agenda_item(" 3:30pm -   3:45pm", "Ticket Updates (if necessary)");
agenda_item(" 3:45pm -   4:15pm", "Votes");
agenda_item("", "   Ticket ".ticket(273).": Vote 2: Add Immediate versions of nonblocking collective I/O routines");
agenda_item("", "   Ticket ".ticket(349).": Vote 2: MPI_Aint addressing arithmetic");
agenda_item("", "   Ticket ".ticket(402).": Vote 2: Update dynamic window example to use MPI_Aint_add");
agenda_item("", "   Ticket ".ticket(404).": Vote 2: MPI_Aint diff arithmetic");
agenda_item("", "   Ticket ".ticket(369).": Vote 2: Add same_disp_unit info key for RMA window creation");
agenda_item("", "   Ticket ".ticket(357).": Vote 2: thread-safety of MPI_INITIALIZED, MPI_FINALIZED, MPI_QUERY_THREAD and MPI_IS_THREAD_MAIN in all uses for library correctness");
agenda_item("", "   Ticket ".ticket(411).": Vote 1: MPI info key namespacing");
agenda_item("", "   Ticket ".ticket(433).": Errata: MPI_WIN_ATTACH must only be for simply contiguous buffers");
agenda_item("", "   Ticket ".ticket(441).": Errata: Missing text for Fortran MPI_SUBARRAYS_SUPPORTED equals .FALSE. ");
agenda_item("", "   Ticket ".ticket(442).": Errata: Fortran vector subscipts and MPI_BOTTOM");
agenda_item("", "   Ticket ".ticket(444).": Errata: Fortran and Persistent Requests");
agenda_item("", "   Ticket ".ticket(445).": Errata: Fortran and Permament Data Movement: All nonblocking");
agenda_item("", "   Ticket ".ticket(431).": Errata: MPI Address Errata");
agenda_item("", "   Ticket ".ticket(421).": Errata: MPI_Aint addressing arithmetic (on top of 349/402/404");
agenda_item("", "   Ticket ".ticket(447).": Errata: Tools section is an exception: no Fortran interface");
agenda_item("", "   Ticket ".ticket(448).": Errata: errata: Semantic term matching is missing - may be considered Ticket 0");
agenda_item("", "   Ticket ".ticket(449).": Errata: Missing in C in wording about handle-comparison");
agenda_item("", "   Ticket ".ticket(451).": Errata: Correcting description of nonblocking");
agenda_item("", "   Ticket ".ticket(453).": Errata: Avoidance of mpi_ / pmpi_ in C due to Fortran reasons");
agenda_item("", "   Ticket ".ticket(455).": Errata: Removal of duplicated text on MPI_Aint and MPI_Offset");
agenda_item("", "   We will vote on any of the other announced tickets as well, if the forum decides they are not ticket 0");
agenda_item(" 4:15pm -   4:45pm", "Break");
agenda_item(" 4:45pm -   6:00pm", "MPI 3.1 Logistics Discussions");
agenda_day_end();

agenda_day_start("Wednesday, September 17, 2014 - WG Discussions");
agenda_item("10:00am - 12:00pm", "WG Discussions");
agenda_item("12:00pm -  1:30pm", "Lunch / outside restaurant");
agenda_Item(" 1:30pm -  5:00pm", "WG Discussions");
agenda_day_end();

include_once("$topdir/include/footer.php");
?>

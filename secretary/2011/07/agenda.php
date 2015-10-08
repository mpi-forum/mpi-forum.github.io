<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, July 18, 2011");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  3:00pm", "Hybrid working group");
agenda_item(" 3:00pm -  3:30pm", "Plenary session: RMA - First Vote - " . 
            ticket(270) . "Ticket #270</a>");
agenda_item(" 3:30pm -  4:00pm", "Plenary session: MPI Timers - Formal Reading - " .
            ticket(277) . "Ticket #277</a>");
agenda_item(" 4:00pm -  4:15pm", "Break");
agenda_item(" 4:15pm -  7:00pm", "Plenary Session: Fault Tolerance working group - formal reading - " .
            ticket(276) . "Ticket #276</a>");
agenda_day_end();

agenda_day_start("Tuesday, July 19, 2011");
agenda_item("  9:00am - 10:00pm", "Working group: Hybrid working group Shared Memory Allocation");
agenda_item(" 10:00am - 11:00pm", "Plenary Session: Hybrid working group shared memory proposal");
agenda_item(" 11:00pm -  1:00pm", "Working Lunch: Plenary Session: Fault Tolerance proposal, " .
            ticket(276) . "ticket #276</a>");
agenda_item("  1:00pm -  1:30pm", "Plenary Session: MPI_Count (" .
            ticket(265) . "ticket #265</a>) Const (" .
            ticket(140) . "ticket #140</a>) first votes");
agenda_item("  1:30pm -  2:00pm", "Plenary Session: MPI_MPROBE Fortran fix -- first vote -- " .
            ticket(274) . "ticket #274");
agenda_item(" 2:00pm -  5:00pm", "Plenary Session: Tools group - MPI_T formal reading - " .
            ticket(266) . "Ticket #266</a>");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  8:00pm", "Plenary Session: Fortran working group - formal reading - " .
            ticket(229) . "ticket #229 (summary)</a> through ticket #253");
agenda_day_end();

agenda_day_start("Wednesday, July 20, 2011");
agenda_item("  9:00am - 10:00pm", "Plenary: Nonblocking MPI-I/O");
agenda_item(" 10:00am - 11:00am", "Sparse Collectives - First vote - " . 
            ticket(258) . "Ticket #258</a>");
agenda_item(" 11:00pm - 12:00pm", "Plenary Session: Remove deprecated bindings - formal reading");
agenda_item(" 12:00pm - 12:45pm", "Working Lunch: Plenary Session: C++ binding as optional -- formal reading (" .
            ticket(279) . "ticket #279</a>)");
agenda_item(" 12:45 -  1:30pm", "Plenary Session: Remove C++ bindings -- discussion (" .
            ticket(281) . "ticket #281<a/>)");
agenda_day_end();

include_once("$topdir/include/footer.php");

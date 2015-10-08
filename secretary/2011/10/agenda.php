<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, Oct 24, 2011");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  3:00pm", "RMA working group");
agenda_item(" 3:00pm -  4:00pm", "Plenary Session: Hybrid Programming
        group - End Points Proposal " . ticket(288) . "Ticket #288</a>");
agenda_item(" 4:00pm -  4:15pm", "Break");
agenda_item(" 4:15pm -  7:00pm", "Plenary Session: Fault Tolerance working group - " .
            ticket(276) . "Ticket #276</a>");
agenda_day_end();

agenda_day_start("Tuesday, Oct 25, 2011");
agenda_item(" 9:00am -  9:15am", "Plenary Session: Hybrid Programming group - 
		Shared Memory Proposal - 1st vote " . ticket(287) . 
		 "Ticket #287</a>");
agenda_item(" 9:15am - 9:30am", "Plenary Session: Tools group - MPI_T
              1st vote - " . ticket(266) . "Ticket #266</a>");
agenda_item(" 9:30am - 9:45am", "Plenary Session: Tools MPI Get Library Version - 
              1st vote - " . ticket(204) . "Ticket #204</a>");
agenda_item(" 9:45am - 10:30pm", "Plenary Session: Forum business");
agenda_item("10:30am - 11:30am","Plenary Session: MPI Comm Group Create - 1st reading "
            . ticket(286) . "Ticket #286</a>");
agenda_item("11:30pm - 12:30pm", "Working Lunch: Plenary Session: Hybrid
        Programming group - Shared Memory Window Allocation - Formal
        Reading " . ticket(284) . "Ticket #284</a>");
agenda_item("12:30pm -  1:15pm","Plenary Session: C++ bindings - Discussion on their continued support in the standard");
agenda_item(" 1:15pm -  1:30pm","Plenary Session: C++ binding as optional -- 1st vote (" .
            ticket(279) . "ticket #279</a>)");
agenda_item(" 1:30pm -  2:15pm", "Plenary Session: MPI Fortran bindings proposal - Tutorial");
agenda_item(" 2:15pm -  2:20pm","Plenary Session: MPI_UNWEIGHTED should not be NULL -- 1st reading " .
            ticket(294) . "ticket #294</a>");
agenda_item(" 2:20pm -  2:30pm","Plenary Session: Change displs in neighborhood collectives -- 1st reading " .
            ticket(299) . "ticket #299</a>");
agenda_item(" 2:30pm -  3:15pm","Plenary Session: Fortran Bindings -- 1st reading (Round 1) " .
            ticket(229) . "ticket #229</a>");
agenda_item(" 3:15pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  5:00pm","Plenary Session: Fortran Bindings -- 1st reading (Round 2) " .
            ticket(229) . "ticket #229</a>");
agenda_item(" 5:00pm -  5:30pm","Plenary Session: Functions to query MPI_Info object attached to windows and 
communicators " .
            ticket(271) . "ticket #271 </a>");
agenda_item(" 5:30pm -  6:00pm","Plenary Session: Missing basic datatypes for C ints " .
            ticket(187) . "ticket #187</a>");
agenda_item(" 6:00pm -  6:30pm","Plenary Session: MPI_Type_create_hindexed_block - 1st reading "
            . ticket(280) . "Ticket #280</a>");
agenda_day_end();

agenda_day_start("Wednesday, Oct 26, 2011");
agenda_item(" 9:00am - 11:00am","Plenary Session - Helper Threads: - 1st reading "
            . ticket(217) . "Ticket #217</a>");
agenda_item("11:00am - 12:00pm", "Plenary session: RMA working group" . ticket(270) . " Ticket #270</a> ");
agenda_item("12:00pm -  1:00pm","Working Lunch: Plenary Session - Non blocking collective I/O routines: "
            . ticket(273) . "Ticket #273</a>");
agenda_item(" 1:00pm -  2:00pm","Plenary Session - Non blocking file manipulation routines: "
            . ticket(285) . "Ticket #285</a>");
agenda_item(" 2:00pm -  2:30pm","Plenary Session - MPI_File_stat discussion "
            . ticket(295) . "Ticket #295</a>");
agenda_day_end();

include_once("$topdir/include/footer.php");

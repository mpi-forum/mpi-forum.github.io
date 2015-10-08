<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, Jan 9, 2012");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerance working group");
agenda_item(" 1:00pm -  3:00pm", "Persistence working group");
agenda_item(" 3:00pm -  3:05pm", "Plenary Session: Hybrid Programming group - 
		Shared Memory Proposal - 2nd vote " . ticket(287) . 
		 "Ticket #287</a>");
agenda_item(" 3:05pm -  3:10pm", "Plenary Session: Tools working group - 
		get_library_version - 2nd vote " . ticket(204) . 
		 "Ticket #204</a>");
agenda_item(" 3:10pm -  3:15pm", "Plenary Session: 
		Optional C++ Bindings - 2nd vote " . ticket(279) . 
		 "Ticket #279</a>");
agenda_item(" 3:15pm -  3:45pm", "Plenary Session: MPI_Init/Finalize ref-counting - formal reading " . ticket(302) . "Ticket #302</a>");
agenda_item(" 3:45pm -  4:00pm", "Break");
agenda_item(" 4:00pm -  4:10pm", "Plenary Session: RMA working group - Modified RMA support - 2nd vote " .
            ticket(270) . "Ticket #270</a>");
agenda_item(" 4:10pm -  4:20pm","Plenary Session: Change displs in neighborhood collectives -- 2nd vote " .
            ticket(299) . "ticket #299</a>");
agenda_item(" 4:20pm -  4:30pm", "Plenary Session: Tools working group - 
		MPI_T - 2nd vote " . ticket(266) . 
		 "Ticket #266</a>");
agenda_item(" 4:30pm -  4:45pm","Plenary Session: Adding clarification to MPI_WIN_LOCK_ALL - formal reading " .
            ticket(298) . "ticket #298</a>");
agenda_item(" 4:45pm -  5:00pm","Plenary Session: Fortran Bindings -- 1st vote " .
            ticket(229) . "ticket #229</a>");
agenda_item(" 5:00pm -  7:00pm", "Plenary Session: Fault Tolerance working group - " .
            ticket(276) . "Ticket #276</a>");
agenda_day_end();

agenda_day_start("Tuesday, Jan 10, 2012");
agenda_item(" 9:00am - 10:00am", "Plenary Session: Hybrid working group- Endpoints - formal reading  " .
            ticket(310) . "Ticket #310</a>");
  agenda_item("10:00am - 11:00am", "Plenary Session: Hybrid working group- Endpoints - formal reading  " .
            ticket(311) . "Ticket #311</a>");
  agenda_item("11:00am -  1:00pm", "Working lunch - Plenary Session: Hybrid working group- Helper Threads - formal reading  " .
            ticket(217) . "Ticket #217</a>");
agenda_item(" 1:00pm -  2:00pm","Plenary Session: MPI Noncollective
                Communicator Creation - formal reading"
            . ticket(286) . "Ticket #286</a>  and " . ticket(305) . "Ticket #305</a>");
agenda_item(" 2:00pm -  2:30pm","Plenary Session: RMA working group - "
            . ticket(308) . "Ticket #308</a>  and " . ticket(309) . "Ticket #309</a>");
agenda_item(" 4:30pm - 5:00pm","Break");
agenda_item(" 5:00pm -  6:00pm","Plenary Session: MPI_Icomm_dup - Formal reading "
            . ticket(168) . "Ticket #168</a>");
agenda_item(" 6:00pm -  7:00pm","Plenary Session: C++ bindings - Formal reading "
            . ticket(281) . "Ticket #281</a>");
agenda_item(" 8:00pm - 9:00pm","Plenary Session: Removing deprecated functions - Formal reading "
            . ticket(278) . "Ticket #278</a>, and " . ticket(303) . "Ticket #303</a>");
agenda_day_end();

agenda_day_start("Wednesday, Jan 11, 2012");
agenda_item(" 9:00am - 10:30am", "Plenary Session: Nonblocking collective I/O routines - formal reading " .
            ticket(273) . "Ticket #273</a>");
agenda_item("10:30am - 10:45am", "Plenary Session: Decide the fate of FT in MPI 3.0 -- formal vote");
agenda_item("10:45am - 11:15am", "Plenary Session: MPI_Type_create_indexed_blocked - formal reading " .
            ticket(280) . "Ticket #280</a>");
agenda_item(" 11:15am -  1:00pm", "Working lunch - Plenary Session: Hybrid
        Programming group - Shared Memory Window Allocation - Formal
        Reading " . ticket(284) . "Ticket #284</a>");

#agenda_item("11:00am - 12:00pm", "Plenary Session: Fault Tolerance working group - " .
#            ticket(276) . "Ticket #276</a>");
#agenda_item("12:00pm -  1:00pm", "Working Lunch - Plenary Session: Fault Tolerance working group - formal reading  " .
#            ticket(276) . "Ticket #276</a>");
agenda_item(" 1:00pm -  2:00pm", "Plenary Session: Scalable vector collectives - formal reading  " .
            ticket(264) . "Ticket #264</a>");
agenda_item(" 2:00pm -  3:00pm", "Plenary Session: MPI_Icomm_dup - formal reading  " .
            ticket(168) . "Ticket #168</a>");
agenda_day_end();

include_once("$topdir/include/footer.php");

<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, May 28, 2012");
agenda_item(" 10:00am - 10:30pm", "Forum Logistics");
agenda_item("10:30am - 12:00pm", "Fault Tolerance working group");
agenda_item("12:00pm -  1:30pm", "Working Lunch: Fault Tolerance working group");
agenda_item("1:30pm - 2:00pm","Planary session: NUDT efforts and view of MPI - Dr Min Xie, National University of Defense Technology");
agenda_item("2:00pm - 2:30pm","Planary session: Fujitsu extensions of Open MPI for the K Computer - Takahiro Kawashima, Tomoya Adachi, Shinji Sumimoto");
agenda_item("2:30pm - 3:30pm","Planary session: Overview of current FT implementations");
agenda_item("3:30pm - 4:00pm","Break");
agenda_item("4:00pm - 5:30pm","Planary session: MPI 3.1 - initial plans");
agenda_item("5:30pm - 6:00pm","Planary session: MPI 3.0 - Draft standard");
agenda_day_end();


agenda_day_start("Tuesday, May 29, 2012");
agenda_item(" 9:00am - 12:00pm", "Tools working group");
agenda_item("12:00pm -  1:00pm", "Working Lunch: Fault Tolerace proposal - Skjellum");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerace proposal, Continued - Skjellum");
agenda_item(" 3:00pm -  5:00pm", "Collectives working group");
agenda_day_end();

agenda_day_start("Wednesday, May 30, 2012");
agenda_item("  9:00am - 10:30pm", "First Votes - <br/>
   For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types "
   . ticket(187) . "ticket #187</a> <br/>

   C++ binding for Dist_graph_neighbors_count is badly broken "
   . ticket(192) . "ticket #192</a> <br/>

  Ensure MPI_Dims_create is really suitable for MPI_Cart_create "
   . ticket(194) . "ticket #194</a> <br/>

  Topology awareness in MPI_Dims_create "
   . ticket(195) . "ticket #195</a> <br/>

  MPI3 Hybrid Programming: Proposal for Helper Threads "
   . ticket(217) . "ticket #217</a> <br/>

  MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined "
   . ticket(256) . "ticket #256</a> <br/>

  Functions to query MPI_Info object attached to windows and communicators "
   . ticket(271) . "ticket #271</a> <br/>

  Add Immediate versions of nonblocking collective I/O routines "
   . ticket(273) . "ticket #273</a> <br/>

  Update examples to not use deprecated constructs (where possible) "
   . ticket(278) . "ticket #278</a> <br/>

  Remove C++ bindings "
   . ticket(281) . "ticket #281</a> <br/>

  MPI_UNWEIGHTED should not be NULL "
   . ticket(294) . "ticket #294</a> <br/>

  Fix issue with definition of nonblocking in One Sided Chapter "
   . ticket(300) . "ticket #300</a> <br/>

  Move MPI-2 deprecated functions to new \"Removed interfaces\" chapter "
   . ticket(303) . "ticket #303</a> <br/>

  MPI_INIT & MPI_FINALIZE "
   . ticket(313) . "ticket #313</a> <br/>

  Clarify MPI behavior when multiple MPI processes run in the same address space "
   . ticket(310) . "ticket #310</a> <br/>

  correct error related to MPI_REQUEST_FREE "
   . ticket(317) . "ticket #317</a> <br/>

  New FT proposal "
   . ticket(323) . "ticket #323</a> <br/>

  MPI3 Fault Tolerance - Files "
   . ticket(326) . "ticket #326</a> <br/>

  MPI3 Fault Tolerance - Dynamic process management "
   . ticket(327) . "ticket #327</a> <br/>

  fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv "
   . ticket(328) . "ticket #328</a> <br/>"
);
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Second Votes - <br/>
  RMA - Remove sentence on offset in datatypes "
   . ticket(308) . "ticket #308</a> <br/>

  RMA - Clarify usage of status for request-based RMA operations "
   . ticket(309) . "ticket #309</a> <br/>

  Allocate a shared memory window "
   . ticket(284) . "ticket #284</a> <br/>

  Add a new datatype creation routine - MPI_Type_create_hindexed_block "
   . ticket(280) . "ticket #280</a> <br/>

  Nonblocking Communicator Duplication "
   . ticket(168) . "ticket #168</a> <br/>

  Remove non-blocking collective C++ bindings "
   . ticket(272) . "ticket #272</a> <br/>

  Noncollective Communicator Creation "
   . ticket(286) . "ticket #286</a> <br/>

  Update MPI_Intercomm_create to use collective tag space "
   . ticket(305) . "ticket #305</a> <br/>"
);
agenda_item(" 12:00pm -  1:00pm", "Working lunch: Summary and Forum business");
agenda_day_end();

include_once("$topdir/include/footer.php");

<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, July 16, 2012");
agenda_item("  1:00pm -  2:00pm", "Forum Logistics");
agenda_item("  2:00pm -  3:30pm", "Second Votes - <br/>
   For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types "
   . ticket(187) . "ticket #187</a> <br/>

   C++ binding for Dist_graph_neighbors_count is badly broken "
   . ticket(192) . "ticket #192</a> <br/>

  MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined "
   . ticket(256) . "ticket #256</a> <br/>

  Functions to query MPI_Info object attached to windows and communicators "
   . ticket(271) . "ticket #271</a> <br/>

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

  correct error related to MPI_REQUEST_FREE "
   . ticket(317) . "ticket #317</a> <br/>

  fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv "
   . ticket(328) . "ticket #328</a> <br/>"
);
agenda_item(" 3:30pm -  3:45pm", "Break");
agenda_item(" 3:45pm -  5:45pm", "Front Matter & Introduction chapter committee  - final chapter edits");
agenda_item(" 3:45pm -  5:45pm", "Point-to-Point chapter committee  - final chapter edits");
agenda_item(" 5:45pm -  6:15pm", "MPI 3.0 final logistics");
agenda_item(" 6:15pm -  7:15pm", "MPI Next");
agenda_day_end();


agenda_day_start("Tuesday, July 17, 2012");
agenda_item(" 9:00am - 11:00am", "Datytypes chapter committee  - final chapter edits");
agenda_item("11:00am -  1:00pm", "Working Lunch: Collectives chapter committee  - final chapter edits");
agenda_item(" 1:00pm -  3:00pm", "Process Topologies chapter committee  - final chapter edits");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  5:15pm", "Process Creation and Management chapter committee  - final chapter edits");
agenda_item(" 3:15pm -  5:15pm", "Deprecated Functions chapter committee  - final chapter edits");
agenda_item(" 5:15pm -  7:15pm", "One-Sided Communications chapter committee  - final chapter edits");
agenda_item(" 5:15pm -  7:15pm", "External Interfaces chapter committee  - final chapter edits");
agenda_day_end();

agenda_day_start("Wednesday, July 18, 2012");
agenda_item(" 9:00am - 11:00am", "Terms and Definitions chapter committee  - final chapter edits");
agenda_item("11:00am -  1:00pm", "Working Lunch: Groups, Contexts, and Communicators chapter committee  - final chapter edits");
agenda_item("11:00am -  1:00pm", "Working Lunch: Profiling Interface chapter committee  - final chapter edits");
agenda_item(" 1:00pm -  3:00pm", "Environmental Management chapter committee  - final chapter edits");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  5:15pm", "Info Object chapter committee  - final chapter edits");
agenda_item(" 5:15pm -  7:15pm", "Language bindings chapter committee  - final chapter edits");
agenda_day_end();

agenda_day_start("Thursday, July 19, 2012");
agenda_item(" 9:00am - 11:00am", "I/O chapter committee  - final chapter edits");
agenda_item("11:00am -  1:00pm", "Working Lunch: Annex Language Bindings Summary chapter committee  - final chapter edits");
agenda_day_end();

include_once("$topdir/include/footer.php");

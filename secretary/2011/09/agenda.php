<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Thursday, Sept 22, 2011");
agenda_item(" 1:00pm -  3:00pm", "Fault Tolerance working group");
agenda_item("  3:00pm -  3:30pm", "Plenary Session: MPI_Count (" .
                    ticket(265) . "ticket #265</a>) Const (" . ticket(140) . "ticket #140</a>) second vote");
agenda_item("  3:30pm -  3:45pm", "Plenary Session: MPI_MPROBE Fortran fix -- second vote -- " .  ticket(274) . "ticket #274</a>");
agenda_item(" 3:45pm -  4:00pm", "Break");
agenda_item(" 4:00pm -  7:00pm", "Plenary Session: Fault Tolerance working group " . ticket(276) . "Ticket #276</a>");
agenda_day_end();

agenda_day_start("Friday, Sept 23, 2011");
agenda_item(" 9:00am -  10:00am", "Plenary Session: Glossary");
agenda_item("10:00am - 11:30am", "Plenary Session: Hybrid Programming
        group - Shared Memory Proposal - Formal Reading " . ticket(287)
        . "Ticket #287</a>");
agenda_item("11:30am -  1:00pm", "Working Lunch: Plenary Session: Hybrid
        Programming group - Shared Memory Window Allocation - Formal
        Reading " . ticket(284) . "Ticket #284</a>");
agenda_item(" 1:00pm -  2:00pm", "Plenary Session: Hybrid Programming
        group - End Points Proposal " . ticket(288) . "Ticket #288</a>");
agenda_item(" 2:00pm -  5:00pm", "Plenary Session: Tools group - MPI_T
        formal reading - " . ticket(266) . "Ticket #266</a>");
agenda_item(" 5:00pm -  7:00pm", "Plenary Session: Hybrid Programming
        group - End Points Proposal " . ticket(289) . "Ticket #289</a>");
agenda_day_end();

agenda_day_start("Saturday, Sept 24, 2011");
agenda_item(" 9:00am - 10:30am", "Plenary Session: Fortran working group
        -  - " . ticket(229) . "Ticket #229</a>");
agenda_item(" 10:30am - 11:30am", "Sparse Collectives - Second vote - ". ticket(258) . "Ticket #258</a>");
agenda_item("11:30am -  1:00pm", "Working Lunch: Scalable Vector Collectives");
agenda_item("  1:00pm -  3:00pm", "Plenary Session - MPI_Group_comm_create");
agenda_day_end();


include_once("$topdir/include/footer.php");

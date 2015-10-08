<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, Dec 3, 2012");
agenda_item("  1:00pm -   2:00pm", "Planary session: Follow up on SC responses to MPI 3.0, and MPI 3.0 errata plans.");
agenda_item("  2:00pm -   3:00pm", "Planary session: Future direction with nonblocking I/O.");
agenda_item("  3:00pm -   3:15pm", "Break");
agenda_item("  3:15pm -   6:30pm", "Planary session: Future direction with hybrid programming efforts.");
agenda_day_end();


agenda_day_start("Tuesday, Dec 4, 2012");
agenda_item("  9:00am -  12:00am", "Planary session: Future direction with Fault Tolerance support in MPI.<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=211784057&UID=0&PW=NN2NkZWJhZTAz&RT=MiM0 \">Webex link</a>.  Password: \"mpi\"");
agenda_item(" 12:00pm -   1:00pm", "Lunch break");
agenda_item(" 1:00pm -  1:30pm", "Plenary Session: Fortran Programming group - 
                Errata vote " . ticket(345) .
                 "Ticket #345</a>");
agenda_item("  1:30pm -   4:00pm", "MPI-Next/4 structure and future direction.");
agenda_item("  4:00pm -   4:15pm", "Break");
agenda_item("  4:15pm -   7:00pm", "MPI-Next/4 structure and future direction - cont'd.");
agenda_day_end();

agenda_day_start("Wednesday, Dec 5, 2012");
agenda_item("  9:00am -  11:00am", "RMA/FT joint working group<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=211784692&UID=0&PW=NY2FlMTY3OTRm&RT=MiM0 \">Webex link</a>.  Password: \"mpi\"");
agenda_item(" 11:00am -  12:00pm", "Persistence working group - collective and Point-to-point performance enhancements.");
agenda_item(" 12:00pm -   1:00pm", "Lunch break");
agenda_item("  1:00pm -   3:00pm", "RMA working group");
agenda_item("  1:00pm -   4:00pm", "FT/Tools working group - piggybacking");
agenda_item("  4:00pm -   4:15pm", "Break");
agenda_item("  4:15pm -   7:00pm", "FT working group<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=212003882&UID=0&PW=NMzQ3MmU1MTUw&RT=MiM0\">Webex link</a>.  Password: \"mpi\"");
agenda_day_end();

agenda_day_start("Thursday, Dec 6, 2012");
agenda_item("  9:00am -  11:00am", "Collectives working group");
agenda_item("  9:00am -  11:00am", "Hybrid working group");
agenda_item(" 11:00am -   1:00pm", "Working lunch: Tools working group");
agenda_item("  1:30pm -   2:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

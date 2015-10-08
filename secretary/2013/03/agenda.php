<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, March 11, 2013 - Working Groups");
add_webex("MPR-2","https://cisco.webex.com/ciscosales/j.php?ED=218282587&UID=0&PW=NMDBhYjQyYzM1&RT=MiM3","mpi");
agenda_item(" 1:00pm -   3:00pm", "Tools and FT WGs: Piggybacking / Vector Send/Recv (MPR-2)");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:30pm", "P2P WG: Recvreduce (MPR-2)");
agenda_day_end();

agenda_day_start("Tuesday, March 12, 2013 - Working Groups");
add_webex("Navy Pier","https://cisco.webex.com/ciscosales/j.php?ED=218282412&UID=0&PW=NMjBmM2QxNTI3&RT=MiM3","mpi");
agenda_item(" 9:00am - 10:00pm", "Collectives WG: MPI_Alltoallwt (Navy Pier)");
agenda_item(" 10:00am - 10:15am", "Break");
agenda_item(" 10:15am  - 12:00pm", "Tools WG: Debugging Interfaces (Navy Pier)");
agenda_item(" 10:15am  - 12:00pm", "I/O WG (MPR-2)");
agenda_item(" 12:00pm -  1:00pm", "Lunch break");
agenda_item(" 1:00pm  -  3:00pm", "Gen. Req. WG (Navy Pier)");
agenda_item(" 1:00pm  -  2:00pm", "Fault Tolerance and RMA WG (MPR-2)");
agenda_item(" 2:00pm  -  3:00pm", "Fault Tolerance WG (MPR-2)");
agenda_item(" 3:00pm  -  3:30pm", "Break");
agenda_item(" 3:30pm -   5:30pm", "RMA WG: Iwin_create and Iwin_allocate (Navy Pier)");
agenda_item(" 3:30pm  -  5:30pm", "Fault Tolerance WG (MPR-2)");
agenda_day_end();

agenda_day_start("Wednesday, March 13, 2013 - Plenary (MPR-2)");
add_webex("MPR-2","https://cisco.webex.com/ciscosales/j.php?ED=218282412&UID=0&PW=NMjBmM2QxNTI3&RT=MiM3","mpi");
agenda_item("  9:00am -  9:15am", "Working Group Updates (Working group leads)");
agenda_item("  9:15am - 11:00am", "Discussion on MPI 3.1/4.0 <A HREF=\"mpi-forum-voting-proposal-1.2.pdf\">Voting Rules Document</A> (Jeff S.)");
agenda_item(" 11:00am - 11:15am", "Break");
agenda_item(" 11:15am - 12:00pm", "Discussion/Update on MPI Architecture Review Board");
agenda_item(" 12:00pm -  1:00pm", "Lunch break (continued ARB discussion)");
agenda_item("  1:00pm -  2:00pm", "Reading: MPI 3.0 RMA Errata (tickets ".ticket(347).", ".ticket(348).", ".ticket(350).", ".ticket(355).", ".ticket(359).", ".ticket(361).", ".ticket(362)." + late addition ".ticket(367).")");
agenda_item("  2:00pm -  2:45pm", "MPI Side Document Discussion (Jeff S.)");
agenda_item("  2:45pm -  3:00pm", "Fortran BIND(C) discussion (Jeff S.)");
agenda_item("  3:00pm -  3:30pm", "Break");
agenda_item("  3:30pm -  5:00pm", "Hybrid WG Plenary (Pavan)");
agenda_item("  5:00pm -  6:00pm", "Thread safety for query routines (ticket ".ticket(357).") (Jeff H.)");
agenda_day_end();

agenda_day_start("Thursday, March 14, 2013 - Plenary (MPR-2)");
add_webex("MPR-2","https://cisco.webex.com/ciscosales/j.php?ED=218282457&UID=0&PW=NMTY0NzQ5M2Ni&RT=MiM3","mpi");
agenda_item("  9:00am -   9:45am", "Official votes on Errata and Voting Rules: <a href=\"procedures-2013-03-15.pdf\">Final document</a>, <a href=\"procedures-prior-to-2013-03-15.pdf\">Archival document</a>");
agenda_item("  9:45am -  10:30am", "Safe mechanisms to return strings (Fab)");
agenda_item(" 10:30am -  10:45am", "Break");
agenda_item(" 10:45am -  12:30pm", "P2P Working Group");
agenda_item(" 12:30pm           ", "Close");
agenda_day_end();

/*

agenda_item("  1:00pm -   2:00pm", "Planary session: Follow up on SC responses to MPI 3.0, and MPI 3.0 errata plans.");
agenda_item("  2:00pm -   3:00pm", "Planary session: Future direction with nonblocking I/O.");
agenda_item("  3:00pm -   3:15pm", "Break");
agenda_item("  3:15pm -   6:30pm", "Planary session: Future direction with hybrid programming efforts.");
agenda_day_end();


agenda_day_start("Tuesday, March 12, 2013");
agenda_item("  9:00am -  12:00am", "Planary session: Future direction with Fault Tolerance support in MPI.<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=211784057&UID=0&PW=NN2NkZWJhZTAz&RT=MiM0 \">Webex link</a>.  Password: \"mpi\"");
agenda_item(" 12:00pm -   1:00pm", "Lunch break");
agenda_item(" 1:00pm -  1:30pm", "Plenary Session: Fortran Programming group - 
                Errata vote " . ticket(345) .
                 "Ticket #345</a>");
agenda_item("  1:30pm -   4:00pm", "MPI-Next/4 structure and future direction.");
agenda_item("  4:00pm -   4:15pm", "Break");
agenda_item("  4:15pm -   7:00pm", "MPI-Next/4 structure and future direction - cont'd.");
agenda_day_end();

agenda_day_start("Wednesday, March 13, 2013");
agenda_item("  9:00am -  11:00am", "RMA/FT joint working group<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=211784692&UID=0&PW=NY2FlMTY3OTRm&RT=MiM0 \">Webex link</a>.  Password: \"mpi\"");
agenda_item(" 11:00am -  12:00pm", "Persistence working group - collective and Point-to-point performance enhancements.");
agenda_item(" 12:00pm -   1:00pm", "Lunch break");
agenda_item("  1:00pm -   3:00pm", "RMA working group");
agenda_item("  1:00pm -   4:00pm", "FT/Tools working group - piggybacking");
agenda_item("  4:00pm -   4:15pm", "Break");
agenda_item("  4:15pm -   7:00pm", "FT working group<br /><a href=\"https://cisco.webex.com/ciscosales/j.php?ED=212003882&UID=0&PW=NMzQ3MmU1MTUw&RT=MiM0\">Webex link</a>.  Password: \"mpi\"");
agenda_day_end();

agenda_day_start("Thursday, March 14, 2013");
agenda_item("  9:00am -  11:00am", "Collectives working group");
agenda_item("  9:00am -  11:00am", "Hybrid working group");
agenda_item(" 11:00am -   1:00pm", "Working lunch: Tools working group");
agenda_item("  1:30pm -   2:00pm", "Wrap up");
agenda_day_end();

*/

include_once("$topdir/include/footer.php");
?>

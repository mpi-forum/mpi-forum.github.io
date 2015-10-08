<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of April 15, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, April 28 2008");
agenda_item("1:00pm - 1:45pm", "Reports from the working groups");
agenda_item("1:45pm - 2:00pm", "Items from the floor");
agenda_item("2:00pm - 3:00pm", "Full Forum: Sturcture of MPI-3");
agenda_item("3:00pm - 3:15pm", "Break");
agenda_item("3:15pm - 4:15pm", "Full Forum: Structure of MPI-3, continued");
agenda_item("4:15pm - 4:35pm", "MPI-2.1 Ballot 3/4 preparation of Second/First official vote");
agenda_item("4:35pm - 4:55pm", "MPI-1.3 official reading, i.e. report of the reviewers");
agenda_item("4:55pm - 5:15pm", "MPI-2.1 official reading, i.e. report of the reviewers");
agenda_item("5:30pm - 7:00pm", "Break for dinner");
agenda_item("7:00pm - 9:00pm", "MPI-2.1 official reading, continued, 5-10 min/chapter");
agenda_item("9:00pm -10:00pm", "Further discussions on MPI-1.3/2.1 details (<em>only if needed</em>)");

agenda_day_start("Tuesday, April 29 2008");
agenda_item("9:00am - 9:40am", "MPI 2.1 Ballot 3/4: Second=final / first vote");
agenda_item("9:45am - 10:00am", "MPI 2.1 decisions (straw votes) on open issues from the discussions");
agenda_item("10:00am - 10:15am", "Break");
agenda_item("10:15am - 11:15pm", "Full Forum: MPI 2.0 dynamics and Fault-tolerance support - Proposal discussion");
agenda_item("11:15am - 12:15pm", "MPI 2.1 presentation of results from all discussions finishing the official reading of MPI-1.3 and MPI-2.1");
agenda_item("12:15pm - 1:30pm", "Break for lunch");
agenda_item("1:30pm - 3:00pm", "Fault Tolerance working group<br />Fortran Working group");
agenda_item("3:00pm - 3:15pm", "Break");
agenda_item("3:15pm - 5:15pm", "MPI 2.2 discussions<br />
Official Reading: Remove Send Buffer Access Restriction<br />
<a href='http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/SendBufferAccess'>
http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/SendBufferAccess</a><br />
Official Reading: Adding const Correctness to the C Bindings<br />
<a href='http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ConstCorrectness'>
http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ConstCorrectness<a/>");
agenda_item("5:15pm - 7:15pm", "Point-to-Point working group <br /> ABI working group");

agenda_day_start("Wednesday, April 30, 2008");
agenda_item("9:00am - 9:30am", "MPI 2.1 follow up");
agenda_item("9:30am - 10:45am", "RMA working group <br /> Collectives working group");
agenda_item("10:45am - 11:00am", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

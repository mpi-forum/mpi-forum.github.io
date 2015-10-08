<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, July 27, 2009");
agenda_item(" 1:00pm -  1:30pm", "Reports from the working groups");
agenda_item(" 1:30pm -  2:00pm", "MPI 3.0 priorities discussion");
agenda_item(" 2:00pm -  5:00pm", "MPI 2.2 Voting: <a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&col=id&col=summary&col=status&col=type&col=priority&col=milestone&group=type&order=priority&priority=Had+1st+vote&version=MPI+2.2\">tickets to be voted on</a>");
agenda_item(" 5:00pm -  7:00pm", "Hybrid Programming Working Group");
agenda_day_end();

agenda_day_start("Tue, July 28, 2009");
agenda_item(" 9:00am - 10:45am", "Fault tolerance working group ; Tools Working Group");
agenda_item("10:45am - 11:00am", "Break");
agenda_item("11:00am -  1:00pm", "Working Lunch - RMA working group ; Fortran Working Group");
agenda_item(" 1:00pm -  3:00pm", "Collectives working group");
agenda_item(" 3:00pm -  5:00pm", "Active Messages Working Group");
agenda_item(" 5:00pm -  5:15pm", "Break");
agenda_item(" 5:15pm -  7:00pm", "MPI 3.0 Plenary session - Corrections");
agenda_day_end();

agenda_day_start("Wed, July 29, 2009");
agenda_item(" 9:00am - 11:30am", "MPI 3.0 Plenary session - Corrections");
agenda_item("11:30am - 12:00pm", "Wrap up");
agenda_day_end();

include_once("$topdir/include/footer.php");

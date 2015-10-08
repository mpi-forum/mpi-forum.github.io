<?
$short_desc = " Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

function webex($link, $pw) {
    return "<br /><a href=\"$link\">Webex link (pw: $pw)</a>";
}



agenda_day_start("Wednesday, September 11, 2013 - Open Disucssions");
agenda_item(" 9:30am - 10:30am", "Open Disucssions");
agenda_item("10:30am - 11:00am", "Break");
agenda_item("11:00am - 12:30pm", "Open Disucssions");
agenda_item("12:30pm -  1:30pm", "Lunch - not provided");
agenda_item(" 1:30am -  3:00pm", "Open Disucssions");
agenda_item(" 3:00pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  5:00pm", "Open Disucssions");
agenda_day_end();

agenda_day_start("Thursday, September 12, 2013");
agenda_item("", "<strong>Location: Salon Traviata on the 1st floor</a>");
#agenda_item("", "<a href=\"https://cisco.webex.com/ciscosales/j.php?ED=206545308&UID=0&PW=NMGQzYzBmYzk1&RT=MiMxNDQ%3D\">Webex for the day (password: mpi)</a>");
agenda_item(" 9:00am -  9:30am", "WG Updates");
agenda_item(" 9:30am - 10:30am", "MPI Attributes Proposal (Jeff S.)");
agenda_item("10:30am - 11:00am", "Break");
agenda_item("11:00am - 12:30pm", "Tool Plenary (Errata and Readings, Jeff S. and Martin)");
agenda_ticket(377,"MPI_T get variables and categories by index");
agenda_ticket(378,"MPI_T Optional output parameters");
agenda_ticket(385,"Errata: MPI_T_PVAR_CLASS_SIZE description");
agenda_ticket(386,"Errata: Clarify error code for perf var routines if bad handle given");
agenda_ticket(387,"Errata: control -> categories");
agenda_ticket(391,"Errata: MPI_T: Clarify return code for start/stop/reset of perf vars");
agenda_ticket(375,"Message Queue Support For Debugger Side Document");
agenda_item("12:30pm -  1:30pm", "Lunch - provided");
agenda_item(" 1:30am -  3:00pm", "Fortran WG Plenary (Errata and Readings, Jeff S. and Rolf)");
agenda_ticket(388,"Errata: Solving the FORTRAN LOGICAL and BIND(C) problem");
agenda_ticket(389,"Errata: MPI_CONVERSION_FN_NULL is missing in annexes A.2, A.3, and A.4");
agenda_ticket(390,"Errata: Correcting Fortran _CPTR interface descriptions");
agenda_item(" 3:00pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  4:00pm", "MPI allocate receive / MPI_Arecv (Jeff S.)");
agenda_item(" 4:00pm -  5:00pm", "Collectives WG Discussions (Torsten)");
agenda_day_end();

agenda_day_start("Friday, September 13, 2013");
agenda_item("", "<strong>Location: Salon Traviata on the 1st floor</a>");
#agenda_item("", "<a href=\"https://cisco.webex.com/ciscosales/j.php?ED=206545308&UID=0&PW=NMGQzYzBmYzk1&RT=MiMxNDQ%3D\">Webex for the day (password: mpi)</a>");
agenda_item(" 9:00am - 10:30am", "FT WG Plenary (Rich)");
agenda_item("10:30am - 11:00am", "Break");
agenda_item("11:00am - 11:15am", "Final discussion on votes");
agenda_item("11:15am - 11:30am", "Reread/Discusson of ticket 0 changes (Fortran)");
agenda_item("11:30am - 11:45am", "Votes (Errata)");
agenda_item("11:45am - 12:30pm", "Adminstrativa Discussion, Logos, Process, ...");
agenda_item("12:30pm -  1:30pm", "Lunch - provided");
agenda_item(" 1:30pm -  3:00pm", "Hybrid WG Plenary
<a href=\"https://cisco.webex.com/ciscosales/j.php?ED=206545308&UID=0&PW=NMGQzYzBmYzk1&RT=MiMxNDQ%3D\">Webex (password: mpi)</a>");
agenda_item(" 3:00pm -  3:30pm", "Break");
agenda_item(" 3:30pm -  5:00pm", "Hybrid WG Plenary (cont.)");
agenda_day_end();

include_once("$topdir/include/footer.php");
?>

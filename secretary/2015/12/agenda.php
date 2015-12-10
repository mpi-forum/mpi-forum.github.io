<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, December 7, 2015 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "Fortran WG - Craig");
agenda_item(" 2:00pm -   3:30pm", "Tools WG - Kathryn");
agenda_item("", "Webex URL: <a href=\"https://cisco.webex.com/ciscosales/j.php?MTID=me6683225d70bf988457b09162295896c\">https://cisco.webex.com/ciscosales/j.php?MTID=me6683225d70bf988457b09162295896c</a><br />Webex pw: SiRhbqVd");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Hybrid WG - Pavan");
agenda_item(" 4:00pm -   5:30pm", "Tools WG - Kathryn");
agenda_item("", "Webex URL: <a href=\"https://cisco.webex.com/ciscosales/j.php?MTID=me6683225d70bf988457b09162295896c\">https://cisco.webex.com/ciscosales/j.php?MTID=me6683225d70bf988457b09162295896c</a><br />Webex pw: SiRhbqVd");
agenda_day_end();

agenda_day_start("Tuesday, December 8, 2015 - Working Groups");
agenda_item(" 9:00am - 10:30am", "Tools WG - Kathryn");
agenda_item(" ", "Webex URL: <a href=\"https://cisco.webex.com/ciscosales/j.php?MTID=m774cfe109f6b9ad6eef9cc16d20c4a67\">https://cisco.webex.com/ciscosales/j.php?MTID=m774cfe109f6b9ad6eef9cc16d20c4a67</a><br />Webex pw: YtmsFuZD");
agenda_item(" 9:00am - 10:30am", "RMA WG - Bill/Rajeev");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "RMA WG - Bill/Rajeev");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "FT WG - Wesley");
agenda_item(" 1:30pm - 3:00pm", "P2P WG - Dan");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "FT WG - Wesley");
agenda_item(" 3:30pm - 5:00pm", "P2P WG - Dan");
agenda_day_end();

agenda_day_start("Wednesday, December 9, 2015 - WG and Plenary Discussions");
agenda_item(" 9:00am - 10:30am", "Persistence WG - Tony");
agenda_item(" 9:00am - 10:30am", "Large Counts WG - Jeff H.");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:00pm", "Plenary Discusssions (agenda, see below)");

agenda_item(" 6:00pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();

agenda_day_start("Thursday, December 10, 2015 - Working Groups");
agenda_item(" 9:00am - 9:30am", "No Votes Scheduled");
agenda_item(" 9:30am - 10:30am", "WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "WG time");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();

agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",1);
plenary_item("","Update and Q/A on github transition","Wesley",1);

plenary_item("","Update on persistence WG","Tony",1);

plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/12\">Reading #12</a> - ERRATA: MPI_T code example bug","Jeff",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/5\">Reading #5</a>:  MPIR being_debugged","Anh",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">Reading #1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">Reading #3</a>: Define new MPI Error handler for subcommunicator abort","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/7\">Reading #7</a>: Cleanup Advice and Definition of MPI_COMM_FREE","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/11\">Reading #11</a>: Communicator Info Assertions","Jim",1);

plenary_item("","Minor update on update on persistence WG","Dan",1);
plenary_item("","FT-WG: non-catastrophic errors","Wesley",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

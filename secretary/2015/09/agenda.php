    <?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Thursday, September 24, 2015 - Plenary and Working Groups");
agenda_item(" 9:00am -   10:15am", "Plenary");
agenda_item(" 10:15am - 10:45am", "Break");
agenda_item(" 10:45am -   12:00pm", "Plenary");
agenda_item(" 12:00pm - 2:00pm", "Lunch");
agenda_item(" 2:00pm -   3:30pm", "FT WG / ULFM and RMA");
agenda_item(" 2:00pm -   3:30pm", "P2P WG");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "FT WG / ULFM and RMA");
agenda_item(" 4:00pm -   5:30pm", "P2P WG");
agenda_day_end();

agenda_day_start("Friday, September 25, 2015 - Votes, Plenary and Working Groups");
agenda_item(" 9:00am -   9:15am", "Votes");
agenda_item(" 9:15am -   10:15am", "Plenary");
agenda_item(" 10:15am - 10:45am", "Break");
agenda_item(" 10:45am -   12:00pm", "Plenary");
agenda_item(" 12:00pm - 2:00pm", "Lunch");
agenda_item_webex("2:00pm -   3:30pm", "Tools WG / QMPI (with dialin)","https://cisco.webex.com/ciscosales/j.php?MTID=m98b758a0f03126f1d3124d81874512c2","tools");
agenda_item(" 2:00pm -   3:30pm", "RMA WG");
agenda_item(" 3:30pm -  4:00pm", "Break");
agenda_item_webex(" 4:00pm -   5:30pm", "Tools WG / QMPI (with dialin)","https://cisco.webex.com/ciscosales/j.php?MTID=m98b758a0f03126f1d3124d81874512c2","tools");
agenda_item(" 4:00pm -   5:30pm", "RMA WG");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("Update","WG status","All WG chairs or their proxies",1);
plenary_item("","Feedback on the MPI Standard from the Japanese Translation","Atsushi",1);
plenary_item("Errata","","",0);
plenary_item("Readings",ticket(484)." Update MPIR_being_debugged scope to include MPI processes","Jeff",1);
plenary_item("",ticket(324)." Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",1);
plenary_item("",ticket(477)." Define new MPI Error handler for subcommunicator abort","Wesley",1);
plenary_item("General","ULFM and general FT Update","Wesley",1);
plenary_item("","MPC Presentation","Jean-Baptiste",1);
plenary_item("","RMA Notification","Torsten",1);
plenary_item("","git workflow proposal","Wesley",1);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

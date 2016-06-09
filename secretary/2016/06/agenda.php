<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, June 6, 2016 - Working Groups");
agenda_item_webex(" 2:00pm -   3:30pm", "Tools WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m04bbeb292282de876535d864a103ee05", "JMpFhhhG");
agenda_item_webex(" 2:00pm -   3:30pm", "FT WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m441f041e40eef2dc9206b012ae478930", "PsA8TCkj");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item_webex(" 4:00pm -   5:30pm", "Tools WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m04bbeb292282de876535d864a103ee05", "JMpFhhhG");
agenda_item_webex(" 4:00pm -   5:30pm", "FT WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m441f041e40eef2dc9206b012ae478930", "PsA8TCkj");
agenda_day_end();

agenda_day_start("Tuesday, June 7, 2016 - Working Groups");
agenda_item_webex(" 9:00am - 10:30am", "Tools WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m0f6e91e92d02244e1be8c1b08f18b75f", "JMpFhhhG");
agenda_item(" 9:00am - 10:30am", "Persistance WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item_webex(" 11:00am - 12:30am", "Tools WG time", "https://cisco.webex.com/ciscosales/j.php?MTID=m0f6e91e92d02244e1be8c1b08f18b75f", "JMpFhhhG");
agenda_item(" 11:00am - 12:30pm", "Hybrid WG time");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "Sessions WG time");
agenda_item(" 1:30pm - 3:00pm", "RMA WG time");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:30pm", "Sessions WG time");
agenda_item(" 3:30pm - 5:30pm", "Large Count WG time");
agenda_day_end();


agenda_day_start("Wednesday, June 8, 2016 - Plenary");
$p = "Plenary Discussions (see agenda, below)";
$pwu = "https://cisco.webex.com/ciscosales/j.php?MTID=m97c5f23fde662d68019fa7f703f79de7";
$pwp = "Y7uTPct6";
agenda_item_webex(" 9:00am - 10:30am", $p, $pwu, $pwp);
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item_webex(" 11:00am - 12:30pm", $p, $pwu, $pwp);
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item_webex(" 1:30pm - 3:30pm", $p, $pwu, $pwp);
agenda_item(" 3:30pm - 4:00pm", "Break");
agenda_item_webex(" 4:30pm - 6:00pm", $p, $pwu, $pwp);

agenda_item(" 6:30pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();

$pwu = "https://cisco.webex.com/ciscosales/j.php?MTID=maa91d7b8959b61546da865893bc88c15";
$pwp = "brBJra9y";
agenda_day_start("Thursday, June 9, 2016 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item("                ", "Procudure Votes:");
agenda_item("                ","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception");
agenda_item("                ", "No \"No Votes\" Vote:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel");
agenda_item("                ", "First Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel");
agenda_item("                ", "Second Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/5\">#5</a>: MPIR being_debugged");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/7\">#7</a>: Cleanup Advice and Definition of MPI_COMM_FREE");
agenda_item_webex(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)", $pwu, $pwp);
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item_webex(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)", $pwu, $pwp);
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("Opening","Update on WG status","All WG chairs or their proxies",1);
plenary_item("","Git Q&A (if necessary)","Wesley",1);
plenary_item("Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/28\">#28</a>: Add Catastrophic and Noncatastrophic Error Codes","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">#1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">#3</a>: Define new MPI Error handler for subcommunicator abort","Wesley",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/20\">#20</a>: ULFM part 1","Aurelien",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/21\">#21</a>: ULFM part 2","Aurelien",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/22\">#22</a>: ULFM part 3","Aurelien",1);
plenary_item("Procedures Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception","Martin",1);
plenary_item("Refresher","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/25\">#25</a>: Adding Persistent Collective Communication","Tony",1);
plenary_item("Change Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel","Dan",1);
plenary_item("Errata Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/52\">#52</a>: Erratum to remove info key propagation from MPI_COMM_DUP (ticketErrta)","Dan",1);
plenary_item("Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/53\">#53</a>: MPI_COMM_DUP_WITH_INFO can be used to explicitly propagate info hints (ticketIDWI)","Dan",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/11\">#11</a>: Adds communicator info keys and allows info assertions (ticketInfo)","Dan",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/6\">#6</a>: MPIR: Include line numbers in specification","Kathryn",1);
plenary_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/51\">#51</a>: Deprecate MPI_SIZEOF in MPI-4.0","Jeff",1);
plenary_item("","Discussion on Error Handlers","Wesley",0);
plenary_item("Other","Discussion on Locations and Dates for 2017 Meetings","Martin",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

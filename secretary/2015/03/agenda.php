<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, March 2, 2015 - Working Groups");
agenda_item(" 2:00pm -   4:00pm", "Tools WG (PMPI-2 Disucssion) - Kathryn");
agenda_item(" 2:00pm -   4:00pm", "FT WG (ULFM) - Wesley");
agenda_item(" 4:00pm -   4:15pm", "Break");
agenda_item(" 4:15pm -   5:45pm", "Tools WG (PMPI-2 Disucssion) - Kathryn");
agenda_item(" 4:15pm -   5:45pm", "Hybrid WG (Pavan)");
agenda_day_end();

agenda_day_start("Tuesday, March 3, 2015 - Working Groups and Plenary");
agenda_item(" 9:00am - 10:00am", "RMA WG (Bill)");
agenda_item(" 9:00am - 10:00am", "Tools WG");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "RMA WG (Bill)");
agenda_item(" 10:30am - 12:00pm", "Tools WG");
agenda_item(" 12:00pm -  1:00pm", "Lunch (provided)");
agenda_item_webex(" 1:00pm - 3:00pm", "Plenary (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5934b3a7b3d6e6c57002eda77383a0f9", "mpi");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item_webex(" 3:30pm - 5:30pm", "Plenary (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5934b3a7b3d6e6c57002eda77383a0f9", "mpi");
agenda_day_end();

agenda_day_start("Wednesday, March 4, 2015 - Plenary Discussions");
agenda_item_webex(" 9:00am - 10:00am", "Plenary (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5be88595caf59c18a01c6f9e32132fe6", "mpi");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item_webex(" 10:30am - 12:00pm", "Plenary (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5be88595caf59c18a01c6f9e32132fe6", "mpi");
agenda_item(" 12:00pm -  1:00pm", "Lunch (provided)");
agenda_item_webex(" 1:00pm - 3:00pm",
                  "Plenary Discusssions (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5be88595caf59c18a01c6f9e32132fe6", "mpi");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item_webex(" 3:30pm - 5:00pm",
                  "Plenary Discusssions (agenda, see below)",
                  "https://cisco.webex.com/ciscosales/j.php?MTID=m5be88595caf59c18a01c6f9e32132fe6", "mpi");

agenda_item(" 6:00pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();


agenda_day_start("Thursday, March 5, 2015 - Votes and Plenary");

agenda_item("  9:00am", "Starting of voting block (fixed time / can only be changed on unanimous consent)");
agenda_item("", "Updates to tickets as neded and votes on accepting updates");

agenda_item("                  ", "First Vote: ");
agenda_item("                  ", "Second Vote: ");
agenda_item("                  ", "Chapter Votes: ");
agenda_item("                  ", "Vote on MPI 3.1 ");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 10:30am - 12:30pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:30pm          ", "Close");
agenda_day_end();

agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("","Update on WG status","All WG chairs or their proxies",1);
plenary_item("Chapter readings", "","",0);
plenary_item("", "Front Matter","Bill",0);
plenary_item("", "1: Introduction","Bill",0);
plenary_item("", "2: MPI Terms and Conventions","Rolf",1);
plenary_item("", "3: Point to Point Communiction","Dan",1);
plenary_item("", "4: Datatypes","George",1);
plenary_item("", "5: Collective Communication","Torsten",1);
plenary_item("", "6: Groups, Contexts, Communicators, Caching","Pavan",1);
plenary_item("", "7: Process Topologies","Rolf for Torsten",1);
plenary_item("", "8: MPI Environmental Management","Georg",1);
plenary_item("", "9: The Info Object","Jeff H.",1);
plenary_item("", "10: Process Creation and Mangement","David",1);
plenary_item("", "11: One-Sided Communication","Bill",0);
plenary_item("", "12: External Interfaces","Pavan",1);
plenary_item("", "13: I/O","Quincey",1);
plenary_item("", "14: Tool Support","Kathryn",1);
plenary_item("", "15: Deprecated Functions","Rolf",1);
plenary_item("", "16: Removed Interfaces","Rolf",1);
plenary_item("", "17: Language Bindings","Jeff S.",1);
plenary_item("", "A: Language Bindings Summary","Rolf",1);
plenary_item("", "B: Change Log","Rolf",1);
plenary_item("Open Issues","Review issues found during chapter reviews","Martin",0);
plenary_item("Other", "","",0);
plenary_item("", "Proposals to introduce assertions","Bill",0);
plenary_item("", "FT WG","Wesley",0);
plenary_item("General business","","",0);
plenary_item("", "Future of MPI beyond 3.1","",0);
plenary_item("", "Policy on removing stale rationals","",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>

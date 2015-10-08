<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, June 14, 2010");
agenda_item(" 1:00pm -  3:00pm", "Hybrid working group");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  4:00pm", "Plenary session - report back on data piggybacking");
agenda_item(" 4:00pm -  5:00pm", "Plenary session - report back on nonblocking dynamic process control");
agenda_item(" 5:00pm -  7:00pm", "RMA Working group");
agenda_day_end();

agenda_day_start("Tue, June 15, 2010");
agenda_item(" 9:00am - 11:00am", "Fault Tolerance working group");
agenda_item(" 9:00am - 11:00am", "RMA working group");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "Plenary session - Tools working group ");
agenda_item("12:00pm -  1:00pm", "Backwards Compatibility Plenary (working lunch)");
agenda_item(" 1:00pm -  2:00pm", "Plenary - Formal reading of MPI-3 nonblocking collectives operations");
agenda_item(" 2:00pm -  4:00pm", "RMA working group");
agenda_item(" 4:00pm -  4:15pm", "Break");
#agenda_item(" 4:15pm -  7:00pm", "Fortran working group");
#agenda_item(" 4:15pm -  7:00pm", "Hybrid working group");
agenda_day_end();

agenda_day_start("Wed, June 16, 2010");
agenda_item(" 9:00am - 10:00am", "Persistence working group");
agenda_item("10:00am - 11:30am", "RMA working group - refreshments provided");
agenda_item("11:30am - 12:00pm", "Wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

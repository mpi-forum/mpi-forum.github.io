<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Mon, March 8, 2010");
agenda_item(" 1:00pm -  4:00pm", "RMA working Group");
agenda_item(" 3:00pm -  3:15pm", "Break");
agenda_item(" 3:15pm -  5:00pm", "RMA working Group");
agenda_item(" 5:00pm -  7:00pm", "Hybrid Working Group");
agenda_day_end();

agenda_day_start("Tue, March 9, 2010");
agenda_item(" 8:00am - 11:00am", "Fault Tolerance working Group");
agenda_item(" 8:00am - 11:00am", "Tools working group");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "Tools working group");
agenda_item("12:00pm -  2:00pm", "Backwards Compatibility Plenary (working lunch)");
agenda_item(" 2:00pm -  4:00pm", "Tools - Plenary session");
agenda_item(" 4:00pm -  4:15pm", "Break");
agenda_item(" 4:15pm -  7:00pm", "Fortran working Group");
agenda_item(" 4:15pm -  7:00pm", "RMA working group");
agenda_day_end();

agenda_day_start("Wed, March 10, 2010");
agenda_item(" 8:00pm - 10:30pm", "Tools Working Group");
agenda_item("10:30am - 11:30am", "Collectives Working Group");
agenda_item("11:30am - 12:00pm", "Wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

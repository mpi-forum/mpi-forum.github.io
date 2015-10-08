<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Tue, January 19, 2010");
agenda_item(" 1:00pm -  3:00pm", "MPI Survey preliminary results");
agenda_item(" 3:00pm -  5:00pm", "MPI-3 logisticla minutia");
agenda_item(" 5:30pm -  9:00pm", "Fault Tolerance Working Group");
agenda_day_end();

agenda_day_start("Wed, January 20, 2010");
agenda_item(" 8:00pm - 11:00am", "Torsten's Working Group");
agenda_item("11:00am - 11:15am", "Break");
agenda_item("11:15am - 12:00pm", "RMA Working Group");
agenda_item("12:00pm -  1:00pm", "Working Lunch (RMA Working Group)");
agenda_item(" 1:00am -  2:00pm", "RMA working group");
agenda_item(" 2:00pm -  2:15pm", "Break ");
agenda_item(" 2:15pm -  3:15pm", "Tools Plenary");
agenda_item(" 3:15pm -  5:30pm", "Tools Working Group");
agenda_item(" 5:30pm -  7:00pm", "Hybrid Working Group");
agenda_day_end();

agenda_day_start("Thur, January 21, 2010");
agenda_item(" 9:00am - 11:30am", "Backwards Compatibility Plenary");
agenda_item("11:30am - 12:00pm", "Wrap up \n");
agenda_day_end();

include_once("$topdir/include/footer.php");

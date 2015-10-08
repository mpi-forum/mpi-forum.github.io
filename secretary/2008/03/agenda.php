<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of March 10, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, March 10 2008");
agenda_item("1:00pm - 1:45pm", "Reports from the working groups");
agenda_item("1:45pm - 2:00pm", "Items from the floor");
agenda_item("2:00pm - 3:00pm", "MPI 2.1 - Ballot 4 proposals - official reading");
agenda_item("3:00pm - 3:15pm", "<strong>Break</strong>");
agenda_item("3:15pm - 5:15pm", "MPI 2.1 - Ballot 4 proposals - continued");
agenda_item("5:15pm - 5:30pm", "Ballot 3 preparation of First official vote");
agenda_item("5:30pm - 7:00pm", "<strong>Break for Dinner</strong>");
agenda_item("7:00pm - 9:00pm", "MPI 3.0 ABI working Group");

agenda_day_start("Tuesday, March 11 2008");
agenda_item("9:00am - 9:30am", "MPI 2.1 - Ballot 4: Straw vote");
agenda_item("9:30am - 10:00am", "MPI 2.1 - Ballot 3: First official vote");
agenda_item("10:00am - 10:15am", "<strong>Break</strong>");
agenda_item("10:15am - 12:15pm", "MPI 3.0 Fault tolerance Working Group<br>MPI 3.0 Fortran Bindings");
agenda_item("12:15pm - 1:30pm", "<strong>Break for lunch (on your own)</strong>");
agenda_item("1:30pm - 3:00pm", "MPI 2.1 combined document review");
agenda_item("3:00pm - 3:15pm", "<strong>Break</strong>");
agenda_item("3:15pm - 3:45pm", "MPI 1.3 Review");
agenda_item("3:45pm - 5:45pm", "MPI 3.0 Remote Memory Access Working Group<br>
MPI 3.0 Point-to-Point working group (const, send buffer access)");
agenda_item("5:45pm - 7:15pm", "MPI 3.0 Generalized Request Working Group<br>
MPI 3.0 Sub-Setting working group");

agenda_day_start("Wednesday, March 12 2008");
agenda_item("9:00am - 11:00am", "MPI 3.0 Collective Operations Working Group");
agenda_item("11:00am - 11:30am", "MPI 2.1 follow up");
agenda_item("11:30am - 12:00pm", "Wrap up");

agenda_day_end();

include_once("$topdir/include/footer.php");

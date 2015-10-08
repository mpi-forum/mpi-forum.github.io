<?
$short_desc = "Agenda";
$long_desc = "Agenda (as of January 1, 2008)";
$file = "agenda.php";
include_once("subpage.php");

agenda_day_start("Monday, January 14 2008");
agenda_item("1:00pm - 2:00pm", "Welcome, overall introduction (Rich)
<ul>
<li> Introductions</li>
<li> Scope of the effort</li>
<li> Voting rules</li>
<li> Committee rules</li>
</ul>");
agenda_item("2:00pm - 2:15pm", "Items for the floor (Rich)");
agenda_item("2:15pm - 3:15pm", "MPI 2.1 Introduction (Rolf)");
agenda_item("3:15pm - 3:30pm", "<Strong>Break</Strong>");
agenda_item("3:30pm - 5:00pm", "Ballot 3 (Rolf)");
agenda_item("5:00pm - 6:30pm", "<strong>Break for dinner (in airport area)</strong>");
agenda_item("6:30pm - 8:00pm", "MPI 2.2 Introduction (Bill)");
agenda_item("8:00pm - 8:15pm", "MPI 2.2 committee signup");

agenda_day_start("Tuesday, January 15 2008");
agenda_item("9:00am - 9:30am", "Discussion and straw vote on ballot #3 (Rolf)");
agenda_item("9:30am - 11:00am", "MPI 2.2 committee 1 and 2 meeting (Question: Bill, how
do you want to handle this ? - can you fill in details here ?)");

agenda_item("11:00am - 11:15am", "<Strong>Break</Strong>");
agenda_item("11:15am - 11:50am", "Introduction to MPI 3.0 (Rich)");
agenda_item("11:50am - 12:00pm", "Overview of Fault Tolerance committee (Rich)");
agenda_item("12:00pm - 12:10pm", "Overview of Generalized Requests committee ()");
agenda_item("12:10pm - 12:20pm", "Overview of Non-Blocking Collectives committee (Andrew)");
agenda_item("12:20pm - 12:30pm", "Overview of One-Sided Communications committee
(Bill/Rajeev)");
agenda_item("12:30pm - 1:30pm", "<strong>Lunch (3.0 committee signup)</strong>");
agenda_item("1:30pm - 3:00pm", "Fault Tolerance committee meeting (Rich)");
agenda_item("3:00pm - 3:15pm", "<Strong>Break</Strong>");
agenda_item("3:15pm - 4:45pm", "One-Sided Communications committee meeting (Bill/Rajeev)");
agenda_item("4:45pm - 8:00pm", "<strong>Dinner (downtown ?)</strong>");
agenda_item("8:00pm -10:00pm", "MPI 2.2 committee meetings (Bill)
<ul>
<li>                  Generalized Requests committee meeting ()</li>
<li>                  Non-Blocking Collectives committee meeting (Andrew)</li>
</ul>");


agenda_day_start("Wednesday, January 16 2008");
agenda_item("9:00am - 10:30am ", "First reading of MPI 2.1 Ballot #3 (Rolf)");
agenda_item("10:30am - 11:50am", "Report Back from Committees:
<ul>
<li>                    MPI 2.1 (Rolf)
<li>                    MPI 2.2 (Bill)
<li>                    Fault Tolerance (Rich)
<li>                    Generalized Requests ()
<li>                    Non-Blocking Collectives (Andrew)
<li>                    One-Sided Communications (Bill/Rajeev)
</ul>");
agenda_item("11:50am - 12:00pm", "Wrap up and adjourn (Rich)");

agenda_day_end();

include_once("$topdir/include/footer.php");

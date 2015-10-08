<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, March 3, 2014 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "FT WG");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "FT WG");
agenda_day_end();

agenda_day_start("Tuesday, March 4, 2014 - Working Groups and Plenary");
agenda_item(" 9:00am - 10:00am", "Tools WG");
agenda_item(" 9:00am - 10:00am", "RMA WG");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Tools WG");
agenda_item(" 10:30am - 12:00pm", "RMA WG");
agenda_item(" 12:00pm -  1:00pm", "Lunch break - switch to plenary");
agenda_item(" 1:00pm - 1:15pm", "Working Group Updates (Working group leads)");
agenda_item(" 1:15pm - 1:45pm", "Readings from I/O WG (Tickets: ".ticket(273).")");
agenda_item(" 1:45pm - 2:00pm", "Readings from Tools WG (Errata tickets: ".ticket(405).", ".ticket(406).")");
agenda_item(" 2:00pm - 3:00pm", "Readings from Hybrid/RMA WG (Tickets: ".ticket(349).", ".ticket(402).", ".ticket(404).", ".ticket(369).", ".ticket(414).")");
agenda_item(" 3:00pm - 3:30pm", "Break - switch to plenary");
agenda_item(" 3:30pm - 5:30pm", "Readings from Hybrid WG (Tickets: ".ticket(357).", ".ticket(380).", ".ticket(411).")");
agenda_day_end();

agenda_day_start("Wednesday, March 5, 2014 - Plenary");
agenda_item("  9:00am -  9:30am", "Readings from Fortran/Language Binding WG (Tickets: ".ticket(408).", ".ticket(409).")");
agenda_item("  9:30am - 10:30am", "Background/Discussion on current FT proposal (Wesley)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Discussions on FT proposal feedback and alternatives (Kathryn and Todd)");
agenda_item(" 12:00pm -  1:00pm", "Lunch break");
agenda_item("  1:00pm -  3:00pm", "Reading from FT WG (Ticket: ".ticket(323).")");
agenda_item("  3:00pm -  3:30pm", "Break");
agenda_item("  3:30pm -  5:30pm", "Reading from FT WG (Ticket: ".ticket(323).")");
agenda_item("  5:30pm -  6:00pm", "Break");
agenda_item("  6:00pm -  9:00pm", "Dinner at <a href=\"http://www.bananaleaf-usa.com/\">Banana Leaf</a> (optional, pay on your own)");
agenda_day_end();

agenda_day_start("Thursday, March 6, 2014 - Plenary");
agenda_item("  9:00am -  9:30am", "Updates to tickets as neded");
agenda_item("  9:30am - 10:00am", "Errata Vote:".ticket(405).",".ticket(406));
agenda_item("                  ", "First Vote:".ticket(400));
agenda_item("                  ", "Second Vote:".ticket(377).",".ticket(378));
agenda_item("                  ", "Logo Vote: proposals see below");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Final decision on/procedures for MPI 3.1, Discussion on MPI 4.0");
agenda_item(" 12:00pm           ", "Close");
agenda_day_end();

?>

<h2> Logo Finalists </h2>

<h3>Logo Group 1</h3>

<p>
<img src=l1-01.png width=250>
<img src=l1-02.png width=250>
<img src=l1-03.png width=250>
</p>

<p>
Comments:
<ul>
<li>Three interleaved parallelograms stands for parallel data movement
<li>Blue shows stability and trustworthiness
<li>Three different color depths coming into harmony means different opinions comes into a consensus; the color change also means continuously improvement on the standard
</ul>
</p>

<h3>Logo Group 2</h3>

<p>
<img src=l2-01.png width=250>
<img src=l2-02.png width=250>
<img src=l2-03.png width=250>
</p>

<p>
<img src=l2-04.png width=250>
<img src=l2-05.png width=250>
<img src=l2-06.png width=250>
</p>

<p>
<img src=l2-07.png width=250>
<img src=l2-08.png width=250>
<img src=l2-09.png width=250>
</p>

<p>
<img src=l2-10.png width=250>
<img src=l2-11.png width=250>
<img src=l2-12.png width=250>
</p>

<h3>Logo Group 3</h3>

<p>
<img src=l3-01.png width=500>
</p>

<?
include_once("$topdir/include/footer.php");
?>

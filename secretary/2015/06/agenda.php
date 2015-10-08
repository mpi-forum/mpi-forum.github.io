<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, June 1, 2015 - Plenary");
agenda_item(" 2:00pm -   3:30pm", "Discussion on Procedures Document (see below)");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "Discussion on Changes to Release Candidate Standard (see below)");
agenda_day_end();

agenda_day_start("Tuesday, June 2, 2015 - Plenary and Working Groups");
agenda_item(" 9:00am - 9:30am", "Rereading of changes to Procedures Document");
agenda_item(" 9:30am - 10:00am", "Rereading of changes to Release Candidate Standard");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Plenary");
agenda_item(" 12:00pm -  1:00pm", "Lunch");
agenda_item(" 1:00pm - 2:30pm", "Hybrid WG");
agenda_item(" 1:00pm -   2:30pm", "Persistence WG");
agenda_item(" 2:30pm -   3:00pm", "Break");
agenda_item(" 3:00pm - 5:00pm", "FT WG");
agenda_item(" 3:00pm -   5:00pm", "Persistence WG");
agenda_item(" 6:00pm (?) - ...", "Dinner (optional, pay on your own)");
agenda_day_end();

agenda_day_start("Wednesday, June 3, 2015 - Votes, Plenary and Working Groups");
agenda_item(" 9:00am - 9:15am", "Vote on Procedures Document");
agenda_item(" 9:15am - 10:00am", "Vote on Changes to Release Candidate");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Plenary");
agenda_item(" 12:00pm -  1:00pm", "Lunch");
agenda_item(" 1:00pm -   2:30pm", "Tools WG (P/QMPI2)");
agenda_item(" 1:00pm -   2:30pm", "RMA WG");
agenda_item(" 2:30pm -   3:00pm", "Break");
agenda_item(" 3:00pm -   5:00pm", "Tools WG (P/QMPI2)");
agenda_item(" 3:00pm - 5:00pm", "RMA WG");
agenda_day_end();

agenda_day_start("Thursday, June 4, 2015 - Votes and Plenary");
agenda_item(" 9:00am - 9:15am", "Vote on MPI 3.1");
agenda_item(" 9:15am - 10:00am", "Other Votes");
agenda_item(" 10:00am - 10:30am", "Break");
agenda_item(" 10:30am - 12:00pm", "Discussion on MPI 4.0 and Beyond + Document Management");
agenda_day_end();

agenda_plenary_start();
plenary_item("Reading","466: Persistent Collective Operations for MPI 4.0","Tony",0);
plenary_item("Reading","324: Clarify MPI_ERRORS_ARE_FATAL scope of abort","Wesley",1);
plenary_item("Discussion","476: Allow Application Behavior Hints in Info Keys","Dan",0);
plenary_item("Discussion","Issues found during Japanese Translation","Atsushi",1);
agenda_plenary_end();

agenda_docs_start();
docs_item("Rules","Proposal for Revised Rules (changes in red)","procedures-2015-06-proposal.pdf","","","Martin",1);
docs_item("Rules","Proposal for Revised Rules (including changes from meeting)","procedures-2015-06-final-proposal.pdf","","","FINAL - TO BE VOTED ON",1);

docs_item("Standard","Final Release Candidate","mpi31-frc.pdf",
    "https://gist.github.com/jsquyres/ab8afbe726291719160a", "",
    "Bill",1);
docs_item("Standard","Final Release Candidate (including changes from meeting)","mpi31-frc-final.pdf",
    "https://gist.github.com/jsquyres/ab8afbe726291719160a", "",
    "FINAL - TO BE VOTED ON",1);

docs_item("Chapter","Changes to RMA Chapter","one-side-2.pdf","https://gist.github.com/jsquyres/e0e608fe4521b4f62f1f","","Bill",1);
docs_item("Chapter","Changes to Tools Chapter (with changes highligthed)","tools-chapter-31.pdf","","","Kathryn",1);
agenda_docs_end();

include_once("$topdir/include/footer.php");
?>

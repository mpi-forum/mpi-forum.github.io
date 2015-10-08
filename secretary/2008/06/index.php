<?
include_once("top-nav.php");

$title = "MPI Forum meeting: June 2008";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

// Location

meeting_header("June 30 - July 2, 2008", 
               "Sun Facility, Menlo Park, CA, USA");

function item($desc, $file) {
    print("<li> <a href=\"$file\">$desc</a></li>\n");
}

print("<ul>\n");
item("Meeting agenda", "agenda.php");
item("Attendance list", "attendance.php");
item("Slides that were presented", "slides.php");
item("Votes from the meeting", "votes.php");
item("Other notes from the meeting", "notes.php");
print("</ul>\n\n");

include_once("$topdir/include/footer.php");

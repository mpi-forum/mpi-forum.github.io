<?
include_once("top-nav.php");

$title = "MPI Forum meeting: February 2009";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

// Location

meeting_header("February 9 - 11, 2009", 
               "Cisco Systems, San Jose, CA, USA");

function item($desc, $file) {
    if (file_exists($file)) {
        print("<li> <a href=\"$file\">$desc</a></li>\n");
    }
}

print("<ul>\n");
item("Meeting agenda", "agenda.php");
item("Attendance list", "attendance.php");
item("Slides that were presented", "slides.php");
item("Votes from the meeting", "votes.php");
item("Other notes from the meeting", "notes.php");
print("</ul>\n\n");

include_once("$topdir/include/footer.php");

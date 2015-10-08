<?
include_once("top-nav.php");

$title = "MPI Forum meeting: Dec 2013";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

// Location

meeting_header("December 9-12, 2013", 
               "Chicago, IL, USA");

function item($desc, $file) {
    if (file_exists($file)) {
        print("<li> <a href=\"$file\">$desc</a></li>\n");
    }
}

// Rich -- please do not delete the individual item()'s -- they are
// smart enough to not display when the corresponding files are not
// present.
print("<ul>\n");
item("Meeting agenda", "agenda.php");
item("Attendance list", "attendance.php");
item("Slides that were presented", "slides.php");
item("Votes from the meeting", "votes.php");
item("Other notes from the meeting", "notes.php");
print("</ul>\n\n");

include_once("$topdir/include/footer.php");

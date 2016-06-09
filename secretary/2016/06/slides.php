<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "persistengeWG-07jun16";
$slides[] = "sessions-wg-2016-06-07";
$slides[] = "2016-06-08-Catastrophic-Errors";
$slides[] = "2016-06-08-issues-1-3-reading";
$slides[] = "2016-06-09 Error Handler Plenary";
$slides[] = "2016-06-forum-general";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

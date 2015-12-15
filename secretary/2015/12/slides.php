<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2015-12-09 GitHub Recap";
$slides[] = "Persistence-Update-09dec15a";
$slides[] = "2015-12-09 Catastrophic Errors";
$slides[] = "2015-12-09-issues-1-3-reading";
$slides[] = "comm-assert-update-12-2015";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

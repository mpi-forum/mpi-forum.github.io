<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2015-12-09 GitHub Recap";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "ft-new-proposal";
$slides[] = "2014-03-mpi-forum";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

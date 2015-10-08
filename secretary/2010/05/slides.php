<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "hoefler-may10-assertions";
$slides[] = "hoefler-may10-collwg";
$slides[] = "mpi3-bwcompat";
$slides[] = "BWCompGuidelines";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi31-hybrid";
$slides[] = "mpi31-rma";
$slides[] = "persistent-presentation-dec12";
$slides[] = "hoefler-collwg-dec-12";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

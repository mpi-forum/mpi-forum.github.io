<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "high-level-languages-2up";
$slides[] = "hoefler-mpi-forum-coll_wg-oct-slides";
$slides[] = "RMA-Type-Register";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

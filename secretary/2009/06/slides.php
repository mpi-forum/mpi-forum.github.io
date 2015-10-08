<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "hoefler-active_messages";
$slides[] = "hoefler-collwg-jun09";
$slides[] = "hybrid_wg.2";
$slides[] = "Treating-threads-as-MPI-processes";
$slides[] = "mpi-menlo-park-vote-wrapup";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

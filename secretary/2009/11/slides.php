<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "RMA_interface_analysis";
$slides[] = "2009-11-11-hybrid-intro";
$slides[] = "2009-11-11-endpoint";
$slides[] = "hoefler-collwg-nov09";
$slides[] = "hoefler-onesided";
$slides[] = "MPI_Forum_SC09_BOF-1up";
$slides[] = "MPI_Forum_SC09_BOF-2up";
$slides[] = "2009-11-mpi-forum-tools";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

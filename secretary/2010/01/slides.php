<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi3-bwcompat";
$slides[] = "tools-proposals";
$slides[] = "mpi3_hybrid_extension";
$slides[] = "2010-01-mpiforum-mpit";
$slides[] = "hoefler_mpi-3_onesided";
$slides[] = "hoefler_mpi-3_sparse-collectives";
$slides[] = "RMA-put-January-2010";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

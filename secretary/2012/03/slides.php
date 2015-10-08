<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "MPI-313-10-311";
$slides[] = "mpi-m-problems";
$slides[] = "ft-proposal";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "hoefler_coll_wg_may12";
$slides[] = "MPI-Adapter-MPI-forum-2012-05";
$slides[] = "mpi-forum-may-2012-fujitsu";
$slides[] = "03_Sumimoto";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2008-12-mpiforum-tool";
$slides[] = "send-buffer-access-considered-harmful";
$slides[] = "hybrid_wg";
$slides[] = "Treating_threads_as_MPI_processes";


show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

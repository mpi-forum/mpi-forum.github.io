<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi3-tools-wg";
$slides[] = "tvtech-message-queue-for-mpi-forum-20090403";
$slides[] = "hoefler-graphtopo";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

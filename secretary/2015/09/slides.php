<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "MPC-MPI-FORUM";
$slides[] = "2015-09-24-tickets-324-477";
$slides[] = "2015-09-26-ulfm";
$slides[] = "MPI Forum SVN-Git";
$slides[] = "mpi31-report-japanese-translation-with-notes";
$slides[] = "RMA Notified Access Implementation Discussion";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

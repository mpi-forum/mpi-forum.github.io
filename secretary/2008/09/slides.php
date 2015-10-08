<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "MPI-Forum-ABI-WG-session";
$slides[] = "mpi3-fortran-sep-2008";
$slides[] = "mpi_21_at_MPIforum_2008-09_overview";
$slides[] = "tools-and-misc-wg";
$slides[] = "FT_error_notification";
$slides[] = "General_Coll_Forum";
$slides[] = "MPI-2-2-Sept-03-08";
$slides[] = "hoefler-mpi-forum-coll_wg-sept-slides";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

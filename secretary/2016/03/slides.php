<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi-sessions";
$slides[] = "2016-03-02-ULFM-in-Fenix-plenary";
$slides[] = "2016-03-02-Catastrophic-Errors";
$slides[] = "2016-03-02-issues-1-3-reading";
$slides[] = "Pitch - Allocating Receive and Freeing Send";
$slides[] = "fortran-datatypes-in-mpih";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

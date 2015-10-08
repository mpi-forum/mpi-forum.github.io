<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2010-09-err_cannot_continue";
$slides[] = "brightwell-mpi-shared-memory";
$slides[] = "hoefler-collwg";
$slides[] = "hoefler-gropp-onesided";
$slides[] = "hoefler-snir-hybrid";
$slides[] = "siebert-scalirrcol";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

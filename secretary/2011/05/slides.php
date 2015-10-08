<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "hybrid-wg";
$slides[] = "persistence_doc_09may11-revised-11may11";
$slides[] = "rma-overview-5-11-4up";
$slides[] = "Fortran-tickets";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

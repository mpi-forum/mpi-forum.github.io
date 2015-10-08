<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "EP Plenary -- 05-2014";
$slides[] = "mpi-forum-june-2014-large-count-plenary";
$slides[] = "MPI_Stream feedback request 2014_06";
$slides[] = "Hybrid WG";
$slides[] = "persistent_doc_02jun14.pdf";
$slides[] = "persistent_presentation_02jun14";
$slides[] = "FT-june-progress-update";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

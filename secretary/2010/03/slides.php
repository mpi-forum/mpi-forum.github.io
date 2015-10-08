<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi3-survey-march-2010-mpi-forum";
$slides[] = "RMA-WG-Status-March-2010";
$slides[] = "hoefler_mpi-3_onesided_mar10";
$slides[] = "mpi_hybrid";
$slides[] = "sparse-coll-via-multisends";
$slides[] = "Backward Compatibility WG";
$slides[] = "mpi_hybrid";
$slides[] = "rma";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

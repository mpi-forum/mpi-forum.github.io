<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2011-07-19-mpiforum-hybridwg";
$slides[] = "ref-counted-init-finalize";
$slides[] = "NB_CIO";
$slides[] = "allocate_shared_slides";
$slides[] = "MPI-3.0-Fortran-overview-final-Jul2011meeting";
$slides[] = "2011-07-RTS";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

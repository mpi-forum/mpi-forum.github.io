<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "MPI_Count.2010.12-2up";
$slides[] = "PersistenceWG_07dec10-2up";
$slides[] = "hoefler_mpi_assert";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

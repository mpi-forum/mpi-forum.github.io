<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "Hursey-NB-Dynamics";
$slides[] = "Large Counts in MPI";
$slides[] = "mpi3_helperthreads";
$slides[] = "MPIR Process Acquisition Interface 2010-06-11";
$slides[] = "Persistence1_16jun10";
$slides[] = "piggyback";
$slides[] = "tools-mpir";
$slides[] = "mpi3_rma_win_asserts";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

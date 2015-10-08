<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "scal_colls";
$slides[] = "MPI-3.0-Fortran-overview-Sep2011meeting";
$slides[] = "mpi-report-F2008-2011-09-08-changeonlyplustickets";
$slides[] = "MPI_Comm_create_group-proposal-ticket-286";
$slides[] = "MPI hybrid slides";
$slides[] = "Glossary-mpi-viewgraphs";
$slides[] = "rolfs-santorini-museum-tips";
$slides[] = "Resiliency-in-massively-parallel-quantum-simulations";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

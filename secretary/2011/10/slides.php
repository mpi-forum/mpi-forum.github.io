<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "C++ Bindings";
$slides[] = "christof_MPI_FORUM_mpitimpl";
$slides[] = "Fortran-intro";
$slides[] = "MPI_Type_create_hindexed_block";
$slides[] = "Nonblocking Collective IO";
$slides[] = "Nonblocking File Manipulation Routines";
$slides[] = "2011-10-RTS";
$slides[] = "ticket_286_oct_2011_presentation";
$slides[] = "MPI3-Fortran";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "endpoints";
$slides[] = "MPI30-tickets-2012-01_not-ready";
$slides[] = "MPI_Forum_Overview_MPI-3.0_Jan2012";
$slides[] = "RTS-Overview-2012-01";
$slides[] = "ticket_286_jan_2012_presentation";
$slides[] = "ticket_286_jan_2012.2";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

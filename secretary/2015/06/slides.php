<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "mpi3.1-changes";
$slides[] = "rma-changes";
$slides[] = "2015-June-Atsushi";
$slides[] = "PersistenceReading1-MPI-Forum-2jun15_v3";
$slides[] = "Ticket #324 Reading";
$slides[] = "2015-06-forum-general-v2";
$slides[] = "MPI Communicator Assertions Straw Man-1";
$slides[] = "Persistent Collectives";
$slides[] = "MPI-3.1_final-vote_MPI-Forum-2015.06.01-04-Chicago_with-names";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

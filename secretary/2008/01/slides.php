<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "rlgraham-Jan08_intro";
$slides[] = "rolf-mpi_21_at_MPIforum_2008-01";
$slides[] = "gropp-MPI2-2";
$slides[] = "gropp-BallotItem5";
$slides[] = "jsquyres";

$slides[] = "bosilca-committee-Generalized-Requests-final";
$slides[] = "gropp-MPI3-RMA";
$slides[] = "lumsdaine-nbc";
$slides[] = "rlgraham-ft_full_intro";
$slides[] = "hoefler-europvm07_slides";
$slides[] = "hoefler-mpi-forum-coll_wg-slides";

$slides[] = "gropp-summary-1-16-08";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

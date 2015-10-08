<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2013-06-06-Function-Classification-MPI-Forum";
$slides[] = "2013-06-06-Nonblocking-Operations";
$slides[] = "Message-Queue-Dumping";
$slides[] = "MPI_Keyval";
$slides[] = "MPIforum130613-oldtickets";
$slides[] = "ticket_349";
$slides[] = "persistent-presentation-jun13";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

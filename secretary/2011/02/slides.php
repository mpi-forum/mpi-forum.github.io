<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "hoefler-scal_colls";
$slides[] = "PersistenceWG_08feb11";
$slides[] = "rma-overview-2-11a-2up";
$slides[] = "2011-02-mpiforum-mpit";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "jsquyres-init-finalize-hybrid-lessons-learned";
$slides[] = "endpoints-plenary";
$slides[] = "ftwg_plenary_part1";
$slides[] = "ULFM-MPI-Dec13FORUM";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

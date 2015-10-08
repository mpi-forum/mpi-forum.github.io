<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "jsquyres-arecv";
$slides[] = "jsquyres-attributes-revamp";
$slides[] = "jsquyres-init-finalize-issues-for-forum";
$slides[] = "2013-09-MPI-Forum-ULFM";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

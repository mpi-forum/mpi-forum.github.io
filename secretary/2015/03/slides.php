<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2015-03-forum-votingrules-take2";
$slides[] = "MPI Communicator Assertions Straw Man";
$slides[] = "20150302-MPI Forum march-ULFM";
$slides[] = "2015-03-05 FTWG Other Tickets";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

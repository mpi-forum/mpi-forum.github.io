<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "2014-12-mpi-forum";
$slides[] = "2014-12-09-mpiforum-independentcomm";
$slides[] = "2014-12-10 ULFM Update";
$slides[] = "channel-p2pwg-mpiforum-dec2014";
$slides[] = "deprecate-mpifh";
$slides[] = "ticket-456-overview";
$slides[] = "MPI-Endpoints-in-McMPI";
$slides[] = "exampi-sc14-bigmpi";
$slides[] = "Hybrid-Plenary--EP-Lib";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

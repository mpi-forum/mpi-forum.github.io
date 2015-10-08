<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/09/$file");

$head_title = "MPI Forum meeting Sept'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("Sept 3-5, 2008", 
               "University College Dublin, Dublin, Ireland");

<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/10/$file");

$head_title = "MPI Forum meeting Oct'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("Oct 20 - 22, 2008", 
               "Marriott O'Hare, Chicago, IL, USA");

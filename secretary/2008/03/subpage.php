<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/03/$file");

$head_title = "MPI Forum meeting Mar'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("March 10-12, 2008", 
               "Chicago Airport Marriott, Chicago, IL, USA");

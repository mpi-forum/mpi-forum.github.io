<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/06/$file");

$head_title = "MPI Forum meeting Jun'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("June 30 - July 2, 2008", 
               "Sun Facility, Menlo Park, CA, USA");

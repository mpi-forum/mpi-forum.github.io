<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/04/$file");

$head_title = "MPI Forum meeting Apr'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("April 28-30, 2008", 
               "Microsoft Meeting Facility, Chicago, IL, USA");

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <META name="description" content="MPI Forum Meetings">
  <META name="keywords" content="Message Passing Interface, MPI, parallel computing, parallel, distributed", > 
  <LINK REL="shortcut icon" HREF="<?php print($topurl); ?>/favicon.ico" />
<?php
include_once("css.php");

if (isset($mpif_section)) {
    print("  <META name=\"mpi-forum\" content=\"$mpif_section\">\n");
}
if (isset($head_title)) {
    $new_title = strip_tags($head_title);
} else if (isset($title)) {
    $new_title = strip_tags($title);
} else {
    $new_title = "MPI Forum Meetings";
}
print("  <TITLE>$new_title</TITLE>\n<HEAD>\n");

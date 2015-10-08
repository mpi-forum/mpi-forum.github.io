<?
$topdir = "../..";
include_once("top-nav.php");

$title = "Working Group Teleconferences: February 2008";
include_once("$topdir/include/header.php");

function teleconf($name, $url) {
    print("<li> <a href=\"$url\">$name</a></li>\n\n");
}

print ("<ul>\n\n");
teleconf("Collectives working group", "collectives_wg.php");
teleconf("Fault Tolerance working group", "ft_wg.php");
teleconf("Fortran working group", "fortran_wg.php");
print("</ul>\n\n");

include_once("$topdir/include/footer.php");

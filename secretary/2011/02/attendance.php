<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

$nl = "National Laboratory";
$arg = "Argonne $nl";
$llnl = "Lawrence Livermore $nl";
$lanl = "Los Alamos $nl";
$lbnl = "Lawrence Berkeley $nl";
$ornl = "Oak Ridge $nl";
$snl = "Sandia $nl";
$pnnl = "Pacific Northwest $nl";

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Devendar Bureddy";
$o[] = "OSU";

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Terry Dontje";
$o[] = "Oracle America, Inc.";

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "William Gropp";
$o[] = "UIUC/NCSA";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Sayantan Sur";
$o[] = "The Ohio State U.";

$a[] = "Fabian Tillier";
$o[] = "Microsoft";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Gilad Shainer";
$o[] = "Mellanox Technologies";

#$a[] = "James Dinan";
#$o[] = $arg;

#$a[] = "Jeff Hammond";
#$o[] = $arg;

#$a[] = "Ron Brightwell";
#$o[] = $snl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

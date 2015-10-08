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

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Oracle America, Inc.";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Mohamed Chaarwai";
$o[] = "HDF Group";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Devendar, Bureddy";
$o[] = "The Ohio State U.";

$a[] = "Sreeram Potluri";
$o[] = "The Ohio State U.";

$a[] = "Eric Lantz";
$o[] = "Microsoft";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Scott McMillan";
$o[] = "Intel";

$a[] = "Douglas Miller";
$o[] = "IBM";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Aurelien Bouteiller";
$o[] = "U. Tennessee";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "George Carr";
$o[] = "NOAA";

$a[] = "Jeff Hammond";
$o[] = $arg;

$a[] = "Atsushi Hori";
$o[] = "Riken ACS";

$a[] = "Kathryn Mohor";
$o[] = $llnl;

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "David Solt";
$o[] = "HP";

attendance($a, $o);

include_once("$topdir/include/footer.php");

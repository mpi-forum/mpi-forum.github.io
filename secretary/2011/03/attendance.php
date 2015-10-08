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

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Oracle America, Inc.";

$a[] = "Brice Goglin";
$o[] = "INRIA";

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

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

$a[] = "Jay Lofstead";
$o[] = $snl;

$a[] = "Douglas Miller";
$o[] = "IBM";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

attendance($a, $o);

include_once("$topdir/include/footer.php");

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

$a[] = "George Bosilca";
$o[] = "U. Tennessee, Knoxville";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Devendar Bureddy";
$o[] = "Ohio State U.";

$a[] = "Arno Candel";
$o[] = "Skytree, Inc.";

$a[] = "Bronis de Supinksi";
$o[] = $llnl;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Oracle";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Krishna Kandalla";
$o[] = "Ohio State U.";

$a[] = "Alice Koniges";
$o[] = "Berkeley Lab / NERSC";

$a[] = "Quincey Koziol";
$o[] = "The HDF Group";

$a[] = "Doug Miller";
$o[] = "IBM";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Anthony Skjellum";
$o[] = "UAB";

$a[] = "Marc Snir";
$o[] = $arg;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Sayantan Sur";
$o[] = "Intel";

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Keith Underwood";
$o[] = "Intel";

attendance($a, $o);

include_once("$topdir/include/footer.php");

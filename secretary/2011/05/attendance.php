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

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Brice Goglin";
$o[] = "INRIA";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Amith Mamidala";
$o[] = "IBM";

$a[] = "Kathryn Mohor";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Shinji Sumumoto";
$o[] = "Fujitsu";

$a[] = "Fabian \"Godzilla\" Tillier";
$o[] = "Microsoft";

$a[] = "Keith Underwood";
$o[] = "Intel";

attendance($a, $o);

include_once("$topdir/include/footer.php");

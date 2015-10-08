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

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Torsten Hoefler";
$o[] = "U. Illinois";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Sadaf Alam";
$o[] = "CSCS";

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Bronis R. de Supinksi";
$o[] = $llnl;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Oracle";

$a[] = "Jeff Hammond";
$o[] = $arg;

$a[] = "Jennifer Herrett-Skjellum";
$o[] = "Run-Time Computing Solutions";

$a[] = "Josh Hursey";
$o[] = "$ornl";

$a[] = "Dries Kimpe";
$o[] = "U. Chicago";

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Sayantan Sur";
$o[] = "The Ohio State U.";

$a[] = "Fabian \"Count\" Tillier";
$o[] = "Microsoft";

attendance($a, $o);

include_once("$topdir/include/footer.php");

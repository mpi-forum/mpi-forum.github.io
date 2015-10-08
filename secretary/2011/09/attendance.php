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

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Atsushi Hori";
$o[] = "Riken AICS";

$a[] = "Marc-Andre Hermanns";
$o[] = "German Research School for Simulation Sciences GmbH";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Nusal Jan";
$o[] = "IBM";

$a[] = "Guillaume Mercier";
$o[] = "INRIA";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Sreeram Potluri";
$o[] = "Ohio State U.";

$a[] = "Howard Pritchard";
$o[] = "Cray Inc.";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Christian Siebert";
$o[] = "German Research School for Simulation Scienses GmbH";

$a[] = "Raffaele Giuseppe Solca";
$o[] = "ETH Zurich";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Alexander Supalov";
$o[] = "Intel";

attendance($a, $o);

include_once("$topdir/include/footer.php");

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

$a[] = "Aurelien Bouteiller";
$o[] = "U. Tennessee, Knoxville";

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Devendar Bureddy";
$o[] = "Ohio State U.";

$a[] = "Mohamad Chaarawi";
$o[] = "HDF Group";

$a[] = "Bronis de Supinksi";
$o[] = $llnl;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Oracle";

$a[] = "Brice Goglin";
$o[] = "INRIA";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Jeff Hammond";
$o[] = $arg;

$a[] = "Thomas Herault";
$o[] = "U. Tennessee";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Atsushi Hori";
$o[] = "Riken AICS";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Scott McMillan";
$o[] = "Intel";

$a[] = "Doug Miller";
$o[] = "IBM";

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Takeshi Nanri";
$o[] = "Kyushu U.";

$a[] = "Steve Oyanagi";
$o[] = "Cray, Inc.";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Raghunath Raja Chandrasekar";
$o[] = "Ohio State U.";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "UAB";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Marc Snir";
$o[] = $arg;

$a[] = "David Solt";
$o[] = "IBM";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Ahn T. Vo";
$o[] = "Microsoft";

attendance($a, $o);

include_once("$topdir/include/footer.php");

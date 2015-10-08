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

$a[] = "George Bosilca";
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

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Jeff Hammond";
$o[] = $arg;

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

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Kathryn Mohor";
$o[] = $llnl;

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "David Solt";
$o[] = "Platform";

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Sreeram Potluri";
$o[] = "Ohio State U.";

$a[] = "Marc Snir";
$o[] = $arg;

attendance($a, $o);

include_once("$topdir/include/footer.php");

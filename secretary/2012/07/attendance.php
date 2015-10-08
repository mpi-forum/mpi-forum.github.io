<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

$nl = "National Laboratory";
$arg = "Argonne $nl";
$anl = $arg;
$llnl = "Lawrence Livermore $nl";
$lanl = "Los Alamos $nl";
$lbnl = "Lawrence Berkeley $nl";
$ornl = "Oak Ridge $nl";
$snl = "Sandia $nl";
$pnnl = "Pacific Northwest $nl";

$a[] = "Pavan Balaji";
$o[] = $anl;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Purushotham Bangalore";
$o[] = "U. Alabama Birmingham";

$a[] = "Darius Buntinas";
$o[] = $anl;

$a[] = "Mohamad Chaarawi";
$o[] = "HDF Group";

$a[] = "James Dinan";
$o[] = $anl;

$a[] = "Terry Dontje";
$o[] = "Oracle";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Jeff Hammond";
$o[] = $anl;

$a[] = "Nathan Heljm";
$o[] = $lanl;

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Scott McMillan";
$o[] = "Intel";

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Sreeram Potluri";
$o[] = "Ohio State U.";

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Brian Smith";
$o[] = $ornl;

$a[] = "David Solt";
$o[] = "IBM";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumumoto";
$o[] = "Fujitsu";

$a[] = "Anh Vo";
$o[] = "Microsoft";

$a[] = "Bronis de Supinski";
$o[] = $llnl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

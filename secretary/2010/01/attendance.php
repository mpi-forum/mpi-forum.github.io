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

$a[] = "Purushotham Bangalore";
$o[] = "University of Alabama at Birmingham";

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Edgar Gabriel";
$o[] = "U. Houston";

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Jennifer Herrett-Skjellum";
$o[] = "RunTime Computing Solutions, LLC";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Josh Hursey";
$o[] = "Indianan U.";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Dieter Kranzlmueller";
$o[] = "LMU and LRZ Munic";

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Mark Snir";
$o[] = "U. Illinois";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu Laboratories";

$a[] = "Sayantan Sur";
$o[] = "Ohio State U.";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Keith Underwood";
$o[] = "Intel";

attendance($a, $o);

include_once("$topdir/include/footer.php");

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
$o[] = "U. Tennessee";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Jeff Hammond";
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

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Anthony Skjellum";
$o[] = "University of Alabama at Birmingham";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Mark Snir";
$o[] = "U. Illinois";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Hari Subramoni";
$o[] = "Ohio State U.";

$a[] = "Sayantan Sur";
$o[] = "Ohio State U.";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Vinod Tipparaju";
$o[] = $ornl;

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Rolf vande Vaart";
$o[] = "Oracle";

attendance($a, $o);

include_once("$topdir/include/footer.php");

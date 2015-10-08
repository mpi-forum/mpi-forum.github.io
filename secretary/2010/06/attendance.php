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

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Manjunath Gorentla Vankata";
$o[] = $ornl;

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

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Bin Jia";
$o[] = "IBM";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Kathrn Mohror";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "University of Alabama at Birmingham";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Mark Pagel";
$o[] = "Cray, Inc.";

$a[] = "Sayantan Sur";
$o[] = "Ohio State U.";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Rolf vande Vaart";
$o[] = "Oracle";

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Alice Koniges";
$o[] = $lbnl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

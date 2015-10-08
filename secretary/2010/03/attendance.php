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
$o[] = "U. Tennessee";

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Graham Fletcher";
$o[] = $arg;

$a[] = "Edgar Gabriel";
$o[] = "U. Houston";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Torsten Hoefler";
$o[] = "U. Illinois";

$a[] = "Josh Hursey";
$o[] = "Indianan U.";

$a[] = "Yutaka Ishikawa";
$o[] = "U. of Tokyo";

$a[] = "Hideyuki Jitsumoto";
$o[] = "Tokyo Institute of Technology";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Manojkumar Krishnan";
$o[] = $pnnl;

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. of Alabama at Birmingham";

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu Laboratories";

$a[] = "Sayantan Sur";
$o[] = "Ohio State U.";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Richard Treumann";
$o[] = "IBM";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Rolf vande Vaart";
$o[] = "Oracle";

$a[] = "Abhinav Vishnu";
$o[] = $pnnl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

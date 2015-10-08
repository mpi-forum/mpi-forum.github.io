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

$a[] = "Tatsuya Abe";
$o[] = "Riken AICS";

$a[] = "Tomoya Adachi";
$o[] = "Fujitsu";

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee, Knoxville";

$a[] = "Balazs Gerofi";
$o[] = "Riken AICS";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Jennifer Herrett-Skjellum";
$o[] = "RunTime Computing Solutions";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Atsushi Hori";
$o[] = "Riken AICS";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Takahiro Kawashima";
$o[] = "Fujitsu";

$a[] = "Scott McMillan";
$o[] = "Intel";

$a[] = "Guillaume Mercier";
$o[] = "INRIA";

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Takeshi Nanri";
$o[] = "Kyushu U.";

$a[] = "Swann Perarnau";
$o[] = "Riken AICS";

$a[] = "Kuninobu Sasaki";
$o[] = "Microsoft";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "UAB";

$a[] = "David Solt";
$o[] = "IBM";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Masamichi Takagi";
$o[] = "NEC Corp.";

$a[] = "Min Xie";
$o[] = "National U. of Defense Tech";

$a[] = "Enqiang Zhou";
$o[] = "National U. of Defense Tech";

attendance($a, $o);

include_once("$topdir/include/footer.php");

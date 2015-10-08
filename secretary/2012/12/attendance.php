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

$a[] = "Tony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Darius Buntinas";
$o[] = $anl;

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Jeff Hammond";
$o[] = $anl;

$a[] = "Nathan Heljm";
$o[] = $lanl;

$a[] = "Torsten Hoefler";
$o[] = "ETH Zurich";

$a[] = "Scott McMillan";
$o[] = "Intel";

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Krishna Kandalla";
$o[] = "Ohio State U.";

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "David Solt";
$o[] = "IBM";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Takahiro Kawashima";
$o[] = "Fujitsu";

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Alice Koniges";
$o[] = $lbnl;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Sayantan Sur";
$o[] = "Intel";

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Daniel Holmes";
$o[] = "EPCC";

$a[] = "Brice Goglin";
$o[] = "INRIA";

attendance($a, $o);

include_once("$topdir/include/footer.php");

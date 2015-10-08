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

$a[] = "Antonio Pena";
$o[] = $anl;

$a[] = "Jim Dinan";
$o[] = "Intel";

$a[] = "Ryan Grant";
$o[] = $snl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Balazs Gerofi";
$o[] = "University of Tokyo";

$a[] = "Daniel Holmes";
$o[] = "EPCC";

$a[] = "George Bosilca (not registered)";
$o[] = "INRIA";

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Michael Blocksome";
$o[] = "IBM";

$a[] = "Jerome Vienne";
$o[] = "TACC";

$a[] = "Amin Hassani";
$o[] = "U. Alabama Birmingham";

$a[] = "Krishna Kandalla";
$o[] = "Cray";

$a[] = "Satantan Sur";
$o[] = "Intel";

$a[] = "Qunciey Kozoil";
$o[] = "HDF";

$a[] = "Fabian Tillier";
$o[] = "Microsoft";

$a[] = "David Goodell";
$o[] = "Cisco";

$a[] = "Junchao Zhang";
$o[] = $anl;

$a[] = "Huiwei Lu";
$o[] = $anl;

$a[] = "Sreeram Porluri";
$o[] = "Ohio State University";

$a[] = "Pavan Balaji";
$o[] = $anl;

$a[] = "Wesley Bland";
$o[] = $anl;

$a[] = "Ken Raffenetti";
$o[] = $anl;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Kathryn Morhor";
$o[] = $llnl;

$a[] = "Raghunath Raja Chandrasekar";
$o[] = "Ohio State University";

$a[] = "Nathan Heljm";
$o[] = $lanl;

$a[] = "Alice Koniges";
$o[] = $lbnl;

$a[] = "Jeff Hammond";
$o[] = $anl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

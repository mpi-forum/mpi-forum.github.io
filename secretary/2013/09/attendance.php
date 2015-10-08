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

$a[] = "Alexander Supalov";
$o[] = "Intel";

$a[] = "Ryan Grant";
$o[] = $snl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Yuichi Tsujita";
$o[] = "Riken AICS";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Balazs Gerofi";
$o[] = "University of Tokyo";

$a[] = "Daniel Holmes";
$o[] = "EPCC";

$a[] = "Takeshi Nanri";
$o[] = "Kyushu University";

$a[] = "Torsten Hoefler";
$o[] = "ETH Zurich";

$a[] = "Bill Gropp";
$o[] = "NCSA/UIUC";

$a[] = "Guilaume Mercier";
$o[] = "INRIA";

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Thomas Francois";
$o[] = "IBM";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Atsushi Hori";
$o[] = "Riken ACS";

$a[] = "Masamichi Takagi";
$o[] = "NEC";

attendance($a, $o);

include_once("$topdir/include/footer.php");

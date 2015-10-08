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

$a[] = "James Dinan";
$o[] = $anl;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Tony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Mohamad Chaarawi";
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

$a[] = "Sayantan Sur";
$o[] = "Intel";

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Raghunath Raja Chandrasekar";
$o[] = "Ohio State U.";

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Charles Archer";
$o[] = "IBM";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Anh Vo";
$o[] = "Microsoft";

$a[] = "Alice Koniges";
$o[] = $lbnl;

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Daniel Holmes";
$o[] = "EPCC";

$a[] = "William Gropp";
$o[] = "NCSA/UIUC";

$a[] = "Wesley Bland";
$o[] = "U. Tennessee Knoxville";

$a[] = "Jerome Vienne";
$o[] = "Texas Advanced Computing Center";

$a[] = "Rajeev Thakur";
$o[] = $anl;

$a[] = "Takeshi Nanri";
$o[] = "Kyushu University";

attendance($a, $o);

include_once("$topdir/include/footer.php");

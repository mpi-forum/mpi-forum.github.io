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

$a[] = "Wesley Bland";
$o[] = $anl;

$a[] = "James Dinan";
$o[] = "Intel";

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Amin Hassani";
$o[] = "U. Alabama Birmingham";

$a[] = "Mohamad Chaarawi";
$o[] = "HDF Group";

$a[] = "David Goodell";
$o[] = "Cisco Systems, Inc.";

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

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Atsushi Hori";
$o[] = "Riken AICS";

$a[] = "Devendar Bureddy";
$o[] = "Ohio State U.";

$a[] = "Aurelien Bouteiller";
$o[] = "U. Tennessee";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Anh Vo";
$o[] = "Microsoft";

$a[] = "Christos Kavouklis";
$o[] = $lbnl;

$a[] = "Balazs Gerofi";
$o[] = "University of Tokyo";

$a[] = "Daniel Holmes";
$o[] = "EPCC";

$a[] = "Jerome Vienne";
$o[] = "Texas Advanced Computing Center";

$a[] = "Takeshi Nanri";
$o[] = "Kyushu University";

$a[] = "Kieta Teranishi";
$o[] = $snl;

$a[] = "Kento Sato";
$o[] = "Tokya Institute of Technology";

$a[] = "Craig Rasmussen";
$o[] = "U. Oregon";

$a[] = "Antonio Pena";
$o[] = $anl;

$a[] = "Torsten Hoefler";
$o[] = "ETH Zurich";

attendance($a, $o);

include_once("$topdir/include/footer.php");

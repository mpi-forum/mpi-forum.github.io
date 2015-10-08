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

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Purushotham Bangalore";
$o[] = "U. Alabama Birmingham";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Manjunath Gorentla Venkata";
$o[] = $ornl;

$a[] = "Rich Graham";
$o[] = "Mellanox";

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Nathan Heljm";
$o[] = $lanl;

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Alexander Supalov";
$o[] = "Intel";

$a[] = "Tomotake Nakamura";
$o[] = "Riken AICS";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Brian Smith";
$o[] = $ornl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumumoto";
$o[] = "Fujitsu";

$a[] = "Aurelien Bouteiller";
$o[] = "U. Tennessee Knoxville";

$a[] = "Takeshi Nanri";
$o[] = "Kyushu University";

$a[] = "Paddy Gillies";
$o[] = "AWE Plc";

$a[] = "Christian Siebert";
$o[] = "German Research School for Simultation Sciences";

$a[] = "Atsushi Hori";
$o[] = "Riken AICS";

$a[] = "George Bosilca";
$o[] = "INRIA";

attendance($a, $o);

include_once("$topdir/include/footer.php");

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

$a[] = "Puri Bangalore";
$o[] = "University of Alabama at Birmingham";

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Gabor Dozsa";
$o[] = "IBM";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Bill Gropp";
$o[] = $arg;

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Marc-Andre Hermanns";
$o[] = "Forschungszentrum Julich";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu Laboratories";

$a[] = "Alexander Supalov";
$o[] = "Intel Corporation";

$a[] = "Jesper Traff";
$o[] = "NEC Lbaoratories Europe";

attendance($a, $o);

include_once("$topdir/include/footer.php");

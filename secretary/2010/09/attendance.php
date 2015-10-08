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

$a[] = "Nysal Jan Kandarumadathil Amanulla";
$o[] = "IBM";

$a[] = "Purushotham Bangalore";
$o[] = "UAB";

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "David Mark";
$o[] = "Presidency College";

$a[] = "Brice Goglin";
$o[] = "INRIA";

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Marc-Andre Hermanns";
$o[] = "German Research School for Simulation Sciences";

$a[] = "Torsten Hoefler";
$o[] = "U. Illinois";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Christof Klausecker";
$o[] = "Ludwig-Maximilians U. Munich";

$a[] = "Alice Koniges";
$o[] = $lbnl;

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Sameer Kumar";
$o[] = "IBM";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Craig Rasmussen";
$o[] = "LANL";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "Timo Schneider";
$o[] = "T. U. Chemnitz";

$a[] = "Christian Siebert";
$o[] = "German Research School for Simulation Sciences";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu";

$a[] = "Alexander Supalov";
$o[] = "Intel";

$a[] = "Rajeev Thakur";
$o[] = $arg;

attendance($a, $o);

include_once("$topdir/include/footer.php");

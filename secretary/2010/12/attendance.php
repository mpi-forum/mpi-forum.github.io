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

$a[] = "Sameer Kumar";
$o[] = "IBM";

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = $ornl;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Torsten Hoefler";
$o[] = "U. Illinois";

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Hideyuki Jitsumoto";
$o[] = "University of Tokyo";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Bronis R. de Supinksi";
$o[] = $llnl;

$a[] = "James Dinan";
$o[] = $arg;

$a[] = "Rolf vandeVaart";
$o[] = "Oracle";

$a[] = "Jeff Hammond";
$o[] = $arg;

$a[] = "Josh Hursey";
$o[] = $ornl;

$a[] = "Kathryn Mohror";
$o[] = $llnl;

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama Birmingham";

$a[] = "Sayantan Sur";
$o[] = "The Ohio State U.";

$a[] = "Fabian Tillier";
$o[] = "Microsoft";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Tim Murray";
$o[] = "NVIDIA Corporation";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Rolf Riesen";
$o[] = $snl;

$a[] = "Gilad Shainer";
$o[] = "Mellanox Technologies";

$a[] = "Alexander Supalov";
$o[] = "Intel Corporation";

$a[] = "George bosilca";
$o[] = "University of Tennessee";

attendance($a, $o);

include_once("$topdir/include/footer.php");

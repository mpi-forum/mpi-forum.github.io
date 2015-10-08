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

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Don Kerr";
$o[] = "Sun Microsystems";

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Jeff Hammond";
$o[] = $arg;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Fab Tillier";
$o[] = "Microsoft";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Sameer Kumar";
$o[] = "IBM";

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Anthony Skjellum";
$o[] = "University of Alabama at Birmingham";

$a[] = "Jennifer Skjellum";
$o[] = "RunTime Computing Solutions, LLC";

$a[] = "Josh Hursey";
$o[] = "Indianan U.";

$a[] = "Yutaka Ishikawa";
$o[] = "U. of Tokyo";

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Chulho Kim";
$o[] = "IBM";

$a[] = "Manojkumar Krishnan";
$o[] = $pnnl;

$a[] = "Miao Luo";
$o[] = "Ohio State U.";

$a[] = "Mark Pagel";
$o[] = "Cray";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Mark Snir";
$o[] = "U. Illinois";

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Shinji Sumimoto";
$o[] = "Fujitsu Laboratories";

$a[] = "Abhinav Vishnu";
$o[] = $pnnl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

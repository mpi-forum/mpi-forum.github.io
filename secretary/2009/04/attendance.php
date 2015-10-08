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

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Bill Gropp";
$o[] = "U. Illinois";

$a[] = "Erez Haba";
$o[] = "Microsoft";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Josh Hursey";
$o[] = "Indiana U.";

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Hideyuki Jitsumoto";
$o[] = "Tokyo Institute of Technology";

$a[] = "Matthew Koop";
$o[] = "Ohio State U.";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Vinod Tipparaju";
$o[] = "ORNL";

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "Alexander Supalov";
$o[] = "Intel";

$a[] = "Bin Jia";
$o[] = "IBM";

$a[] = "Mark Pagel";
$o[] = "Cray";

$a[] = "Nathan DeBardeleben";
$o[] = $lanl;

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Tim Mattox";
$o[] = "SiCortex";

$a[] = "Ali AyoubAli";
$o[] = "Mellanox";

$a[] = "Jeff Hammond";
$o[] = "University of Chicago";

attendance($a, $o);

include_once("$topdir/include/footer.php");

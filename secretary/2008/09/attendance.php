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

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "William Gropp";
$o[] = $arg;

$a[] = "Jesper Traff";
$o[] = "NEC";

$a[] = "Pavel Shamis";
$o[] = "Mellanox";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Erez Haba";
$o[] = "Microsoft";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Nathan DeBardeleben";
$o[] = $lanl;

$a[] = "Matthew Koop";
$o[] = "Ohio State U.";

$a[] = "Edgar Gabriel";
$o[] = "U. Houston";

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Hideyuki Jitsumoto";
$o[] = "Tokyo Institute of Technology";

$a[] = "Alexander Supalov";
$o[] = "Intel";

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Jeffrey Brown";
$o[] = $lanl;

$a[] = "Rainer Keller";
$o[] = "HLRS";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Christian Siebert";
$o[] = "NEC";

$a[] = "Jeff Squyres";
$o[] = "Cisco Systems";

$a[] = "Ron Brightwell";
$o[] = "Sandia";

$a[] = "Edric Ellis";
$o[] = "The Mathworks";

$a[] = "Marc-Andre Hermanns";
$o[] = "Forschungszentrum Jülich";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Jonathan Carter";
$o[] = $lbnl;

$a[] = "Johann George";
$o[] = "QLogic";

$a[] = "Yutaka Ishikawa";
$o[] = "U. of Tokyo";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Naoki SUEYASU";
$o[] = "Fujitsu Limited";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Naoki SUEYASU";
$o[] = "Fujitsu Limited";

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Vinod Tipparaju";
$o[] = $ornl;

$a[] = "Sameer Kumar";
$o[] = "IBM";

attendance($a, $o);

include_once("$topdir/include/footer.php");

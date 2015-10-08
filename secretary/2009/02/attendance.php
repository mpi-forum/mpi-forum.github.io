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

$a[] = "Brian Barrett";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Greg Bronevetsky";
$o[] = $llnl;

$a[] = "Bronis de Supinski";
$o[] = $llnl;

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Edgar Gabriel";
$o[] = "U. Houston";

$a[] = "Johann George";
$o[] = "QLogic";

$a[] = "Dave Goodell";
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

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Kannan Narasimhan";
$o[] = "HP";

$a[] = "Matthew Koop";
$o[] = "Ohio State U.";

$a[] = "Quincey Koziol";
$o[] = "HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama at Birmingham";

$a[] = "Jeff Squyres";
$o[] = "Cisco";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Vinod Tipparaju";
$o[] = "ORNL";

$a[] = "Jesper Traff";
$o[] = "NEC";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Christian Bell";
$o[] = "Myricom";

$a[] = "Sameer Kumar";
$o[] = "IBM";

attendance($a, $o);

include_once("$topdir/include/footer.php");

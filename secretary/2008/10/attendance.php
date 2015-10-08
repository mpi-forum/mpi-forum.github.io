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

$a[] = "Purushotham Bangalore";
$o[] = "U. Alabama at Birmingham";

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

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Matthew Koop";
$o[] = "Ohio State U.";

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Jeff Squyres";
$o[] = "Cisco Systems";

$a[] = "Ron Brightwell";
$o[] = "Sandia";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Yutaka Ishikawa";
$o[] = "U. of Tokyo";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Sameer Kumar";
$o[] = "IBM";

$a[] = "Robert Blackmore";
$o[]= "IBM";

$a[] = "Jonathan Carter";
$o[] = $lbnl;

$a[] = "Bronis deSupinski";
$o[] = $llnl;

$a[] = "David Ginglod";
$o[] = "SiCortex";

$a[] = "Josh Hursey";
$o[] = "Indiana U.";

$a[] = "Quincey Koziol";
$o[] = "The HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Howard Pritchard";
$o[] = "Cray, Inc.";

$a[] = "Keith Underwood";
$o[] = "Intel Corporation";

$a[] = "Hideyuki JITSUMOTO";
$o[] = "Tokyo Institute of Technology";

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Kanna Narasimhan";
$o[] = "HP";

attendance($a, $o);

include_once("$topdir/include/footer.php");

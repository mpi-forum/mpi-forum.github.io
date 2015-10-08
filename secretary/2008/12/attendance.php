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

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Bronis deSupinski";
$o[] = $llnl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Vinod Tipparaju";
$o[] = $ornl;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Greg Bronevetsky";
$o[] = $llnl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "David Goodell";
$o[] = $arg;

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "William Gropp";
$o[] = $arg;

$a[] = "Yutaka Ishikawa";
$o[] = "U. of Tokyo";

$a[] = "Jesper Traff";
$o[] = "NEC";

$a[] = "Josh Hursey";
$o[] = "Indiana U.";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Keith Underwood";
$o[] = "Intel Corporation";

$a[] = "Mark Pagel";
$o[] = "Cray, Inc.";

$a[] = "Anthony Skjellum";
$o[] = "U. Alabama at Birmingham";

$a[] = "Martin Schulz";
$o[] = $llnl;

$a[] = "Quincey Koziol";
$o[] = "The HDF Group";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Matthew Koop";
$o[] = "Ohio State U.";

$a[] = "Terry Jones";
$o[] = $llnl;

$a[] = "Pavel Shamis";
$o[] = "Mellanox";

$a[] = "David Ginglod";
$o[] = "SiCortex";

$a[] = "Brian Barrett";
$o[] = "Sandia $nl";

$a[] = "Rolf Vandevaart";
$o[] = "Sun Microsystems";

$a[] = "Craig Rasmussen";
$o[] = $llnl;

$a[] = "Johann George";
$o[] = "QLogic";

$a[] = "Brian Smith";
$o[] = "IBM";

$a[] = "Jeff Squyres";
$o[] = "Cisco Systems";

$a[] = "Jeff Brown";
$o[] = $lanl;

attendance($a, $o);

include_once("$topdir/include/footer.php");

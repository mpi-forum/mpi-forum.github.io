<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

#$a[] = "Purushotham V Bangalore";
#$o[] = "Dept. of Computer and Information Sciences, UAB";

$nl = "National Laboratory";
$arg = "Argonne $nl";
$llnl = "Lawrence Livermore $nl";

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Christian Bell";
$o[] = "QLogic";

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Ron Brightwell";
$o[] = "Sandia $nl";

$a[] = "Greg Bronevetsky";
$o[] = $llnl;

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Bronis deSupinski";
$o[] = $llnl;

$a[] = "Gabor Dozsa";
$o[] = "IBM Research";

$a[] = "Edgar Gabriel";
$o[] = "U. Houston";

$a[] = "Patrick Geoffray";
$o[] = "Myricom";

$a[] = "Dave Goddell";
$o[] = $arg;

$a[] = "Rich Graham";
$o[] = "Oak Ridge $nl";

$a[] = "Bill Gropp";
$o[] = "U. of Illinois at Urbanna-Champaign";

$a[] = "Erez Haba";
$o[] = "Microsoft";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Joshua Hursey";
$o[] = "Indiana U.";

$a[] = "Yutaka Ishikawa";
$o[] = "U. Tokyo";

$a[] = "Hideyuki Jitsumoto";
$o[] = "Tokyo Institute of Technology";

$a[] = "James Jolly";
$o[] = "Sandia $nl";

$a[] = "Yann Kalemkarian";
$o[] = "Bull";

$a[] = "Rainer Keller";
$o[] = "HLRS";

$a[] = "Sriram Krishnamoorthy";
$o[] = "Pacific Northwest $nl";

$a[] = "Adam Moody";
$o[] = $llnl;

$a[] = "Howard Pritchard";
$o[] = "Cray, Inc";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Craig Rasmussen";
$o[] = "Los Alamos $nl";

$a[] = "Hubert Ritzdorf";
$o[] = "NEC Laboratories, Europe";

$a[] = "Jeff Squyres";
$o[] = "Cisco Systems";

$a[] = "Lawrence Stewart";
$o[] = "SiCortex";

$a[] = "Naoki Sueyasu";
$o[] = "Fujitsu Limited";

$a[] = "Rajeev Thakur";
$o[] = $arg;

$a[] = "Keith Underwood";
$o[] = "Intel Corporation";

$a[] = "Rolf Vandevaart";
$o[] = "Sun Microsystems";

attendance($a, $o);

include_once("$topdir/include/footer.php");

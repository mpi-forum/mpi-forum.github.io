<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

$nl = "National Laboratory";
$arg = "Argonne $nl";
$anl = $arg;
$llnl = "Lawrence Livermore $nl";
$lanl = "Los Alamos $nl";
$lbnl = "Lawrence Berkeley $nl";
$ornl = "Oak Ridge $nl";
$snl = "Sandia $nl";
$pnnl = "Pacific Northwest $nl";

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Terry Dontje";
$o[] = "Sun Microsystems";

$a[] = "Darius Buntinas";
$o[] = $arg;

$a[] = "Pavan Balaji";
$o[] = $arg;

$a[] = "Richard Graham";
$o[] = $ornl;

$a[] = "Erez Haba";
$o[] = "Microsoft";

$a[] = "Torsten Hoefler";
$o[] = "Indiana U.";

$a[] = "Miao Luo";
$o[] = "Ohio State U.";

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

$a[] = "Jesper Traff";
$o[] = "NEC";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Richard Treumann";
$o[] = "IBM";

$a[] = "Steve Oyanagi";
$o[] = "Cray";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Weikuan Yu";
$o[] = "Auburn University";

$a[] = "Anthony Skjellum";
$o[] = "University of Alabama at Birmingham";

$a[] = "Manojkumar Krishnan";
$o[] = $pnnl;

$a[] = "Abhinav Vishnu";
$o[] = $pnnl;

$a[] = "David Solt";
$o[] = "HP";

$a[] = "Bronis de Supinski";
$o[] = "$llnl";

$a[] = "Rolf Rabenseifner";
$o[] = "HLRS";

$a[] = "Jennifer Herrett-Skjellum";
$o[] = "RunTime Computing Solutions, LLC";

$a[] = "Yutaka Ishikawa";
$o[] = "University of Tokyo";

$a[] = "Joshua Hursey";
$o[] = "Indiana U.";

$a[] = "Brian Barrett";
$o[] = "Sandia National Laboratories";

$a[] = "Fabian Tillier";
$o[] = "Microsoft";

$a[] = "William Gropp";
$o[] = "U. Illinois";

$a[] = "Thomas Herault";
$o[] = "INRIA";

$a[] = "Hideyuki Jitsumoto";
$o[] = "Tokyo Institute of Technology";

$a[] = "Dave Goodell";
$o[] = $arg;

$a[] = "Tong Liu";
$o[] = "Mellanox Technologies";

attendance($a, $o);

include_once("$topdir/include/footer.php");

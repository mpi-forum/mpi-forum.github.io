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

$a[] = "Ron Brightwell";
$o[] = $snl;

$a[] = "George Bosilca";
$o[] = "U. Tennessee";

$a[] = "Rolf Vandevaart";
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

$a[] = "Vinod Tipparaju";
$o[] = "ORNL";

$a[] = "Hubert Ritzdorf";
$o[] = "NEC";

$a[] = "Keith Underwood";
$o[] = "Intel";

$a[] = "Sameer Kumar";
$o[] = "IBM";

$a[] = "Howard Pritchard";
$o[] = "Cray";

$a[] = "Craig Rasmussen";
$o[] = $lanl;

$a[] = "Weikuan Yu";
$o[] = "Auburn Univewrsity";

$a[] = "Anthony Skjellum";
$o[] = "University of Alabama at Birmingham";

$a[] = "Purushotham Bangalore";
$o[] = "University of Alabama at Birmingham";

$a[] = "Greg Bronevetsky";
$o[] = $llnl;

$a[] = "Manojkumar Krishnan";
$o[] = $pnnl;

$a[] = "Abhinav Vishnu";
$o[] = "Research scientist";

attendance($a, $o);

include_once("$topdir/include/footer.php");

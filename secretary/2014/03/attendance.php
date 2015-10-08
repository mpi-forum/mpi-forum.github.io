<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Bill Gropp", "NCSA/UIUC");
attendee("Jeff Hammond", $anl);
attendee("Pavan Balaji", $anl);
attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Dave Goodell", "Cisco Systems, Inc.");
attendee("Wesley Bland", $anl);
attendee("Ken Raffenetti", $anl);
attendee("Akshay Venkatesh", "Ohio State U");
attendee("Purushotham Bangalore", "U Alabama Birmingham");
attendee("Ryan Grant", $snl);
attendee("Fabian Tillier", "Microsoft");
attendee("Davide Rossetti", "Nvidia");
attendee("Dan Holmes", "EPCC");
attendee("Steve Oyanagi", "Cray");
attendee("Quincey Koziol", "HDF");
attendee("Charles Archer", "IBM");
attendee("Balazs Gerofi", "U Tokyo");
attendee("Joshua Ladd", "Mellanox");
attendee("Rich Graham", "Mellanox");
attendee("Keita Teranishi", $snl);
attendee("Martin Schulz", $llnl);
attendee("Narthan Hjelm", $lanl);
attendee("Aurelien Bouteiller", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Devendar Bureddy", "Mellanox");
attendee("Kathryn Mohror", $llnl);

attendance_global();

include_once("$topdir/include/footer.php");

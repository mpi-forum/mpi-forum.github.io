<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Charles Archer", "Intel");
attendee("Ken Raffenetti", $anl);
attendee("Purushotham Bangalore", "U Alabama Birmingham");
attendee("Fabian Tillier", "Microsoft");
attendee("Dan Holmes", "EPCC");
attendee("Balazs Gerofi", "Riken");
attendee("Masamichi Takagi", "Riken");
attendee("Martin Schulz", $llnl);
attendee("Howard Pritchard", $lanl);
attendee("Aurelien Bouteiller", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Sangmin Seo", $anl);
attendee("David Solt", "IBM");
attendee("Wesley Bland", $anl);
attendee("William Gropp", "NCSA/UIUC");
attendee("James Dinan", "Intel");
attendee("Jeff Hammond", "Intel");
attendee("Manjunath Gorentla Venkata", $ornl);
attendee("Sreeram Potluri", "Nvidia");
attendee("Kieta Teranishi", "Sandia");
attendee("Devendar Bureddy", "Mellanox");
attendee("Takahiro Kawashima", "Fujitsu");
attendee("Anthony Skjellum", "Auburn U");
attendee("Nicholas Radcliffe", "Cray");
attendee("Chulho Kim", "Lenovo");
attendee("Takeshi Nanri", "U. Kyushu");
attendee("Pavan Balaji", $anl);
attendee("Rolf Rabenseifner", "HLRS");

attendance_global();

include_once("$topdir/include/footer.php");

<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Ken Raffenetti", $anl);
attendee("Lena Oden", $anl);
attendee("Junchao Zhang", $anl);
attendee("Rajeev Thakur", $anl);
attendee("Purushotham Bangalore", "U Alabama Birmingham");
attendee("Anh Vo", "Microsoft");
attendee("Daniel Holmes", "EPCC");
attendee("Atsushi Hori", "Riken");
attendee("Martin Schulz", $llnl);
attendee("Ignacio Laguna Peralta", $llnl);
attendee("Aurelien Bouteiller", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Wesley Bland", "Intel");
attendee("William Gropp", "NCSA/UIUC");
attendee("Jeff Hammond", "Intel");
attendee("Manjunath Gorentla Venkata", $ornl);
attendee("Sreeram Potluri", "Nvidia");
attendee("Anthony Skjellum", "Auburn U");
attendee("Chulho Kim", "Lenovo");
attendee("Pavan Balaji", $anl);
attendee("Sangmin Seo", $anl);
attendee("Rolf Rabenseifner", "HLRS");
attendee("Kathryn Mohror", $llnl);
attendee("Rich Graham", "Mellanox");
attendee("Sayantan Sur", "Intel");
attendee("Xioyi Lu", "OSU");
attendee("Howard Pritchard", $lanl);
attendee("Nathan Hjelm", $lanl);
attendee("Ryan Grant", $snl);
attendee("Takafumi Nose", "Fujitsu");
attendee("Sameh Sharkawi", "IBM");
attendee("Takeshi Nanri", "Kyushu U.");
attendee("Krishna Kandalla", "Cray");

attendance_global();

include_once("$topdir/include/footer.php");

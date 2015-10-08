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
attendee("Daniel Holmes", "EPCC");
attendee("Balazs Gerofi", "Riken");
attendee("Martin Schulz", $llnl);
attendee("Aurelien Bouteiller", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Wesley Bland", $anl);
attendee("William Gropp", "NCSA/UIUC");
attendee("Jeff Hammond", "Intel");
attendee("Manjunath Gorentla Venkata", $ornl);
attendee("Sreeram Potluri", "Nvidia");
attendee("Anthony Skjellum", "Auburn U");
attendee("Chulho Kim", "Lenovo");
attendee("Pavan Balaji", $anl);
attendee("Rolf Rabenseifner", "HLRS");
attendee("Kathryn Mohror", $llnl);
attendee("Yohann Burette", "Intel");
attendee("Jithin Jose", "Intel");
attendee("Pak Lui", "Mellanox");
attendee("Sayantan Sur", "Intel");
attendee("Hari Subramoni", "OSU");
attendee("Geoffroy Valee", $ornl);
attendee("Nathan Hjelm", $lanl);
attendee("Ryan Grant", $snl);
attendee("Mohamad Chaarawi", "HDF Group");
attendee("Michael Blocksome", "Intel");
attendee("Naoki Sueyasu", "Fujitsu");

attendance_global();

include_once("$topdir/include/footer.php");

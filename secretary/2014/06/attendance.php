<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Quincey Koziol", "HDF");
attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Dave Goodell", "Cisco Systems, Inc.");
attendee("Charles Archer", "Intel");
attendee("Ken Raffenetti", $anl);
attendee("Venkat Vishwanath", $anl);
attendee("Purushotham Bangalore", "U Alabama Birmingham");
attendee("Anh Vo", "Microsoft");
attendee("Rolf vandeVaart", "Nvidia");
attendee("Dan Holmes", "EPCC");
attendee("Balazs Gerofi", "U Tokyo");
attendee("Rich Graham", "Mellanox");
attendee("Martin Schulz", $llnl);
attendee("Nathan Hjelm", $lanl);
attendee("Aurelien Bouteiller", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Takeshi Nanri", "U. Kyushu");
attendee("Sangmin Seo", $anl);
attendee("Khaled Hamidouche", "Ohio State U");
attendee("Atsushi Hori", "Riken");
attendee("Jithin Jose", "Ohio State U");
attendee("David Solt", "IBM");
attendee("Antonio Pena Monferrer", $anl);
attendee("Junchao Zhang", $anl);
attendee("Wesley Bland", $anl);
attendee("Xin Zhao", "NCSA/UIUC");
attendee("Adam Moody", $llnl);
attendee("George Bosilca", "U Tennessee");
attendee("James Dinan", "Intel");
attendee("Jeff Hammond", "Intel");
attendee("Manjunath Gorentla Venkata", $ornl);

attendance_global();

include_once("$topdir/include/footer.php");

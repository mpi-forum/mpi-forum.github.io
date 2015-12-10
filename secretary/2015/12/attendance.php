<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Daniel Holmes", "EPCC");
attendee("Martin Schulz", $llnl);
attendee("Alice Koniges", $lbl);
attendee("Wesley Bland", "Intel");
attendee("William Gropp", "NCSA/UIUC");
attendee("Takeshi Nanri", "Kyushu U.");
attendee("Balazs Gerofi", "Riken");
attendee("Hubert Ritzdorf", "NEC");
attendee("Brice Goglin", "INRIA");
attendee("Takafumi Nose", "Fujitsu");
attendee("James Dinan", "Intel");
attendee("Steven Oyanagi", "Cray");
attendee("Ammar Ahmad Awan", "OSU");
attendee("Keita Teranishi", "Sandia");
attendee("Pavan Balaji", $anl);
attendee("Howard Pritchard", $lanl);
attendee("Ryan Grant", $snl);
attendee("Sylvain Jeaugey", "NVIDIA");
attendee("Kathryn Mohror", $llnl);
attendee("Anh Vo", "Microsoft");
attendee("Chulho Kim", "Lenovo");
attendee("Aurelien Bouteiller", "UTK");
attendee("Jeff Hammond", "Intel");
attendee("Ana Gainaru", "Mellanox");
attendee("Soren Rasmussen", "U. Oregon");
attendee("Craig Rasmussen", "U. Oregon");
attendee("Nathan Hjelm", $lanl);

attendance_global();

include_once("$topdir/include/footer.php");

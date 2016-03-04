<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Wesley Bland", "Intel");
attendee("Julien Jaeger", "CEA");
attendee("Khaled Hamidouche", "OSU");
attendee("Jean-Baptiste Besnard", "Paratools");
attendee("Aurelien Bouteiller", "UTK");
attendee("Pavan Balaji", $anl);
attendee("James Dinan", "Intel");
attendee("Howard Pritchard", $lanl);
attendee("George Bosilca", "UTK");
attendee("Takafumi Nose", "Fujitsu");
attendee("Guillaume Mercier", "INRIA");
attendee("Hubert Ritzdorf", "NEC");
attendee("Kathryn Mohror", $llnl);
attendee("Ana Gainaru", "Mellanox");
attendee("Steve Oyanagi", "Cray");
attendee("James Custer", "SGI");
attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Murali Emani", $llnl);
attendee("Anh Vo", "Microsoft");
attendee("Manjunath Gorentla Venkata", $ornl);
attendee("Ken Raffenetti", $anl);
attendee("Ignacio Laguna", $llnl);
attendee("Marc Gamell Balmana", "Rutgers U.");
attendee("Alice Koniges", $lbl);
attendee("Rajeev Thakur", $anl);
attendee("Keita Teranishi", "Sandia");
attendee("Ryan Grant", $snl);
attendee("Sreeram Potluri", "NVIDIA");
attendee("Matthew Dosanjh", $snl);
attendee("Balazs Gerofi", "Riken");
attendee("Martin Schulz", $llnl);
attendee("Nathan Hjelm", $lanl);
attendee("Abdelhalim Amer", $anl);
attendee("Daniel Holmes", "EPCC");
attendee("Jeff Hammond", "Intel");

attendance_global();

include_once("$topdir/include/footer.php");

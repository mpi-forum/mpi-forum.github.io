<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Wesley Bland", "Intel");
attendee("Aurelien Bouteiller", "UTK");
attendee("Pavan Balaji", $anl);
attendee("Howard Pritchard", $lanl);
attendee("Hubert Ritzdorf", "NEC");
attendee("Kathryn Mohror", $llnl);
attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Anh Vo", "Microsoft");
attendee("Ken Raffenetti", $anl);
attendee("Ignacio Laguna", $llnl);
attendee("Alice Koniges", $lbl);
attendee("Ryan Grant", $snl);
attendee("Martin Schulz", $llnl);
attendee("Nathan Hjelm", $lanl);
attendee("Daniel Holmes", "EPCC");
attendee("Jeff Hammond", "Intel");
attendee("Brian Smith", "Mellanox");
attendee("Takafumi Nose", "Fujitsu");
attendee("Nicholas", "Radcliffe");
attendee("Sylvain Jeaugey", "NVIDIA");
attendee("Hari Subramoni", "The Ohio State U.");
attendee("Geoffroy Vallee", $ornl);
attendee("Min Si", $anl);
attendee("Sameh Sharkawi", "IBM");
attendee("Tony Skjellum", "Auburn U");
attendee("Richard Graham", "Mellanox");
attendee("Charles Archer", "Intel");

attendance_global();

include_once("$topdir/include/footer.php");

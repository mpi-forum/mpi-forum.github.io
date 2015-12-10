<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Jeff Squyres", "Cisco Systems, Inc.");
attendee("Daniel Holmes", "EPCC");
attendee("Atsushi Hori", "Riken");
attendee("Martin Schulz", $llnl);
attendee("George Bosilca", "U Tennessee");
attendee("Alice Koniges", $lbl);
attendee("Wesley Bland", "Intel");
attendee("William Gropp", "NCSA/UIUC");
attendee("Rolf Rabenseifner", "HLRS");
attendee("Rich Graham", "Mellanox");
attendee("Takeshi Nanri", "Kyushu U.");
attendee("Siegmar Gross", "U. Applied Sciences Fulda");
attendee("Balazs Gerofi", "Riken");
attendee("Gil Bloch", "Mellanox");
attendee("Ivy Peng", "KTH Royal Institute of Technology");
attendee("Julien Jager", "CEA");
attendee("Hubert Ritzdorf", "NEC");
attendee("Jean-Baptise Besnard", "ParaTools");
attendee("Marc-Andre Hermanns", "JSC");
attendee("Steffen Christgau", "University of Pottsdam");
attendee("Ilya Ivanov", "KTH Royal Institute of Technology");
attendee("Christian Engelmann", $ornl);
attendee("Brice Goglin", "INRIA");
attendee("Geoffroy Vallee", $ornl);
attendee("Takafumi Nose", "Fujitsu");
attendee("James Dinan", "Intel");

attendance_global();

include_once("$topdir/include/footer.php");

<?
$short_desc = "Attendance";
$long_desc = "Attendance list";
$file = "attendance.php";
include_once("subpage.php");

attendee("Dave Goodell", "Cisco Systems, Inc.");
attendee("Manjunath Gorentla Venkata", $ornl);
attendee("George Bosilca", "U Tennessee");
attendee("Ken Raffenetti", $anl);
attendee("James Dinan", "Intel");
attendee("Aurelien Bouteiler", "U Tennessee");
attendee("Martin Schulz", $llnl);
attendee("Balazs Gerofi", "Riken");
attendee("Alexey Cheptsov", "HLRS");
attendee("Guillaume Mercier", "INRIA");
attendee("Atsushi Hori", "Riken");
attendee("Kathryn Mohror", $llnl);
attendee("Torsten Hoefler", "ETH");
attendee("Keita Teranishi", $snl);
attendee("Marc-Andre Hermanns", "GRS");
attendee("Ryan Grant", $snl);
attendee("Takeshi Nanri", "U. Kyshu");
attendee("Nathan Hjelm", $lanl);
attendee("Richard Graham", "Mellanox");
attendee("Masamichi Takagi", "Riken");
attendee("Shinji Sumimoto", "Fujitsu");
attendee("Sameer Kumar", "IBM");

attendance_global();

include_once("$topdir/include/footer.php");

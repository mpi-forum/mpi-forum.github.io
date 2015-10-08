<?
$short_desc = "Voting during the meeting";
$long_desc = $short_desc;
$file = "voting/index.php";
$topdir = "../../../..";
$meeting_top = "..";
include_once("../subpage.php");

?>
<script language="javascript">
<!--hide
function newwindow(p) {
  window.open('http://poll.snapsurveys.com/PollLoader/SnapService.aspx?T=LNK&SID=' + p + '_0','mywindow','width=400,height=400,resizable=yes');
}
//-->
</script>

<?php

function print_poll($title, $p = "") {
    global $_SERVER;

    print("<li> $title ");
    if (!empty($p)) {
        print(': <a href="javascript:newwindow(\'' . $p . '\')">click here to take the survey/see the results</a>');
    } else { 
        print (" (poll complete)");
    }
    print("</li>\n\n");
}

print("<p><strong><font color=\"red\">You are logged in as:</font> $_SERVER[REMOTE_USER]</strong></p>\n\n");

print("<p> <strong>Attending organizations eligible to vote
(24):</strong> Argonne, Bull, Cisco, Cray, HDF Group, HLRS, HP, IBM,
Indiana U, INRIA, Intel, Livermore, Microsoft, U. Illinois, NEC,
QLogic, ORNL, Ohio State U., Sandia, Sun, Tokyo Institute of
Technology, U. Alabama, U. Tennessee, U. Tokyo.</p>\n\n");

print("<p> <strong>Non-attending organizations eligible to vote
(2):</strong> Mellanox, SiCortex.</p>\n\n");

print("<ul>\n\n");

print_poll("Test poll", "0097545e-f1ae-43c6-9ad4-dc6a3c2ff6c5_1538");
//print_poll("MPI Ticket #12345", "2f7377a2-57bd-4c9d-8421-c4be56599b54_1534");
//print_poll("MPI Ticket #12346", "357cd0ef-80ba-4b79-b85e-d8082658be20_1536");

print("</ul>\n\n");

include_once("$topdir/include/footer.php");

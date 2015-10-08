<?

$trac_ticket_base = "https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/";


function meeting_header_item($a, $b) {
    print("<tr>
<td align=left valign=top><strong>$a:</strong></td>
<td align=left valign=top>$b</td>\n");
}

function meeting_header($d, $location) {
    print("<p><table border=0>\n");
    meeting_header_item("Meeting date", $d);
    meeting_header_item("Meeting location", $location);
    print("</table></p>\n\n");
}

$nl = "National Laboratory";
$arg = "Argonne $nl";
$anl = $arg;
$llnl = "Lawrence Livermore $nl";
$lanl = "Los Alamos $nl";
$lbnl = "Lawrence Berkeley $nl";
$lbl = $lbnl;
$ornl = "Oak Ridge $nl";
$snl = "Sandia $nl";
$pnnl = "Pacific Northwest $nl";

$attendees;
$orgs;

function attendee($name, $org) {
    global $attendees;
    global $orgs;
    $attendees[] = $name;
    $orgs[] = $org;
}

function attendance_global() {
    global $attendees;
    global $orgs;
    attendance($attendees, $orgs);
}

function attendance($a, $o) {
    print("\n<p>Attendees listed in no particular order:</p>\n\n<ol>\n");
    for ($i = 0; $i < sizeof($a); ++$i) {
        print("<li> $a[$i] ($o[$i])</li>\n");
    }
    print("</ol>\n\n");
}

function agenda_item($time, $info) {
    print("<tr><td width=150 align=right valign=top>$time</td><td width=650 align=left valign=top>$info</td></tr>\n\n");
}

function agenda_item_webex($time, $info, $webex_link, $webex_pw) {
    print("<tr><td width=150 align=right valign=top>$time</td>\n");
    if ($webex_link != "") {
        $info = "$info<br /><a href=\"$webex_link\">Webex for this session</a> (password: $webex_pw)";
    }
    print("<td width=650 align=left valign=top>$info</td></tr>\n\n");
}

function plenary_item($type, $info, $who, $deleted_flag) {
    print("<tr>\n<td width=150 align=left valign=top>$type</td>\n");
    if ($deleted_flag) {
        $info = "<del>$info</del>";
    }
    print("<td width=\"500\" align=\"left\" valign=\"top\">$info</td>\n");
    print("<td width=150 align=left valign=top>$who</td>\n</tr>\n\n");
}

$in_agenda = 0;
function agenda_day_start($d) {
    global $in_agenda;
    if ($in_agenda) {
        agenda_day_end();
    }
    print("<p><table border=0 cellpadding=5>
<tr><th colspan=2>$d<br><hr></th></tr>\n\n");
    $in_agenda = 1;
}

function agenda_day_end() {
    global $in_agenda;
    print("<tr><th colspan=2><hr></th></tr>\n</table></p>\n\n");
    $in_agenda = 0;
}

function agenda_plenary_start() {
    global $in_agenda;
    if ($in_agenda) {
        agenda_plenary_end();
    }
    print("<p><table border=0 cellpadding=5>
<tr><th colspan=3>Plenary Discussion Items<br></th></tr>\n\n");
    print("<p><table border=0 cellpadding=5>
          <tr><td colspan=3>We will discuss the following items in this order during the plenary sessions:<br></td></tr>\n\n");
          print("<tr><td width=150 align=left valign=top>Type<br><hr></td>
                <td width=500 align=left valign=top>Topic/Tickets<br><hr></td>
                <td width=150 align=left valign=top>Who<br><hr></td></tr>\n\n");
    $in_agenda = 1;
}

function agenda_plenary_end() {
    global $in_agenda;
    print("<tr><th colspan=3><hr></th></tr>\n</table></p>\n\n");
    $in_agenda = 0;
}

function docs_item($type, $docname, $doclink, $difflink, $diffpdf,$who, $deleted_flag) {
    print("<tr>\n<td width=150 align=left valign=top>$type</td>\n");
    if ($deleted_flag) {
        $info = "<del>";
    }
    print("<td width=\"500\" align=\"left\" valign=\"top\">");
    if ($doclink!="") {
        print("<A HREF=\"docs/$doclink\">");
    }
    print($docname);
    if ($doclink!="") {
        print("</A> ");
    }
    if ($difflink!="") {
        if (substr($difflink, 0, 4) == "http") {
            print("(<A HREF=\"$difflink\">");
        } else {
            print("(<A HREF=\"docs/$difflink\">");
        }
        print("TXT diff");
        print("</A>) ");
    }
    if ($diffpdf!="") {
        print("(<A HREF=\"docs/$diffpdf\">");
        print("PDF diff");
        print("</A>) ");
    }
    print("</td>\n");
    if ($deleted_flag) {
        $info = "</del>";
    }
    print("<td width=150 align=left valign=top>$who</td>\n</tr>\n\n");
}


function agenda_docs_start() {
    global $in_agenda;
    if ($in_agenda) {
        agenda_docs_end();
    }
    print("<p><table border=0 cellpadding=5>
<tr><th colspan=3>Documents to be Discussed<br></th></tr>\n\n");
    print("<p><table border=0 cellpadding=5>
          <tr><td colspan=3>We will discuss the following documents as part of the finalization of the MPI standard document:<br></td></tr>\n\n");
          print("<tr><td width=150 align=left valign=top>Type<br><hr></td>
                <td width=500 align=left valign=top>Document<br><hr></td>
                <td width=150 align=left valign=top>Who<br><hr></td></tr>\n\n");
    $in_agenda = 1;
}

function agenda_docs_end() {
    global $in_agenda;
    print("<tr><th colspan=3><hr></th></tr>\n</table></p>\n\n");
    $in_agenda = 0;
}



function agenda_who($t, $w) {
          agenda_item("","Ticket ".ticket($t)." (".$w.")");
}

function ticket_gen($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

function webex_gen($link, $pw) {
    return "<br /><a href=\"$link\">Webex link (pw: $pw)</a>";
}

function agenda_ticket($i, $t) {
    agenda_item("","Ticket ".ticket_gen($i).": ".$t);
}







$gb = pow(2, 30);
$mb = pow(2, 20);
$kb = pow(2, 10);

function show_slides($slide_dir, $slides) {
    global $gb;
    global $mb;
    global $kb;

    $d = opendir($slide_dir);

    while (($f = readdir($d)) != false) {
        $files[] = $f;
    }
    closedir($d);

    print("<p><table border=0 cellpadding=5>\n");
    foreach ($slides as $slide) {
        $len = strlen($slide);
        foreach ($files as $f) {
            if ($slide == substr($f, 0, $len)) {
                $suffix = strtoupper(substr($f, $len + 1));
                $found[$slide][$suffix] = $f;
                $suffixes[$suffix] = 1;
            }
        }
    }

    $suffixes = array_keys($suffixes);

    if (isset($found)) {
        // Print header row
        print("<tr>\n");
        for ($i = 0; $i < sizeof($suffixes); ++$i) {
            print("<th valign=top>$suffixes[$i]<br /><hr></th>");
        }
        print("<th>File<br /><hr></th>\n</tr>\n\n");

        // Print data rows
        for ($i = 0; $i < sizeof($slides); ++$i) {
            print("<tr>\n");
            for ($j = 0; $j < sizeof($suffixes); ++$j) {
                print("<td align=center valign=top>");
                if (isset($found[$slides[$i]][$suffixes[$j]])) {
                    $f = "$slide_dir/" . $found[$slides[$i]][$suffixes[$j]];
                    $st = stat($f);
                    $size = $st["size"];
                    if ($size > $gb) {
                        $size = floor($size / $gb);
                        $size .= "GB";
                    } else if ($size > $mb) {
                        $size = floor($size / $mb);
                        $size .= "MB";
                    } else if ($size > $kb) {
                        $size = floor($size / $kb);
                        $size .= "KB";
                    }
                    print("<a href=\"$f\">$suffixes[$j] ($size)</a>");
                } else {
                    print("&nbsp;");
                }
                print("</td>\n");
            }
            print("<td valign=top>$slides[$i]</td>\n");
            print("</tr>\n\n");
        }

        for ($i = 0; $i < sizeof($suffixes); ++$i) {
            print("<th valign=top><hr></th>");
        }
        print("<th><hr></th>\n</tr>\n\n");

    }
    print("</table></p>\n\n");
}

function ballot_cell($title, $value)
{
    print("<tr>
<td valign=top align=right><strong>$title</strong></td>
<td valign=top align=center>$value</td>
</tr>\n\n");
}

define("BALLOT_RULES_ORIGINAL", 1);
define("BALLOT_RULES_JUN_2012", 2);
define("BALLOT_RULES_JUL_2012", 3);
define("BALLOT_RULES_MAR_2013", 4);

function ballot($title, $yes, $no, $abstain, $missed, $result = "")
{
    # Original majority defintion (i.e,. $yes > $no)
    ballot_backend(BALLOT_RULES_ORIGINAL,
                   $title, $yes, $no, $abstain, $missed, 0, $result);
}

function ballot52012($title, $yes, $no, $abstain, $missed, $result = "")
{
    # "Majority" definition changed at the Japan meeting in May, 2012:
    # $yes > ($no + $abstain + $miss)
    ballot_backend(BALLOT_RULES_JUN_2012,
                   $title, $yes, $no, $abstain, $missed, 0, $result);
}

function ballot72012($title, $yes, $no, $abstain, $result = "")
{
    # "Abstain" definition changed at the Chicago meeting in July 2012:
    # "abstain" is the same as "no".  Also, there is no more "missed"
    # category.
    ballot_backend(BALLOT_RULES_JUL_2012,
                   $title, $yes, $no, $abstain, 0, 0, $result);
}

function ballot3152013($title, $yes, $no, $abstain, $missed, $imove, $result = "")
{
    # Voting rules formalized at the Chicago meeting in March, 2013.  See
    # http://meetings.mpi-forum.org/procedures-2013-03-15.pdf
    ballot_backend(BALLOT_RULES_MAR_2013,
                   $title, $yes, $no, $abstain, $missed, $imove, $result);
}

function ballot_backend($rules, $title, $yes, $no, $abstain,
                        $missed, $imove, $result = "")
{
    $passed = "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>";
    $failed = "<font color=\"#bb0000\"><strong>Ballot failed</strong></font>";
    $no_quorum = "<font color=\"#bb0000\"><strong>Ballot quorum not met</strong></font>";

    print("<li>Vote topic: <strong>$title</strong></p>\n\n");
    print("<p><table border=1 cellpadding=3>\n\n");
    ballot_cell("YES:", $yes);
    if (BALLOT_RULES_JUL_2012 == $rules) {
        ballot_cell("NO / ABSTAIN:",
                    ($no + $abstain) . " ($no / $abstain)");
    } else {
        ballot_cell("NO:", $no);
        ballot_cell("ABSTAIN:", $abstain);
        ballot_cell("MISSED:", $missed);
    }

    # See rules definitions, above
    if (BALLOT_RULES_ORIGINAL == $rules) {
        $result = ($yes > $no) ? $passed : $failed;
    } else if (BALLOT_RULES_JUN_2012 == $rules) {
        $result = ($yes > ($no + $abstain + $missed)) ? $passed : $failed;
    } else if (BALLOT_RULES_JUL_2012 == $rules) {
        $result = ($yes > ($no + $abstain)) ? $passed : $failed;
    } else if (BALLOT_RULES_MAR_2013 == $rules) {
        if ($yes + $no > 0.75 * $imove) {
            $result = ($yes > 0.75 * ($yes + $no)) ? $passed : $failed;
        } else {
            $result = $no_quorum;
        }
    } else {
        if (empty($result)) {
            $result = "UNKNOWN";
        }
    }
    ballot_cell("Result:", $result);
    print("</table></p><br />\n</li>\n\n");
}

// Curl handle
$ch = "";

function do_curl_get($url)
{
    global $ch;

    // Use curl to proxy a request to stuff from Trac.  PHP has everything!
    if (empty($ch)) {
        $ch = curl_init();
    }

    // Set the URL to GET from
    curl_setopt($ch, CURLOPT_URL, $url);

    // Setting CURLOPT_RETURNTRANSFER variable to 1 will force curl not to
    // print out the results of its query.  Instead, it will return the
    // results as a string return value from curl_exec() instead of the
    // usual true/false.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    // Execute the request and get the output
    $output = curl_exec($ch);

    // Check to see if we got success
    if (curl_errno($ch)) {
        $output = "<p>Sorry, something went wrong while trying to obtain the URL \"$url\".  " . curl_error($ch) . "   Please try again later.\n\n";
    }

    return $output;
}

function get_trac_title($num)
{
    global $trac_ticket_base;

    // Download the ticket from trac so that we can get the title
    $str = do_curl_get("$trac_ticket_base$num?format=tab");
    // We get multiple lines back; the first one has the field names;
    // the 2nd one has the field values.
    $lines = preg_split("/\n/", $str);
    // Split by tab
    $fields = preg_split("/\t/", $lines[1]);
    // Remove the enclosing quotes
    $title = preg_replace("/^\"(.+)\"\$/", "\$1", $fields[1]);
    // If there are any quotes in the string, trac will have double
    // quoted them.  So take them down to single quotes.
    $title = preg_replace("/\"\"/", "\"", $title);

    // As an example, the above will take:
    //   "Hello, this is ""my"" ticket"
    // And output:
    //   Hello, this is "my" ticket

    return $title;
}

function reading($num, $title = "")
{
    global $trac_ticket_base;

    if ($num > 0) {
        $str = "<a href=\"$trac_ticket_base$num\">Ticket #$num</a>: ";
    }

    if (empty($title) && $num > 0) {
        $str .= get_trac_title($num);
    } else {
        $str .= $title;
    }
    print("<li>$str</li>\n");
}

function add_webex($room, $url, $pw)
{
    print("<tr><td colspan=2>Webex Information for ".$room);
    print("<UL><LI>URL: <a href=\"$url\">$url</a></LI>");
    print("<LI>Password: ".$pw."</LI></UL></td></tr>");
}

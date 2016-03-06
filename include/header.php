<?
include_once("$topdir/include/top-nav.php");

if (!isset($topurl) || $topurl == "") {
     $topurl = $topdir;
}
if (!isset($logo_file)) {
    $logo_file = "$topdir/images/mpi-forum-logo.jpg";
}
if (!isset($logo_url)) {
    $logo_url = $topurl;
}

// For debugging
$table_border = 0;

function left_width_1() {
  print("width=\"10%\"");
}
function left_width_2() {
  print("width=\"10%\"");
}
function right_width_1() {
  print("width=\"90%\"");
}
function right_width_2() {
  print("width=\"90%\"");
}
function right_width_3() {
  print("width=\"90%\"");
}

if (!isset($head_title)) {
    if (isset($title)) {
        $head_title = $title;
    } else {
        $head_title = "";
    }
}

if (!isset($body_title)) {
    if (isset($title)) {
        $body_title = $title;
    } else {
        $body_title = "";
    }
}

if (!isset($project)) {
    $project = "MPI Forum Meetings";
}

include_once("$topdir/include/http_header.php");
include_once("$topdir/include/nav-search.php");

function printtoplink($link, $text, $class) {
    print("              <TR>\n");
    print("                 <TD class=\"navbartop");
    if ($class != "")
        print("$class");
    print("\">\n");
    print("                  $text\n");
    print("                 </TD>\n");
    
    print("              </TR>\n");
}

function printbutton($text) {
  global $topdir;
  print("<tr><td class=\"buttonbox\">&nbsp;$text</td></tr>\n\n");
}

function printsublink($link, $text, $a_modifier = "") {
    global $this_dir;
    global $this_absdir;
    global $this_nav;
    global $topdir;

    print("              <TR>\n");
    print("                <TD class=\"navbarsub\">\n");
    print("                  &nbsp;&nbsp;<A HREF=\"$link\" CLASS=\"navbarsub\" $a_modifier>$text</A>\n");
    print("                </TD>\n");
    print("              </TR>\n");

    $b = basename($link);
    if ((isset($this_dir) && $b == $this_dir) ||
        (isset($this_absdir) && 
         ($link == "$topdir$this_absdir" || $link == "$topdir$this_absdir/"))) {
        for ($i = 0; $i < sizeof($this_nav); $i++) {
            print("              <TR>\n");
            #if there is no link, make the font different so it stands out as such
            if("" == $this_nav[$i]->link) {
                print("                <TD class=\"navbarsub2b\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" . $this_nav[$i]->name ."\n");
            } else {
                print("                <TD class=\"navbarsub2\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" . 
                      "<A HREF=\"" . $this_nav[$i]->link . "\" CLASS=\"navbarsub2\">" .
                      $this_nav[$i]->name . "</A>\n");
            }
            print("                </TD>\n");
            print("              </TR>\n");
            for($j = 0; $j < sizeof($this_nav[$i]->children); $j++) {
                print("              <TR>\n");
                print("                <TD class=\"navbarsub3\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;" . 
                      "<A HREF=\"" . $this_nav[$i]->children[$j]->link . "\" CLASS=\"navbarsub3\">" .
                      $this_nav[$i]->children[$j]->name . "</A>\n");
                print("                </TD>\n");
                print("              </TR>\n");
            }
            
    }
  }
}

function urchin_click($key) {
    return "onClick=\"javascript:urchinTracker('$key');\"";
}

function purchin_click($key) {
    print urchin_click($key);
}

function aurchin_click($url, $key = "") {
    if (empty($key)) {
	if ("http://" == substr($url, 0, 7)) {
	    $key = "/outgoing/" . substr($url, 7);
	} else if ("https://" == substr($url, 0, 8)) {
	    $key = "/outgoing/" . substr($url, 8);
	} else if ("ftp://" == substr($url, 0, 6)) {
	    $key = "/outgoing/" . substr($url, 6);
	} else {
	    $key = "/outgoing/$url";
	}
    }
    return "<a href=\"$url\" " . urchin_click($key) . ">";
}

function paurchin_click($url, $key = "") {
    print aurchin_click($url, $key);
}

print("<BODY>\n");
include_once("$topdir/include/google-analytics.php");
?>
<A NAME="top"></A>

<!-- START MAIN TABLE -->
<TABLE WIDTH="98%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="0">
<COLGROUP>
  <COL width="10%">
  <COL>

  <!-- Title area -->
  <TR>
    <TD class="logobox" VALIGN="center" ALIGN="center" ROWSPAN="2" <?php left_width_1(); ?>>
      <A HREF="<?php print($logo_url);?>/"><?php
print("<IMG SRC=\"$logo_file\" width=\"200\" height=\"100\"" .
      " ALT=\"$project logo\" BORDER=\"0\">");
?></A>
    </TD>
    <TD VALIGN="center" <?php right_width_1(); ?> >
<?php
if (!isset($body_title) || $body_title == "") {
  $body_title = $project;
}
print("      <H1 CLASS=\"doctitle\">$body_title</H1>\n");

?>
    </TD>
  </TR>

  <!-- Quick bar -->
  <TR>
    <!-- one TD taken by logo -->
    <TD HEIGHT="1" VALIGN="BOTTOM" <?php right_width_2(); ?> >
    <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="0">
    <TR>

    <TD class="quickbar"  VALIGN="top" ALIGN="left" height=16 width="1">
     <IMG SRC="<?php print($topurl);?>/images/left-e0-2.gif">
    </TD>

    <TD>
    <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="5">
      <TR>
        <?php nav_search_start(); ?>
        <TD class="quickbar" VALIGN="center" ALIGN="left">
        <?php print_topnav(); ?>
        </TD>
        <TD class="quickbar" VALIGN="center" ALIGN="right">
	<?php nav_search_make(); ?>
       </TD>
       <?php nav_search_end(); ?>
      </TR>
    </TABLE>
    </TD>

    <TD class="quickbar"  VALIGN="top" ALIGN="right" height=16 width="1">
     <IMG SRC="<?php print($topurl);?>/images/right-e0-2.gif">
    </TD>

    </TR>
    </TABLE>
    </TD>
  </TR>

  <!-- Main row -->
  <TR>
    <!-- Navigation bar -->
    <TD VALIGN="top" CLASS="navbarbox" <?php left_width_2(); ?>>
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="1" CELLSPACING="0">
        <TR>
          <TD CLASS="navbarbox">
            <TABLE WIDTH="200px" BORDER="<?php print($table_border); ?>" CELLPADDING="1" CELLSPACING="1">

<?php

// Meetings
printbutton("The MPI Forum");
printsublink("$topdir", "Home");
printbutton("Meetings");
printsublink("$topdir/Meeting_details.php", "Logistics/Agendas");
printsublink("$topdir/secretary/", "Secretary notes (past mtgs.)");

// Standards efforts
printbutton("Ongoing Technical Efforts");
printsublink("$topdir/MPI_4.0_main_page.php", "MPI 4.0 effort");
    printsublink("https://github.com/mpi-forum/", "Main MPI Github Page");
    printsublink("https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/", "Wiki (defunct)",
                 urchin_click("/outgoing/svn.mpi-forum.org/trac/mpi-forum-web/wiki/"));
printbutton("Completed Technical Efforts");
    printsublink("$topdir/MPI_3.1_main_page.php", "MPI 3.1 effort");
printsublink("$topdir/MPI_3.0_main_page.php", "MPI 3.0 effort");
printsublink("$topdir/MPI_2.2_main_page.php", "MPI 2.2 effort");
printsublink("$topdir/MPI_2.1_main_page.php", "MPI 2.1 effort");

// Forum
printbutton("Other MPI Sites");
printsublink("http://www.mpi-forum.org/", "Official MPI documents",
             urchin_click("/outgoing/www.mpi-forum.org/"));
printsublink("http://www.cs.uiuc.edu/homes/wgropp/projects/parallel/MPI/mpi-errata/", "MPI errata",
             urchin_click("/outgoing/www.cs.uiuc.edu/homes/wgropp/projects/parallel/MPI/mpi-errata/"));
printsublink("http://lists.mpi-forum.org/", "MPI Forum mailing lists",
             urchin_click("/outgoing/lists.mpi-forum.org/"));

// Black button
printbutton("");

?>
            </TABLE>
          </TD>
        </TD>
      </TABLE>
    </TD>

    <!-- Main text box -->
    <TD VALIGN="top" <?php right_width_3(); ?> >
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="6" CELLSPACING="0">
        <TR>
          <TD>
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="4" CELLSPACING="0">
      <COLGROUP>
      <COL>
        <TR>
          <TD>
          <!-- BEGIN MAIN TEXT -->
<?
if (file_exists("$topdir/sitewide_notice.php")) {
  include("$topdir/sitewide_notice.php");
}


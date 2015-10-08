<?php // -*- php -*-

// Ugh -- we have to put the "global" statements here, because 
// this file may be included in the body of a function.

global $topurl;
global $topdir;
global $mirror_dir;

function print_mirror() {
    global $server_dir;
    global $table_border;
    global $topdir;
    global $topurl;

    print("<TABLE>\n<TR>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">");

    $size = GetImageSize("$topdir/images/flag-us.gif");
    print("<IMG SRC=\"$topurl/images/flag-us.gif\" " . $size[3] . 
          " ALT=\"[Flag]\" BORDER=\"$table_border\"><BR>\n");
    print("</TD>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">");
    print("This site is located in:<br />Bloomington, IN, USA");
    print("</TD>\n</TR>\n</TABLE>\n\n");
}

function print_flag($flag) {    
    global $table_border;
    global $topdir;
    global $topurl;
    global $mirror_dir;

    $size = GetImageSize("$topdir$mirror_dir/$flag");
    print("<A HREF=\"$topurl$mirror_dir/\">" .
          "<IMG SRC=\"$topurl$mirror_dir/$flag\" " .
          $size[3] . 
          " ALT=\"[Flag]\" BORDER=\"$table_border\"></A><BR>\n");
}

function print_location($location) {
    global $topdir;

    print("This&nbsp;site&nbsp;is&nbsp;located&nbsp;in: $location\n");
}
?>
	  <!-- END MAIN TEXT -->
	  </TD>
        </TR>
      </TABLE>
          </TD>
        </TD>
      </TABLE>
    </TD>
  </TR>

  <!-- footer row -->
  <TR>
  <TD COLSPAN="2">
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="8" CELLSPACING="0">
      <COLGROUP>
      <COL>
      <COL>
      <COL>
        <TR>
          <TD class="footer" ALIGN="LEFT" height="36">
            <?php print_mirror();?>
          </TD>
          <TD class="footer" ALIGN="CENTER" height="36">
            Send corrections and updates to the MPI forum list
          </TD>
          <TD class="footer" ALIGN="RIGHT" height="36">
<?php 
print("Page last modified: " . date("j-M-Y", getlastmod()) . "<br>\n");
$year = date("Y", time());
if ($year != "2004") {
    $year = "2004-$year";
}
?>
          </TD>
        </TR>
      </TABLE>

    <!-- END MAIN TABLE -->
    </TD>
  </TR>
</TABLE>
<BR>
</BODY>
</HTML>

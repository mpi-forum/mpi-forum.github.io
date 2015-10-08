<?php // -*- php -*-
// Search the Open MPI web site, or portions of it

// Have to use an absolute URL here so that the mirrors can search as
// well (we'll be redirecting the searches back to us, but oh well...)

function nav_search_start() {
  global $topdir;
  global $topurl;
  print("<form action=\"$topurl/include/do-search.php\" topurl=\"$topurl\" method=\"post\">\n");
}


function nav_search_make() {
  global $search_name;
  global $search_subdir;
  global $search_dispatch;
  
  # Standard google search
  print("<input type=hidden name=site value=\"meetings.mpi-forum.org\">\n");

  # Dispatched search
  if (isset($search_dispatch)) {
      print("<input type=hidden name=dispatch value=\"$search_dispatch\">\n");
  }

  print("<input name=\"data\" type=\"text\" class=\"medium\" size=\"10\" onFocus=\"if( this.value==this.defaultValue ) this.value='';\" value=\"Search\" />\n");

  if (isset($search_subdir) && isset($search_name)) {
    print("<input type=radio name=restrict value=all>all&nbsp;" .
	  "<input type=radio name=restrict value=\"$search_subdir\" " .
	  "checked>$search_name");
  }

  print("
<input id=\"searchbttn\" type=\"submit\" border=\"0\" class=\"buttonred\" value=\"&nbsp;&raquo;&nbsp;\" onmouseover=\"this.style.color='#fbe249';\" onmouseout=\"this.style.color='#FFF';\" />
");
}


function nav_search_end() {
  print("</form>\n");
}

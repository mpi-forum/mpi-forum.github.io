<?
$topdir = "..";
include_once("top-nav.php");

$title = "MPI Forum Secretary Notes";
include_once("$topdir/include/header.php");

function pr($dir, $title, $location) {
    if (file_exists($dir)) {
        print ("<li> <a href=\"$dir/\">$title</a> ($location)</li>\n");
    }
}

print("<p><a href=\"../procedures-current.pdf\">Voting rules</a></p>\n\n");

print("<ul>\n");
pr("2015/12", "December 2015 meeting", "San Jose, CA, USA");
pr("2015/09", "September 2015 meeting", "Bordeaux, France");
pr("2015/06", "June 2015 meeting", "Chicago, IL, USA");
pr("2015/03", "March 2015 meeting", "Portland, OR, USA");
print("<br>\n");
pr("2014/12", "December 2014 meeting", "San Jose, CA, USA");
pr("2014/09", "September 2014 meeting", "Kobe, Japan");
pr("2014/06", "June 2014 meeting", "Chicago, IL, USA");
pr("2014/03", "March 2014 meeting", "San Jose, CA, USA");
print("<br>\n");
pr("2013/12", "December 2013 meeting", "Chicago, IL, USA");
pr("2013/09", "September 2013 meeting", "Madrid, Spain");
pr("2013/06", "June 2013 meeting", "San Jose, CA, USA");
pr("2013/03", "March 2013 meeting", "Chicago, IL, USA");
print("<br>\n");
pr("2012/10", "December 2012 meeting", "California, USA");
pr("2012/09", "September 2012 meeting", "Vienna, Austria");
pr("2012/07", "July 2012 meeting", "Chicago, IL, USA");
pr("2012/05", "May 2012 meeting", "Tsukuba, Japan");
pr("2012/03", "March 2012 meeting", "Chicago, IL, USA");
pr("2012/01", "January 2012 meeting", "San Jose, CA, USA");
print("<br>\n");
pr("2011/10", "October 2011 meeting", "California, USA");
pr("2011/09", "September 2011 meeting", "Santorini, Greece");
pr("2011/07", "July 2011 meeting", "Chicago, IL, USA");
pr("2011/05", "May 2011 meeting", "California, USA");
pr("2011/03", "March 2011 meeting", "Chicago, IL, USA");
pr("2011/02", "February 2011 meeting", "San Jose, CA, USA");
print("<br>\n");
pr("2010/12", "December 2010 meeting", "San Jose, CA, USA");
pr("2010/10", "October 2010 meeting", "Chicago, IL, USA");
pr("2010/09", "September 2010 meeting", "Stuttgart, Germany");
pr("2010/06", "June 2010 meeting", "San Jose, CA, USA");
pr("2010/05", "May 2010 meeting", "Chicago, IL, USA");
pr("2010/03", "March 2010 meeting", "San Jose, CA, USA");
pr("2010/01", "January 2010 meeting", "Atlanta, GA, USA");
print("<br>\n");
pr("2009/11", "November 2009 meeting", "Portland, OR, USA");
pr("2009/09", "September 2009 meeting", "Helsinki, Finland");
pr("2009/07", "July 2009 meeting", "Chicago, IL, USA");
pr("2009/06", "June 2009 meeting", "California Bay area, USA");
pr("2009/04", "April 2009 meeting", "Chicago, IL, USA");
pr("2009/02", "February 2009 meeting", "California Bay area, USA");
print("<br>\n");
pr("2008/12", "December 2008 meeting", "Menlo Park, CA, USA");
pr("2008/09", "September 2008 meeting", "Dublin, Ireland");
pr("2008/06", "June 2008 meeting", "Menlo Park, CA, USA");
pr("2008/04", "April 2008 meeting", "Chicago, IL, USA");
pr("2008/03", "March 2008 meeting", "Chicago, IL, USA");
pr("2008/01", "January 2008 meeting", "Chicago, IL, USA");
print("</ul>\n");

include_once("$topdir/include/footer.php");

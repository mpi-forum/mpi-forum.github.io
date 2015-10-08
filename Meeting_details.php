<?php
$topdir = ".";
include_once("top-nav.php");

$title = "MPI Forum Meeting Details";
include_once("$topdir/include/header.php");

function pr_blank() {
    print("<tr><td style=\"background-color: rgb(225, 225, 225);\" colspan=\"8\">&nbsp;</td></tr>\n");
}

function add($start_month, $start_day, $start_year,
             $end_month, $end_day, $end_year,
             $location, $logistics = "", $agenda = "",
             $tickets = "", $slides = "", $attendance = "", $votes = "") {
    global $meetings;
    $meetings[] = new meeting($start_month, $start_day, $start_year,
                              $end_month, $end_day, $end_year,
                              $location,
                              $logistics, $agenda, $tickets,
                              $slides, $attendance, $votes);
}

function pr_header()
{
?>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Dates</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Location</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Logistics</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Agenda</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Tickets</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Presentations</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Attendance</th>
      <th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Voting</th>
    </tr>
<?php
}

class meeting {
    var $start_month, $start_day, $start_year;
    var $start_mktime;
    var $end_month, $end_day, $end_year;
    var $end_mktime;
    var $location;
    var $logistics_page, $agenda_page, $tickets_page, $slides_page, $votes_page;
    function meeting($stm, $std, $sty, $em, $ed, $ey, $l, $lp, $ap, $tp, $sp, $attendance_page, $vp) {
        $this->start_month = $stm;
        $this->start_day = $std;
        $this->start_year = $sty;
        $this->end_month = $em;
        $this->end_day = $ed;
        $this->end_year = $ey;
        $this->location = $l;
        $this->logistics_page = $lp;
        $this->agenda_page = $ap;
        $this->tickets_page = $tp;
        $this->slides_page = $sp;
        $this->attendance_page = $attendance_page;
        $this->votes_page = $vp;

        $this->start_mktime = mktime(0, 0, 0, $this->start_month,
                                     $this->start_day, $this->start_year);
        $this->end_mktime = mktime(23, 59, 59, $this->end_month,
                                   $this->end_day, $this->end_year);
    }

    function printme() {
        print("<tr>\n<td>");
        print(date("F", mktime(0, 0, 0, $this->start_month, 1, 2000)));
        print(" $this->start_day");
        if ($this->start_year != $this->end_year) {
            print(", $this->start_year");
        }
        print(" - ");
        if ($this->start_month != $this->end_month) {
            print(date("F", mktime(0, 0, 0, $this->end_month, 1, 2000)));
        }
        print(" $this->end_day, $this->end_year</td>\n");
        print("<td>$this->location</td>\n");
        $this->pr1("Logistics", $this->logistics_page);
        $this->pr1("Agenda", $this->agenda_page);
        $this->pr1("Tickets", $this->tickets_page, 1);
        $this->pr1("Slides", $this->slides_page);
        $this->pr1("Attendance", $this->attendance_page);
        $this->pr1("Votes", $this->votes_page);
    }

    function pr1($title, $file, $external = 0) {
        print("<td align=center>");
        if ($external) {
            if (!empty($file)) {
                print("<a href=\"$file\">$title</a>");
            } else {
                print("&nbsp;");
            }
        } else {
            if (file_exists($file)) {
                print("<a href=\"$file\">$title</a>");
            } else if (!ereg("\.php$", $file)) {
                print($file);
            }
        }
        print("</td>\n");
    }
}

function meeting_compare($a, $b)
{
    if ($a->start_mktime < $b->start_mktime) {
        return -1;
    } else if ($a->start_mktime > $b->start_mktime) {
        return 1;
    } else {
        return 0;
    }
}

#
# Add all the meetings.  Order doesn't matter; they will be sorted before
# being displayed.
#

  add(2, 29, 2016, 3, 3, 2016,
      "Chicago, IL, USA (Microsoft)",
      "Mar_2016_logistics.php",
      "secretary/2016/03/agenda.php",
      "",
      "secretary/2016/03/slides.php",
      "secretary/2016/03/attendance.php",
      "secretary/2016/03/votes.php");

  add(6, 6, 2016, 6, 9, 2016,
      "Bellvue, WA, USA (Microsoft)",
      "Jun_2016_logistics.php",
      "secretary/2016/06/agenda.php",
      "",
      "secretary/2016/06/slides.php",
      "secretary/2016/06/attendance.php",
      "secretary/2016/06/votes.php");

  add(9, 21, 2016, 9, 23, 2016,
      "before EuroMPI in Edinburgh, UK (EPCC) (in conjunction with <a href=\"http://www.eurompi2016.ed.ac.uk/\">Euro MPI 2016</a>)",
      "Sep_2016_logistics.php",
      "secretary/2016/09/agenda.php",
      "",
      "secretary/2016/09/slides.php",
      "secretary/2016/09/attendance.php",
      "secretary/2016/09/votes.php");

  add(12, 5, 2016, 12, 8, 2016,
      "Dallas, TX, USA (IBM)",
      "Dec_2016_logistics.php",
      "secretary/2016/12/agenda.php",
      "",
      "secretary/2016/12/slides.php",
      "secretary/2016/12/attendance.php",
      "secretary/2016/12/votes.php");





  add(3, 2, 2015, 3, 5, 2015,
      "Portland, OR, USA (Microsoft)",
      "Mar_2015_logistics.php",
      "secretary/2015/03/agenda.php",
      "",
      "secretary/2015/03/slides.php",
      "secretary/2015/03/attendance.php",
      "secretary/2015/03/votes.php");

  add(6, 1, 2015, 6, 4, 2015,
      "Chicago, IL, USA (Microsoft)",
      "Jun_2015_logistics.php",
      "secretary/2015/06/agenda.php",
      "",
      "secretary/2015/06/slides.php",
      "secretary/2015/06/attendance.php",
      "secretary/2015/06/votes.php");

  add(9, 24, 2015, 9, 25, 2015,
      "after EuroMPI in Bordeaux, France (Inria) (in conjunction with <a href=\"https://eurompi2015.bordeaux.inria.fr/\">Euro MPI 2015</a>)",
      "Sep_2015_logistics.php",
      "secretary/2015/09/agenda.php",
      "",
      "secretary/2015/09/slides.php",
      "secretary/2015/09/attendance.php",
      "N/A");

  add(12, 7, 2015, 12, 10, 2015,
      "San Jose, CA, USA (Cisco)",
      "Dec_2015_logistics.php",
      "secretary/2015/12/agenda.php",
      "",
      "secretary/2015/12/slides.php",
      "secretary/2015/12/attendance.php",
      "secretary/2015/12/votes.php");


add(3, 3, 2014, 3, 6, 2014,
   "San Jose, CA, USA",
   "Mar_2014_logistics.php",
   "secretary/2014/03/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2014%2F03%2F03+California%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2014/03/slides.php",
   "secretary/2014/03/attendance.php",
   "secretary/2014/03/votes.php");

add(6, 2, 2014, 6, 5, 2014,
   "Chicago, IL, USA",
   "Jun_2014_logistics.php",
   "secretary/2014/06/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2014%2F06%2F02+Chicago%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2014/06/slides.php",
   "secretary/2014/06/attendance.php",
   "secretary/2014/06/votes.php");

add(9, 15, 2014, 9, 17, 2014,
   "Kobe, Japan (in conjunction with <a href=\"http://eurompi2014.org/\">Euro MPI/Asia 2014</a>)",
   "Sep_2014_logistics.php",
   "secretary/2014/09/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2014%2F09%2F15+Kobe%2C+Japan&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2014/09/slides.php",
   "secretary/2014/09/attendance.php",
   "secretary/2014/09/votes.php");

add(12, 8, 2014, 12, 11, 2014,
   "San Jose, CA, USA",
   "Dec_2014_logistics.php",
   "secretary/2014/12/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2014%2F12%2F08+California%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2014/12/slides.php",
   "secretary/2014/12/attendance.php",
   "secretary/2014/12/votes.php");


add(3, 11, 2013, 3, 14, 2013,
   "Chicago, IL, USA",
   "Mar_2013_logistics.php",
   "secretary/2013/03/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2013%2F03%2F11+Chicago%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2013/03/slides.php",
   "secretary/2013/03/attendance.php",
   "secretary/2013/03/votes.php");

add(6, 4, 2013, 6, 7, 2013,
   "San Jose, CA, USA",
   "Jun_2013_logistics.php",
   "secretary/2013/06/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2013%2F06%2F04+California%2C+CA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2013/06/slides.php",
   "secretary/2013/06/attendance.php",
   "secretary/2013/06/votes.php");

add(9, 11, 2013, 9, 13, 2013,
   "Madrid, Spain (in conjunction with <a href=\"http://www.eurompi2013.org/\">Euro MPI 2013</a>)",
   "Sep_2013_logistics.php",
   "secretary/2013/09/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2013%2F09%2F11+Madrid%2C+Spain&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2013/09/slides.php",
   "secretary/2013/09/attendance.php",
   "secretary/2013/09/votes.php");

add(12, 9, 2013, 12, 12, 2013,
   "Chicago, IL, USA",
   "Dec_2013_logistics.php",
   "secretary/2013/12/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2013%2F12%2F09+Chicago%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2013/12/slides.php",
   "secretary/2013/12/attendance.php",
   "secretary/2013/12/votes.php");

add(1, 9, 2012, 1, 11, 2012,
   "San Jose, CA, USA",
   "Jan_2012_logistics.php",
   "secretary/2012/01/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2012%2F01%2F09+California%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2012/01/slides.php",
   "secretary/2012/01/attendance.php",
   "secretary/2012/01/votes.php");

add(3, 5, 2012, 3, 7, 2012,
   "Chicago, IL, USA",
   "March_2012_logistics.php",
   "secretary/2012/03/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2012%2F03%2F05+Chicago%2C+USA&col=id&col=summary&col=status&col=type&col=priority&col=milestone&col=version&order=priority",
   "secretary/2012/03/slides.php",
   "secretary/2012/03/attendance.php",
   "secretary/2012/03/votes.php");

add(5, 28, 2012, 5,  30, 2012,
   "Japan - Tsukuba",
   "May_2012_logistics.php",
   "secretary/2012/05/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2012%2F05%2F28+Japan&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2012/05/slides.php",
   "secretary/2012/05/attendance.php",
   "secretary/2012/05/votes.php");

add(7, 16, 2012, 7, 19, 2012,
   "Chicago, IL, USA",
   "July_2012_logistics.php",
   "secretary/2012/07/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?priority=Had+1st+vote&status=accepted&status=assigned&status=new&status=reopened&version=MPI+3.0&milestone=2012%2F07%2F16+Chicago%2C+USA&col=id&col=summary&col=status&col=type&col=priority&col=milestone&col=version&order=priority",
   "secretary/2012/07/slides.php",
   "secretary/2012/07/attendance.php",
   "secretary/2012/07/votes.php");

add(9, 20, 2012, 9, 21, 2012,
   "Vienna, Austria",
   "Sept_2012_logistics.php",
   "secretary/2012/09/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2012%2F09%2F19+Vienna%2C+Austria&col=id&col=summary&col=version&col=milestone&col=priority&col=status&col=type&order=priority",
   "secretary/2012/09/slides.php",
   "secretary/2012/09/attendance.php",
   "secretary/2012/09/votes.php");

add(12, 3, 2012, 12, 6, 2012,
   "Bay Area, CA, USA",
   "Dec_2012_logistics.php",
   "secretary/2012/12/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&milestone=2012%2F12%2F03+California%2C+USA&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&order=priority",
   "secretary/2012/12/slides.php",
   "secretary/2012/12/attendance.php",
   "secretary/2012/12/votes.php");


add(10, 24, 2011, 10, 26, 2011,
   "Chicago, IL, USA",
   "Oct_2011_logistics.php",
   "secretary/2011/10/agenda.php",
   "",
   "secretary/2011/10/slides.php",
   "secretary/2011/10/attendance.php",
   "secretary/2011/10/votes.php");

add(9, 22, 2011, 9, 24, 2011,
   "Santorini, Greece (in conjunction with <a href=\"http://www.eurompi2011.org/\">Euro MPI 2011</a>)",
   "Sept_2011_logistics.php",
   "secretary/2011/09/agenda.php",
   "",
   "secretary/2011/09/slides.php",
   "secretary/2011/09/attendance.php",
   "secretary/2011/09/votes.php");

add(7, 18, 2011, 7, 20, 2011,
   "Chicago, IL, USA",
   "July_2011_logistics.php",
   "secretary/2011/07/agenda.php",
   "",
   "secretary/2011/07/slides.php",
   "secretary/2011/07/attendance.php",
   "secretary/2011/07/votes.php");

add(5, 9, 2011, 5, 11, 2011,
   "Cisco, Milpitas/San Jose, CA, USA",
   "May_2011_logistics.php",
   "secretary/2011/05/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&order=priority&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&milestone=2011/05/09+California,+USA",
   "secretary/2011/05/slides.php",
   "secretary/2011/05/attendance.php",
   "secretary/2011/05/votes.php");

add(3, 28, 2011, 3, 30, 2011,
   "Chicago",
   "Mar_2011_logistics.php",
   "secretary/2011/03/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&order=priority&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&milestone=2011/03/28+Chicago,+USA",
   "secretary/2011/03/slides.php",
   "secretary/2011/03/attendance.php",
   "secretary/2011/03/votes.php");

add(2, 7, 2011, 2, 9, 2011,
   "Cisco, Milpitas/San Jose, CA, USA ",
   "Feb_2011_logistics.php",
   "secretary/2011/02/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&order=priority&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&milestone=2011/02/07+California,+USA",
   "secretary/2011/02/slides.php",
   "secretary/2011/02/attendance.php",
   "secretary/2011/02/votes.php");

add(12, 6, 2010, 12, 8, 2010,
   "Cisco, San Jose, CA, USA",
   "Dec_2010_logistics.php",
   "secretary/2010/12/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&order=priority&col=id&col=summary&col=milestone&col=status&col=type&col=priority&col=version&milestone=2010/12/06+California,+USA",
   "secretary/2010/12/slides.php",
   "secretary/2010/12/attendance.php",
   "secretary/2010/12/votes.php");

add(10, 11, 2010, 10, 13, 2010,
   "Chicago, IL",
   "Oct_2010_logistics.php",
   "secretary/2010/10/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=accepted&status=assigned&status=new&status=reopened&order=priority&col=id&col=summary&col=status&col=type&col=priority&col=milestone&col=version&milestone=2010/10/11+Chicago,+USA",
   "secretary/2010/10/slides.php",
   "secretary/2010/10/attendance.php",
   "secretary/2010/10/votes.php");

add(9, 16, 2010, 9, 18, 2010,
   "Stuttgart, Germany, in conjunction with Euro PVM/MPI 2010, Sep. 12-15",
   "Sept_2010_logistics.php",
   "secretary/2010/09/agenda.php",
   "",
   "secretary/2010/09/slides.php",
   "secretary/2010/09/attendance.php",
   "secretary/2010/09/votes.php");

add(6, 14, 2010, 6, 16, 2010,
   "Cisco, San Jose, CA, USA",
   "Jun_2010_logistics.php",
   "secretary/2010/06/agenda.php",
   "",
   "secretary/2010/06/slides.php",
   "secretary/2010/06/attendance.php",
   "N/A");

add(5, 3, 2010, 5, 5, 2010,
   "Microsoft, Chicago, IL, USA",
   "May_2010_logistics.php",
   "secretary/2010/05/agenda.php",
   "",
   "secretary/2010/05/slides.php",
   "secretary/2010/05/attendance.php",
   "N/A");

add(3, 8, 2010, 3, 10, 2010,
   "Cisco, San Jose, CA",
   "Mar_2010_logistics.php",
   "secretary/2010/03/agenda.php",
   "",
   "secretary/2010/03/slides.php",
   "secretary/2010/03/attendance.php",
   "N/A");

add(1, 19, 2010, 1, 21, 2010,
   "JW Marriott Buckhead - Atlanta, Georgia",
   "Jan_2010_logistics.php",
   "secretary/2010/01/agenda.php",
   "",
   "secretary/2010/01/slides.php",
   "secretary/2010/01/attendance.php",
   "N/A");

add(11, 11, 2009, 11, 13, 2009,
   "Portland, OR",
   "Nov_2009_logistics.php",
   "secretary/2009/11/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2009%2F11%2F11+Portland",
   "secretary/2009/11/slides.php",
   "secretary/2009/11/attendance.php",
   "secretary/2009/11/votes.php");

add(9, 2, 2009, 9, 4, 2009,
   "Helsinki, Finland",
   "Sep_2009_logistics.php",
   "secretary/2009/09/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2009%2F09%2F02+Helsinki",
   "secretary/2009/09/slides.php",
   "secretary/2009/09/attendance.php",
   "secretary/2009/09/votes.php");

add(7, 27, 2009, 7, 29, 2009,
   "Chicago",
   "Jul_2009_logistics.php",
   "secretary/2009/07/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2009%2F07%2F27+Chicago",
   "secretary/2009/07/slides.php",
   "secretary/2009/07/attendance.php",
   "secretary/2009/07/votes.php");

add(6, 8, 2009, 6, 10, 2009,
   "Sun, Menlo Park, CA",
   "Jun_2009_logistics.php",
   "secretary/2009/06/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2009%2F06%2F08+California",
   "secretary/2009/06/slides.php",
   "secretary/2009/06/attendance.php",
   "secretary/2009/06/votes.php");

add(4, 6, 2009, 4, 8, 2009,
   "Microsoft Corp., Chicago, IL",
   "Apr_2009_logistics.php",
   "secretary/2009/04/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=priority&col=version&milestone=2009%2F04%2F06+Chicago",
   "secretary/2009/04/slides.php",
   "secretary/2009/04/attendance.php",
   "secretary/2009/04/votes.php");

add(2, 9, 2009, 2, 11, 2009,
   "Cisco, San Jose, CA",
   "Feb_2009_logistics.php",
   "secretary/2009/02/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2009%2F02%2F09+San+Jose",
   "secretary/2009/02/slides.php",
   "secretary/2009/02/attendance.php",
   "secretary/2009/02/votes.php");

add(12, 15, 2008, 12, 17, 2008,
   "Sun, Menlo Park, CA",
   "Dec_2008_logistics.php",
   "secretary/2008/12/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2008%2F12%2F15+Menlo+Park",
   "secretary/2008/12/slides.php",
   "secretary/2008/12/attendance.php",
   "secretary/2008/12/votes.php");

add(10, 20, 2008, 10, 22, 2008,
   "Marriott O'Hare, Chicago, IL",
   "Oct_2008_logistics.php",
   "secretary/2008/10/agenda.php",
   "https://svn.mpi-forum.org/trac/mpi-forum-web/query?status=assigned&status=new&status=reopened&group=priority&order=priority&col=id&col=summary&col=status&col=type&col=version&milestone=2008%2F10%2F20+Chicago",
   "secretary/2008/10/slides.php",
   "secretary/2008/10/attendance.php",
   "N/A");

add(9, 3, 2008, 9, 5, 2008,
   "University College Park, Dublin, Ireland",
   "Sept_2008_logistics.php",
   "secretary/2008/09/agenda.php",
   "",
   "secretary/2008/09/slides.php",
   "secretary/2008/09/attendance.php",
   "secretary/2008/09/votes.php");

add(6, 30, 2008, 7, 2, 2008,
   "Sun, Menlo Park, CA",
   "June_2008_logistics.php",
   "secretary/2008/06/agenda.php",
   "",
   "secretary/2008/06/slides.php",
   "secretary/2008/06/attendance.php",
   "secretary/2008/06/votes.php");

add(4, 28, 2008, 4, 30, 2008,
   "Microsoft's Downtown Facility, Chicago, IL",
   "April_2008_logistics.php",
   "secretary/2008/04/agenda.php",
   "",
   "secretary/2008/04/slides.php",
   "secretary/2008/04/attendance.php",
    "secretary/2008/04/votes.php");

add(3, 10, 2008, 3, 12, 2008,
    "Marriott O'Hare, Chicago, IL",
    "March_2008_logistics.php",
    "secretary/2008/03/agenda.php",
    "",
    "secretary/2008/03/slides.php",
    "secretary/2008/03/attendance.php",
    "<a href='http://www.cs.uiuc.edu/homes/wgropp/projects/parallel/MPI/mpi-errata/ballot3.pdf'>Ballot 3</a>");

add(1, 14, 2008, 1, 16, 2008,
    "Marriott O'Hare, Chicago, IL",
    "",
    "secretary/2008/01/agenda.php",
    "",
    "secretary/2008/01/slides.php",
    "secretary/2008/01/attendance.php",
    "secretary/2008/01/votes.php");

#
# Sort the meetings
#

usort($meetings, "meeting_compare");

#
# Print the upcoming meetings
#

print("\n\n<h3>Upcoming face-to-face meetings:</h3>\n\n");

pr_header();
$t = time();
$last_year = 0;
for ($i = 0; $i < sizeof($meetings); ++$i) {
    if ($t < $meetings[$i]->end_mktime) {
        if ($last_year > 0 && $last_year != $meetings[$i]->end_year) {
            pr_blank();
        }
        $meetings[$i]->printme();
        $last_year = $meetings[$i]->end_year;
    }
}

print("</table>\n\n");

#
# Print the past meetings
#

print("<h3>Past meetings:</h3>\n\n");

pr_header();

$last_year = 0;
for ($i = sizeof($meetings) - 1; $i >= 0; --$i) {
    if ($t >= $meetings[$i]->end_mktime) {
        if ($last_year > 0 && $last_year != $meetings[$i]->end_year) {
            pr_blank();
        }
        $meetings[$i]->printme();
        $last_year = $meetings[$i]->end_year;
    }
}

print("</table>\n\n");

#
# Done!
#

include_once("$topdir/include/footer.php");

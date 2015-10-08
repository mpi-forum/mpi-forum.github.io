<?
$topdir = ".";
include_once("top-nav.php");

$title = "MPI 3.1 Standardization Effort";
include_once("$topdir/include/header.php");
?>

<h3>Status:</h3>

<P>
The standardization of MPI 3.1 is complete and the new version of the standard is available at <a href="http://www.mpi-forum.org/docs/docs.html">MPI Forum Document Page</A>.
</P>

<h2>Scope:</h2>

<p>Provide small additions to MPI 3.0 and integrate them together with identified errata items into a new version of the MPI standard.</p>

<hr>

<h2>Note</h2>
<p>
The information below reflects the state of the MPI 3.1 efforts up to the ratification on June 4th 2015. It is no longer maintained, but kept for historical reasons.
</p>

<hr>

<h2>Timeline:</h2>
<p>
As of the December 2014 meeting, we completed all additions to the MPI 3.1 standard and the expectation was that we vote on the standard at the March 2015 meeting. However, due to technical issues found, this was postponed and is now scheduled for the June 2015 meeting. Here is the timeline for this process:
<ul>
<li>Starting Dec. 2014: Start integrating passed tickets into golden copy</li>
<ul><li>Has to be done by chapter committee chairs</li>
<li>Changes to be reviewed by chapter committees</li>
<li>Text edits must follow <a href="http://meetings.mpi-forum.org/2014-12-instructions.pdf">http://meetings.mpi-forum.org/2014-12-instructions.pdf</a>
<li>The location of the SVN repo listed in the instructions</li>
<li>WARNING: start with current version of the golden copy (Fortran changes already in)</li>
</ul>
<li>By February 2nd (4 weeks before MPI Forum)</li>
<ul><li>Chapter committee chairs publish draft of each chapter</li>
<li>Commit to golden copy for MPI 3.1 in the repo</li>
<li>Some kind of diff with old chapter (what ever works for the chapter)</li>
<li>To be sent to MPI forum email list</li>
<li>Full draft will be on the forum page for review</li>
</ul>
<li>By February 16th (2 weeks before MPI Forum)</li>
<ul><li>Chapter committees collect and integrate feedback</li>
<li>Chapter committee chairs publish final chapter proposal for MPI 3.1</li>
</ul>
<li>Starting March 2nd (MPI forum meeting in Portland)</li>
<ul><li>Reading of all chapters (i.e., going through the diffs)</li>
<li>Creation of list of open issues</li>
</ul>
<li>By May 4th (4 weeks before MPI Forum)</li>
<ul><li>Chapter committees finish fixing open issues</li>
<li>Chapter committee chairs publish final chapter proposal for MPI 3.1</li>
</ul>
<li>By May 11th (3 weeks before MPI Forum)</li>
<ul><li>MPI Editor publishes final MPI 3.1 draft</li>
</ul>
<li>Starting June 1st  (MPI forum meeting in Chicago)</li>
<ul><li>Discussion of fixes to open issues</li>
<li>Final vote on document</li>
</ul>
</ul>

<h2>Voting Rules:</h2>

On March 14th 2013, the MPI forum voted for <A HREF="procedures-2013-03-15.pdf">new voting rules</a> (effective March 15th, 2013). Additionaly, there is a current proposal for a <A HREF="procedures-2015-06-proposal.pdf">new edition of this document</a>, which will be brought up for a vote at the Chicago meeting.

<h2>Document Intergration Process and Chaper Committee Responsibilities</h2>

<p>
Chapter committees will be responsible for integrating and reviewing all changes into the standard document. For already voted in tickets, errata items, and ticket 0 changes, this process can start immediately, at the latest, though, this work needs to be done between the September and December meetings. For this, one member of eacg chapter committee (the chair a designee) will have write access to the MPI 3.1 tree.
</p>

<p>
We decided to no longer use the Latex change macros for adding the new text, since those led to bad document quality (feel free to still use them for working group documents and ticket presentations - I am just talking about the main document). Instead we will rely on \"svn diff\" for change tracking. To make this work, please don't reflow any text! Also, please make sure you follow the document instructions contained in the MPI document repository (see README) to make sure we get a consistent document.
</p>

<p>
At the end of the process, every chapter committee chair is expected to provide:
<ul>
<li>A new PDF of the chapter with all changes integrated (clean document, without any change bars)</li>
<li>An SVN diff document (informal to help people track things)</li>
<li>A side document detailing the changes (tickets, errata item, ticket 0 items beyond typos, e.g., examples)</li>
</ul>
These documents need to be reviewed by the chapter committee and made available at least two weeks before the forum meeting.
</p>

<p>
A longer description of these procedures and documentation on how to write/build the MPI document is available <a href="2014-12-instructions.pdf">here</a>.
</p>

<h2>Chapter Committees</h2>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">#</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Chapter</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Chair</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Members</th>
</tr>

<?php
  
  function chapter($num,$title,$chair,$members) {
    print("<tr><td>".$num."</td><td>".$title."</td><td>".$chair."</td><td>".$members."</td></tr>\n");
  }

  
  chapter("","Front Matter","Bill Gropp","Rolf Rabenseifner, Martin Schulz");  // todo
  chapter("1","Introduction","Bill Gropp","Rolf Rabenseifner, Martin Schulz"); // todo
  chapter("2","MPI Terms and Conventions","Rolf Rabenseifner","Bill Gropp, Martin Schulz, Dan Holmes, Jim Dinan");  //todo
  chapter("3","Point to Point Communcation","Dan Holmes", "Bill Gropp, Sayantan Sur, Rich Graham, Pavan Balaji");  //complete
  chapter("4","Datatypes","George Bosilca","Jeff Hammond, Rich Graham, David Solt, Bill Gropp, Jim Dinan"); //complete
    chapter("5","Collective Communication","Torsten Hoefler","George Bosilca, Purushotham Bangalore, Jeff Hammond");  // asked more
  chapter("6","Groups, Contexts, Communicators, Caching","Pavan Balaji","Bill Gropp, Sayantan Sur, Sreeram Potluri"); // complete
    chapter("7","Process Topologies","Torsten Hoefler","Rolf Rabenseifner, Purushotham Bangalore, Chulho Kim, Pavan Balaji"); // need one more
    chapter("8","MPI Environmental Management","George Bosilca","Martin Schulz, Rolf Rabenseifner, Chulho Kim"); // need one more
  chapter("9","The Info Object","Jeff Hammond","Torsten Hoefler, David Solt, Pavan Balaji");  // need one more, asked
  chapter("10","Process Creation and Mangement","David Solt","Jeff Hammond, Wesley Bland, Howard Pritchard"); // asked
  chapter("11","One-Sided Communication","Bill Gropp","Pavan Balaji, Torsten Hoefler, Rajeev Thakur, Sayantan Sur"); // complete
  chapter("12","External Interfaces","Pavan Balaji","Dries Kimpe, Jeff Hammond, Jim Dinan, Aurélien Bouteiller"); //complete
  chapter("13","I/O","Quincey Koziol","Mohamad Chaarawi, Rajeev Thakur, Dries Kimpe"); // asked for chair
  chapter("14","Tool Support","Kathryn Mohror","Martin Schulz, Marc-Andre Hermanns, Adam Moody"); // asked  more
  chapter("15","Deprecated Functions","Rolf Rabenseifner",""); // todo
  chapter("16","Removed Interfaces","Rolf Rabenseifner",""); // todo
  chapter("17","Language Bindings","Jeff Squyres","Jeff Hammond, Rolf Rabenseifner, Craig Rasmussen"); // complete
  chapter("A","Language Bindings Summary","Rolf Rabenseifner","Jeff Hammond, Craig Rasmussen"); // asked
  chapter("B","Change-Log","Rolf Rabenseifner",""); // todo
?>
</table>


<h2>Draft Chapters for MPI 3.1 (as of the March 2015 Meeting)</h2>

Note, sections marked with "rev" are revised versions of the chapters submitted after the two week mark. We will discuss the implications of these chapters at the meeting.

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">#</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Chapter</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Contact</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Draft Text</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Diff Text</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Tickets</th>
</tr>

<?php

    function link31($filename) {
        if (file_exists($filename)) {
            print("<a href=\"$filename\">PDF</a>");
        }
    }

    function linkme($prefix, $num) {
        link31("mpi31-docs/chapter-".$prefix."-".$num.".pdf");
    }

    function chapter31($num,$title,$contact,$tickets, $diff) {
        print("<tr><td>".$num."</td><td>".$title."</td><td>".$contact."</td><td>");
        linkme("draft",$num);
        print("</td><td>");
        if ($diff != "") {
            print("<a href=\"$diff\">Gist diff</a>\n");
        } else {
            linkme("diff",$num);
        }
        print("</td><td>");
        if ($tickets != "") {
            $tickets_array = preg_split("/,/", $tickets);
            sort($tickets_array);
            $first = 1;
            foreach ($tickets_array as $t) {
                if (!$first) {
                    printf(", ");
                }
                printf("<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$t\">#$t</a>");
                $first = 0;
            }
        }
    }
    
    function add_line($plain) {
        print("<br>".$plain);
    }

    function add_link($plain,$link) {
        print("<br><a href=".$link.">".$plain."</a>");
    }
    
    function add_doc($plain,$doc) {
        print("<br><a href=mpi31-docs/".$doc.">".$plain."</a>");
    }
    
    function finish_line() {
        print("</td></tr>\n");
    }

    
    chapter31("0","Front Matter","Bill Gropp","","");
    add_line("Version number changed");
    add_line("Credits need to be updated");
    finish_line();
    chapter31("0rev","Front Matter","Bill Gropp","","");
    add_line("Version, Difference to 3.0 and credits added");
    finish_line();
    chapter31("1","Introduction","Bill Gropp","","");
    add_line("no tickets / no diff since r1750");
    chapter31("1rev","Introduction","Bill Gropp","","");
    add_line("Added background");
    finish_line();
    chapter31("2","MPI Terms and Conventions","Rolf Rabenseifner","421,431,447,449,450,451,452,453,455,349,404","https://gist.github.com/348be66d82fc5ba71d36");
    add_line("Not affected by #388 / BIND(C) errata");
    finish_line();
    chapter31("3","Point to Point Communcation","Dan Holmes","446,388,415,424,388","");
    finish_line();
    chapter31("4","Datatypes","George Bosilca","102,349,404,421,431,443,388", "https://gist.github.com/bosilca/1716cbc1e71a3dd0baf4");
    finish_line();
    chapter31("5","Collective Communication","Torsten Hoefler","388","");
    finish_line();
    chapter31("6","Groups, Contexts, Communicators, Caching","Pavan Balaji","388,345","");
    finish_line();
    chapter31("7","Process Topologies","Torsten Hoefler","388,419,420","https://gist.github.com/27050c4a500c3422bcb2");
    finish_line();
    chapter31("7rev","Process Topologies","Torsten Hoefler","","http://htor.inf.ethz.ch/sec/chap-topol-diff-r1806.diff");
    add_line("removed the 20-year old outdated reference to EXPRESS; slight wording change in advice to users on MPI_WEIGHTS_EMPTY; slight wording change in example of graph_neighbors; slight wording change in first sentence of 7.5.6");
    add_link("Diff for only whitespace changes","http://htor.inf.ethz.ch/sec/chap-topol-diff-r2003.diff");
    finish_line();
    chapter31("8","MPI Environmental Management","George Bosilca","388,357,390","");
    finish_line();
    chapter31("8rev","MPI Environmental Management","George Bosilca","","https://gist.github.com/b1f7e68510eea45444df");
    add_line("Switched to subversion 3.1 (svn r2013)");
    finish_line();
    chapter31("9","The Info Object","Jeff Hammond","388","");
    finish_line();
    chapter31("10","Process Creation and Mangement","David Solt","388","");
    finish_line();
    chapter31("11","One-Sided Communication","Bill Gropp","348,350,355,359,362,367,369,349,402,433,458,413,388,390","");
    add_line("SVN Revisions: 348, 350, 355, 359, 362, 367 - r 1767; 369 - r 1962; 349/402 - r 1963; 433 - r 1964; 458 - r 1955; 413 - r 1965");
    add_doc("Additional Changes: ","one-side-2.pdf");
    add_doc("Diff for additional changes: ","r1767-cur.txt");
    add_line("#388 implemented in r1835 and r1933");
    finish_line();
    chapter31("12","External Interfaces","Pavan Balaji","388,357","");
    finish_line();
    chapter31("13","I/O","Quincey Koziol","273,388,440","https://svn.mpi-forum.org/trac/mpi-forum-web/attachment/ticket/273/ticket-273.diff");
    add_line("Note 440 is still missing in the chapter draft","");
    finish_line();
    chapter31("14","Tool Support","Kathryn Mohror","354,377,378,383,385,386,387,391,394,400,405,406,388", "https://gist.github.com/kathrynmohror/83b5c1f45b13fe3b11a6");
    finish_line();
    chapter31("15","Deprecated Functions","Rolf Rabenseifner","","");
    add_line("no tickets / no diff since r1750");
    finish_line();
    chapter31("16","Removed Interfaces","Rolf Rabenseifner","","");
    add_line("no tickets / no diff since r1750");
    finish_line();
    chapter31("17","Language Bindings","Jeff Squyres","444,441,393,445,388,345,403", "https://gist.github.com/jsquyres/f2cb363dbb19b252b47c");
    finish_line();
    chapter31("A","Language Bindings Summary","Rolf Rabenseifner","345,347,354,369,377,388,389,400","https://gist.github.com/77769791d5c39ea651c2");
    add_line("Missing #390, see revisions");
    add_doc("Annotated document: appA3-all-mpif08-routines","appA3-all-mpif08-routines.pdf");
    add_doc("Annotated document: appA234_MPI_CONVERSION_FN_NULL-annotated","appA234_MPI_CONVERSION_FN_NULL-annotated.pdf");
    add_doc("Annotated document: appA.3.4-f08-annotated","appA.3.4-f08-annotated.pdf");
    add_doc("Annotated document: appLang-Const-annotated","appLang-Const-annotated.pdf");
    finish_line();
    chapter31("Arev","Language Bindings Summary","Rolf Rabenseifner","390","");
    add_line("#390 added as of r2009");
    finish_line();
    chapter31("B","Change-Log","Rolf Rabenseifner","345,349,402,404,421,350,355,362,369,377,378,383,386,388,389,391,400,424,273,357,415,419","https://gist.github.com/68369a61a99082b67c0f");
    finish_line();
    chapter31("Brev","Change-Log","Rolf Rabenseifner","","");
    add_line("Fixed page numbers in chancge log");
    finish_line();
    ?>
</table>


<h2>Potential issues/changes to completed tickets - to be discussed</h2>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Ticket</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Chapter</th>
<th align=center style="background-color: rgb(10, 10, 200); color: rgb(255, 255, 255);">Issue</th>
</tr>

<?php
    
    function issue($ticket,$chapter,$text) {
        print("<tr><td>");
        if ($ticket>0) { print("<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$ticket\">$ticket</a>"); }
        print("</td><td>".$chapter."</td><td>".$text."</td></tr>\n");
    }
    
    function issue_link($ticket,$chapter,$text,$link) {
        print("<tr><td>");
        if ($ticket>0) { print("<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$ticket\">$ticket</a>"); }
        print("</td><td>".$chapter."</td><td>".$text." (see: <a href=".$link.">".$link."</a>)</td></tr>\n");
    }
    
    issue("","0","Changes to frontmatter/credits");
    issue("","1","Changes to chapter 1");
    issue(453,"2","TBD - Proper distinction between declared vs. defined functions for the use of PMPI - discussion to back out #453");
    issue("","2","READ - Added Bind-C back into text, which is removed incorrectly - r2008 - error was in implementing the ticket");
    issue("","4","READ - restoring BIND(C) back to MPI-3.0 page 106 lines 14 and 24 - error was in implementing the ticket");
    issue("","7","READ - Changes to chapter 7, discussed an approved as chapter committee changes");
    issue("","8","READ - Changes to chapter 8");
    issue("390","8","READ - Updates for Annex A4.6 and A4.9");
    issue("357","8","READ - MPI_Get_version and MPI_Get_library_version were done only partially.");
    issue("","8","READ - New subversion 3.1 in (2x) MPI_SUBVERSION and MPI_GET_VERSION");
    issue("","8","TBD - Sentence on thread safety - three times in the text - should change from from threads to from multiple thread - requires change in 12.4 as well");
    issue_link("","11","Open issues in RMA - Bill will discuss the details","https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/mpi3-rma-agenda");
    issue("390","11","Updates for Annex A4.6 and A4.9");
    issue("357","11","MPI_Get_version and MPI_Get_library_version were done only partially.");
    issue("357","12","TBD - added line in the CC, which causes discussion");
    issue(440,"13","READ - Preferred way to cross reference - ticket 0, but unclear which option was intended - discussion on how to implement ticket");
    issue(377,"14","READ/TBD - Missing statement that an error happens if no variable >>>in that class<<< is found - needs to be fixed");
    issue("","17","READ - restoring BIND(C) back to MPI-3.0 - error was in implementing the ticket");
    issue("","A","READ - Changes to annex A, only #390, just simple bug fix");
    issue("","B","READ - Changes to annex B - decided on keeping the full log");
    issue("","B","READ - font fix");
    issue("","B","TBD - B 2.1, bullet 5, add editorial note that we have now 13.5.3 instead of 13.5.2");
    issue("","B","TBD - two RMA tickets missing in change log");
    issue("","","TBD - White space control for all chapters (r1673 and later)");
    issue_link("","","White space control for all chapters (r1673 and later)","mpi31-docs/mpi-report-r2030.pdf");
    ?>
</table>


<h2>Draft Chapters for MPI 3.1 (as of the June 2015 Meeting)</h2>

Updates to the MPI standard, following the list of open issues, are published as part of the agenda for the June 2015 meeting.

<!--
453
-->

<?PHP

include_once("$topdir/include/footer.php");

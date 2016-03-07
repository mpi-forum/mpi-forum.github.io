<?
$topdir = ".";
include_once("top-nav.php");

$title = "MPI 4.0 Standardization Effort";
include_once("$topdir/include/header.php");
?>

<h2>Scope:</h2>

<p>The MPI 4.0 standardization efforts aim at adding new techniques, approaches, or concepts to the MPI standard that will help MPI address the need of current and next generation applications and architectures. In particular, the following additions are currently being proposed and worked on:
<ul>
<li>Extensions to better support hybrid programming models</li>
<li>Support for fault tolerance in MPI applications</li>
<li>Persistent collectives</li>
<li>Performance Assertions and Hints</li>
<li>RMA/One-sided communication</li>
<li>
</ul>

Additionally, several working groups are working on new ideas and concepts, incl.
<ul>
<li>Active messages</li>
<li>Stream messaging</li>
<li>Rework of the MPI profiling interface</li>
<li>Extensions to MPI_T</li>
<li>Generalized requests</li>
<li>Hybrid MPI+X concerns (esp. MPI+CAF)</li>
<li>Send cancelation</li>
<li>Attribute callback</li>
<li>Large count</li>
</ul>

Further, the tools WG is discussing additional 3rd party tool interfaces, which are generally published as side documents:
<ul>
<li>Handle introspection from debuggers</li>
<li>Debug DLL detection and identificattion</li>
</ul>

Note, though, that all of these efforts or new concepts are currently only being discussed or proposed and there is no guarantee that any particular one will be included in any upcoming MPI version.

</p>

<h2>Process for proposing new ideas for MPI 4.0</h2>

<p>The forum encourages that new items will be brought forward through the respective working group. All working groups are listed below. The working group will the place for discussion, the creation of a preliminary proposal as well as drive the socialization of the idea in the forum once a certain level of maturity has been reached. Once the idea is mature enough, the working group will help to develop a formal proposal, which includes the proposed text as well as entry in the MPI ticket management system linked of the Wiki. Once complete and deemed ready by the working group, the proposal goes through the MPI forum voting process, which is detailed in the next section.
</p>

<h2>Voting Rules:</h2>

On June 4th 2015, the MPI forum voted for <A HREF="procedures-current.pdf">new voting rules</a> (effective June 4th, 2015).

<h2>Working Groups:</h2>

The following working groups are currently participating in the MPI 4.0 efforts.
For more information on each working group, current topics, and meeting schedules, 
please follow the links to the respective Wiki pages.

<h4>Collective Communication and Topology (<A HREF="https://github.com/mpiwg-coll">wiki page</A>)</h4>
<ul>
<li>Lead: Torsten Hoefler, Andrew Lumsdaine</li>
<li>Scope:

The main goals of the working group are to discuss the modernization of the collective communication interface to reflect
the changed environment and improve the capability of
MPI to run efficiently on large-scale computing systems. Our efforts also affect communicator management MPI topologies.</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/CollectivesWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Fault Tolerance (<A HREF="https://github.com/mpiwg-ft">wiki page</A>)</h4>
<ul>
<li>Leads: Wesley Bland, Aur&eacute;lien Bouteiller and Rich Graham</li>
<li>Scope: To define any additional support needed in the MPI standard to enable
implementation of portable Fault Tolerant solutions for MPI based
applications.</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Fortran</h4>
<ul>
<li>Lead: Craig Rasmussen</li>
<li>Scope: To investigate new Fortran language bindings that overcome the problems and limitations of the Fortran 90 MPI bindings.</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FtnWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Generalized Requests</h4>
<ul>
<li>Lead: Fab Tillier</li>
<li>Scope: Redefine the generalized requests interface. A more flexible interface
between the user defined requests and the MPI library is required in
order to allow the provider of the generalized request to integrate a
progress function inside the MPI library. The ultimate goal is to allow
the generalized requests progress to be done without a special test or
wait function.
</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/GeneralizedRequestsWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Hybrid (<A HREF="https://github.com/mpiwg-hybrid">wiki page</A>)</h4>
<ul>
<li>Lead: Pavan Balaji and Jim Dinan</li>
<li>Scope:  Ensure that MPI has the features necessary to facilitate efficient hybrid programming and
investigate what changes are needed in MPI to better support traditional thread interfaces (e.g., Pthreads, OpenMP),
emerging interfaces (like TBB, OpenCL, CUDA, and Ct), and PGAS (UPC, CAF, etc.). </li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid">Old Wiki page for reference</A></li>
</ul>

<h4>I/O (WG on hold)</h4>
<ul>
<li>Lead: Quincey Koziol and Mohamad Chaarawi</li>
<li>Scope:</bf> Definition of API extensions for I/O operations</li>
</ul>

<h4>Large Counts (<A HREF="https://github.com/mpiwg-large-count">wiki page</A>)</h4>
<ul>
<li>Lead: Jeff Hammond</li>
<li>Scope:
Understanding and fixing the issues associated with integer
counts and displacements.
</ul>

<h4>Persistence (<A HREF="https://github.com/mpiwg-persistence">wiki page</A>)</h4>
<ul>
<li>Lead: Anthony Skjellum</li>
<li>Scope:</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Persistence">Old Wiki page for reference</A></li>
</ul>

<h4>Point to Point Communication (<A HREF="https://github.com/mpiwg-p2p">wiki page</A>)</h4>
<ul>
<li>Lead: Rich Graham and Dan Holmes</li>
<li>Scope: To re-examine the MPI peer communication semantics and interface, and
consider additions and/or changes needed to better support
point-to-point data movement within MPI.
</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/PtpWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Remote Memory Access (<A HREF="https://github.com/mpiwg-rma">wiki page</A>)</h4>
<ul>
<li>Lead: Bill Gropp and Rajeev Thakur</li>
<li>Scope: To re-examine the MPI RMA interface and consider additions and or
changes needed to better support the one-sided programming model within
MPI.</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/RmaWikiPage">Old Wiki page for reference</A></li>
</ul>

<h4>Sessions (<A HREF="https://github.com/mpiwg-sessions/sessions-issues/wiki">wiki page</A>)</h4>
<ul>
<li>Lead: Jeff Squyres</li>
<li>Scope: Expore alternate concepts to MPI_Init and MPI_Finalize</li>
</ul>

<h4>Tools (<A HREF="https://github.com/mpiwg-tools">wiki page</A>)</h4>
<ul>
<li>Lead: Kathryn Mohror and Marc-Andre Hermanns</li>
<li>Scope: Definition of interfaces for debugging and performance tools</li>
<li><A HREF="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools">Old Wiki page for reference</A></Li>
</ul>

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


<?PHP

include_once("$topdir/include/footer.php");

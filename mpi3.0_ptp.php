<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("Point-to-point WG", "$topdir/mpi3.0_ptp.php");

$title = "MPI 3.0 Point-to-Point Communications Working Group";
include_once("$topdir/include/header.php");
?>

<h3>Effort Lead: Ron Brightwell, Sandia National Laboratory</h3>


<h3>Scope:</h3>
To re-examine the MPI peer communication semantics and interface, and
consider additions and/or changes needed to better support
point-to-point data movement within MPI.

<h3>Initiating Organizations:</h3>


<ul>


  <li>MPI Forum Steering Committee</li>


</ul>

<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/PtpWikiPage">Working Group Wiki Pages</a>

<?
include_once("$topdir/include/footer.php");

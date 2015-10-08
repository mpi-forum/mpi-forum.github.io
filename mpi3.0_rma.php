<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("RMA WG", "$topdir/mpi3.0_rma.php");

$title = "MPI 3.0 Remote Memory Access Working Group";
include_once("$topdir/include/header.php");
?>

<h3>Effort Leads:&nbsp;</h3>
<ul>
  <li>
    <h3>Bill Gropp, University of Illinois, Urbana-Champaign</h3>
  </li>
  <li>
    <h3>Rajeev Thakur, Argonne National Laboratory</h3>
  </li>
</ul>



<h3>Scope:</h3>



To re-examine the MPI RMA interface and consider additions and or
changes needed to better support the one-sided programming model within
MPI.
<h3>Initiating Organizations:</h3>



<ul>



  <li>The MPI Forum Steering Committee</li>



</ul>


<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/RmaWikiPage">Working Group Wiki Pages</a>

<?
include_once("$topdir/include/footer.php");

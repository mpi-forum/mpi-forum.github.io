<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("Subsetting WG", "$topdir/mpi3.0_subsetting.php");

$title = "MPI 3.0 Subsetting Working Group";
include_once("$topdir/include/header.php");
?>

<h3>Effort Lead: Alexander Supalov, Intel Corp.</h3>


<h3>Scope:</h3>


To establish a mechanism by which MPI implementatoins can provide
support for a subset of the full MPI standard, maintaining full API and
semantic compatibility with the complete MPI standard. &nbsp;This is
aimed at allowing optimization opportunities such as for peformance or
resource foot-print.
<h3>Initiating Organizations:</h3>


<ul>


  <li>Oak Ridge National Laboratory</li>


  <li>Myricom</li>


  <li>Qlogic</li>


  <li>Intel Crop.</li>


  <li>Sandia National Laboratory</li>


  <li>SiCortex</li>


</ul>

<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/SubsettingWikiPage">Working Group Wiki Pages</a>

<?
include_once("$topdir/include/footer.php");

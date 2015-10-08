<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("ABI WG", "$topdir/mpi3.0_abi.php");

$title = "MPI 3.0 Application Binary Interface Working Group";
include_once("$topdir/include/header.php");
?>


<h3>Effort Lead: Jeff Brown, Los Alamos National Laboratory</h3>


<h3>Scope:</h3>
To define any additional support needed in the MPI standard to enable
static and dynamic linkage compatibility across MPI implementations on
a target platform for MPI based Applications.

<h3>Initiating Organizations:</h3>


<ul>


  <li>MathWorks</li>


  <li>Intel Corp.</li>


  <li>Microsoft Corp.</li>


  <li>QLogic</li>


  <li>HP</li>


</ul>

<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/AbiWikiPage">Working Group Wiki Pages</a>

<?
include_once("$topdir/include/footer.php");

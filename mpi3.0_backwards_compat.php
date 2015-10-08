<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("Backwards Compatibility WG", "$topdir/mpi3.0_backwards_compat.php");

$title = "MPI 3.0 Backwards Compatibility Working Group";
include_once("$topdir/include/header.php");
?>

<h3>Effort Lead: David Solt, HP</h3>


<h3>Scope</h3>


This working group is tasked with monitoring MPI3.0 activity to determine each proposals' impact on MPI 2.x users and code base. The goal is to provide recommendations to MPI 3.0 proposals and introduce new MPI 3.0 proposals when appropriate to provide a reasonable transition of MPI 2.x users and the implementations that support those users to MPI 3.0 without hindering the general goal of MPI 3.0. 


<br>


<h3>Initiating organizations:</h3>


<ul>


  <li>HP</li>
  <li>Cisco Systems, Inc.</li>
  <li>Intel Corporation</li>

</ul>


<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Backwards">Working group wiki pages</a><br>

<br>

<?
include_once("$topdir/include/footer.php");

<?
$topdir = ".";
include_once("top-nav.php");

$title = "MPI 3.0 Standardization Effort";
include_once("$topdir/include/header.php");
?>

<h3>Status:</h3>

<P>
The standardization of MPI 3.0 is complete and the new version of the standard is available at <a href="http://www.mpi-forum.org/docs/docs.html">MPI Forum Document Page</A>.
</P>
<P>
<h4>
<A HREF="mpi3-impl-status-Nov14.pdf">Implementation Status</A>, as of November 2014
</h4>
<p>


<h3>Scope:</h3>

<p>Additions to the MPI 3.0 standard that are needed for better
platform and application support. &nbsp;These are to be consistent with
MPI being a library that provides parallel process management and data
exchange capabilities. &nbsp;This includes, but is not limited to,
issues associated with scalability (performance and robustness),
multi-core support, cluster support, and applications support.</p>

<!--
<h3>MPI-3.0 Final Draft Standard</h3>

<p>The MPI Forum is about to ratify the MPI-3.0, a new version of the
MPI standard.  The draft document can be found here:

<div align="center">
<a href="draft_standard/mpi-report-3.0-final-draft.pdf">MPI-3.0 Final Draft 12, September
2012</a>
</div>
-->

<h3>Working Groups:</h3>

<ul>


  <li><a href="mpi3.0_collectives.php">Collective Communications and Topology</a></li>

  <li><a href="mpi3.0_ft.php">Fault Tolerance</a></li>

  <li><a href="mpi3.0_fortran.php">Fortran Bindings</a></li>

  <li><a href="mpi3.0_rma.php">Remote Memory Access</a></li>

  <li><a href="mpi3.0_tools.php">Tools Support</a></li>

  <li><a href="mpi3.0_hybrid.php">Hybrid Programming</a></li>

  <li><a href="mpi3.0_backwards_compat.php">Backwards Compatibility</a></li>

  <li><a href="mpi3.0_persistence.php">Persistence</a></li>

  <li><a href="mpi3.0_chapter_wgs.php">Chapter Working Groups</a></li>

<!--

  <li><a href="mpi3.0_abi.php">Application Binary Interface - On hold </a></li>

  <li><a href="mpi3.0_generalized_requests.php">Generalized Requests - On hold </a></li>

  <li><a href="mpi3.0_subsetting.php">MPI Sub-Setting - On hold </a></li>

  <li><a href="mpi3.0_ptp.php">Point-To-Point Communications - On hold </a></li>

  <li><a href="mpi3.0_misc.php">Miscellaneous - On hold </a></li>

  <li><a href="mpi3.0_am.php">Active Messages - On hold </a></li>
-->

</ul>

<h3> MPI-3 Voting rules:
</h3>
  <li><a href="standardization_process_3.pdf">document </a></li>


<ul>
   <li><a href="presentations/MPI_Forum_SC10.ppt.pdf">Supercomputing 2010
   MPI-3 overview </a></li>
</ul>
<?
include_once("$topdir/include/footer.php");

<?
$topdir = ".";
include_once("top-nav-3.0.php");
$top_navlist[] = new TopNav("Generalized Requests WG", "$topdir/mpi3.0_generalized_requests.php");

$title = "MPI 3.0 Generalized Requests Working Group";
include_once("$topdir/include/header.php");
?>

<h3>Effort Lead: George Bosilca, The University of Tennessee</h3>

<h3>Scope:</h3>
Redefine the generalized requests interface. A more flexible interface
between the user defined requests and the MPI library is required in
order to allow the provider of the generalized request to integrate a
progress function inside the MPI library. The ultimate goal is to allow
the generalized requests progress to be done without a special test or
wait function.

<h3>Initiating Organizations:</h3>

<ul>

  <li>The MPI Forum Steering Committee</li>

</ul>

<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/GeneralizedRequestsWikiPage">Working
Group Wiki Pages</a>

<?
include_once("$topdir/include/footer.php");

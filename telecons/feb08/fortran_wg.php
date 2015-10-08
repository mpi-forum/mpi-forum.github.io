<?
$topdir = "../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav("Fortran WG", "$topdir/telecons/feb08/fortran_wg.php");

$title = "Fortran WG teleconference, Feb 2008";
include_once("$topdir/include/header.php");
?>

In a telecon this week we intend to discuss possible new Fortran
bindings based on the Fortran 2003 C interoperability standard.&nbsp;
This new binding would provide more type safety than the original
bindings and would allow the implementation to be entirely (almost) in C (using
the existing MPI implementations) without Fortran wrappers to marshal arguments.&nbsp; During the telecon we will discuss what type to
use for MPI handles and perhaps what parameters should appear in
MPI_Init if time permits.

<?
include_once("$topdir/include/footer.php");

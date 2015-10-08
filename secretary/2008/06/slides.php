<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

?>
<p> <strong><font color=red>NOTE:</font></strong> 
Complete copies of the draft MPI documents are available here:
<a href="http://www.hlrs.de/mpi/mpi21/">http://www.hlrs.de/mpi/mpi21/</a></p>

<p>
<?
$slide_dir = "slides";

$slides[] = "mpi_21_at_MPIforum_2008-06_overview";
$slides[] = "hoefler-mpi-forum-coll_wg-june-slides";
$slides[] = "MPI-2-2-June30-08";
$slides[] = "fortran-summary";
$slides[] = "wed-morning-logistics";
$slides[] = "rma-proposal";
$slides[] = "MPI-3.0-Error-Handling.discussion";
$slides[] = "Proposal-for-MPI-3.0-Error-Handling-version-2";

show_slides($slide_dir, $slides);

?>
<p> <strong><font color=red>NOTE:</font></strong> 
Complete copies of the draft MPI documents are available here:
<a href="http://www.hlrs.de/mpi/mpi21/">http://www.hlrs.de/mpi/mpi21/</a></p>

<?
include_once("$topdir/include/footer.php");

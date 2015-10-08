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

$slides[] = "intro";
$slides[] = "mpi-3-proposals-structure";
$slides[] = "MPI-3-arch-structure";
$slides[] = "MPI-3-fault-handling";
$slides[] = "MPI-3-subsetting-april";
$slides[] = "MPI-ABI-WG-April-28-Status";
$slides[] = "ft_wg_update_0408";
$slides[] = "FTMasterWorker_MPIForum_04_08";
$slides[] = "hoefler-mpi-forum-coll_wg-april-slides";
$slides[] = "rma-update";
$slides[] = "rma-rmw-proposal";

$slides[] = "mpi_21_at_MPIforum_2008-04_overview";
$slides[] = "mpi_21_at_MPIforum_2008-04_ballot_3";
$slides[] = "mpi_21_at_MPIforum_2008-04_ballot_4";
$slides[] = "mpi_21_at_MPIforum_2008-04_merge_1.3";
$slides[] = "mpi_21_at_MPIforum_2008-04_merge_2.1";

$slides[] = "MPI-2.1-REVIEWS";

show_slides($slide_dir, $slides);

?>
<p> <strong><font color=red>NOTE:</font></strong> 
Complete copies of the draft MPI documents are available here:
<a href="http://www.hlrs.de/mpi/mpi21/">http://www.hlrs.de/mpi/mpi21/</a></p>

<?
include_once("$topdir/include/footer.php");

<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "Mar08_intro";
$slides[] = "MPI-ABI-Working-Group-March-10-status-briefing";
$slides[] = "MPI-3-subsetting";
$slides[] = "MPI-fortran-march";
$slides[] = "coll-wg";
$slides[] = "General_Coll_Forum";
$slides[] = "mpi3-rma-summary-3-10";
$slides[] = "ft_wg_update";
$slides[] = "voting-rules";
$slides[] = "mpi-rma-march-08";
$slides[] = "mpi_21_at_MPIforum_2008-03_overview";
$slides[] = "mpi-1.3-draft-2008.03.04-review";
$slides[] = "MPI-2.1draft-2008-02-23-review";
$slides[] = "mpi_21_at_MPIforum_2008-03_ballot_3";
$slides[] = "mpi_21_at_MPIforum_2008-03_ballot_4";
$slides[] = "mpi_21_at_MPIforum_2008-03_merge_1.3";
$slides[] = "mpi_21_at_MPIforum_2008-03_merge_2.1";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");

<?
$topdir = "../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav("FT WG", "$topdir/telecons/feb08/ft_wg.php");

$title = "Fault Tolerance and Dynamic Process Control WG teleconference, Feb 2008";
include_once("$topdir/include/header.php");
?>

This working group is working under that assumption that MPI will not
provide fault tolerance, but will provide the needed hooks and
functionality at the communications and process control layers to allow
fault-tolerant routines to be developed on top of MPI. &nbsp;The
following items are under consideration at this very early&nbsp;stage:<br>
<ul>
  <li>Network performance "monitoring"</li>
  <li>Data piggybacking</li>
  <li>Quiescence interface</li>
  <li>Loss of processes</li>
  <ul>
    <li>Impact on communicators</li>
    <li>Process regeneration</li>
  </ul>
  <li>Error handling and fault reporting</li>
  <li>Dynamic process control</li>
  <ul>
    <li>Communicators with "gaps"</li>
  </ul>
</ul>

<?
include_once("$topdir/include/footer.php");

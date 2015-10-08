<?
$topdir = "../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav("Collectives WG", "$topdir/telecons/feb08/collectives_wg.php");

$title = "Collectives WG teleconference, Feb 2008";
include_once("$topdir/include/header.php");
?>

** Attendees (alphabetically):<br>

- Greg Bronevetsky (LLNL)<br>
- Torsten Hoefler
(IU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
- Andrew Lumsdaine
(IU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
- Amith Mamidala
(OSU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
- Adam Moody
(LLNL)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
- Jesper Larsson Traff
(NEC)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

- Rolf VandeVaart (Sun)<br>

<br>

The first teleconference of the MPI 3 collectives working group was held at
Feb 12th 2008. The main goals of the teleconference were to identify
potential members of the working group and discuss items on the working
group's agenda. There were no decisions made so far but the agenda has
been fixed and the single items have been briefly discussed. While
talking about non-blocking collectives (NBC in the following), Jepser
questioned if NBC need to be in the standard at all. Andrew raised
several points that favored a possible standardization. The
portability, user acceptance of standardized packages is generally
higher. It also seems that an implementation inside the core library
could have several performance and resource benefits. Torsten added
that a BSD licensed open source implementation, similar to ROMIO, is
already available (http://www.unixer.de/research/nbcoll/libnbc/). He
also added that it might be very confusing to users if blocking
collectives (BC) are a part of core MPI but the very similar NBC not.
He proposes to have a modularized standard where BC and NBC are both
similar modules. The tag discussion was mainly led by Torsten and
Jesper who agreed that tags do not seem necessary. It was also
generally agreed that multiple outstanding requests can be beneficial
(whilst mentioning that George Bosilca might oppose this). Torsten gave
a short explanation why the "collectives in a separate thread" approach
does not work efficiently. Greg added that an optimization there might
be possible, however, threads still have to be woken up (which is very
expensive). It was generally agreed that this way to program would be
horrible and hardly usable. Matching semantics between BC and NBC are
generally considered as unnecessary (Jesper added that the standard
should define "no match" to prevent non-portable user code). The
discussion of request free and cancel was mostly postponed - most
people thought that those operations would be not necessary. However,
there might be several corner cases (highly irregular applications or
fault tolerance). It was agreed that the MPI progress rule should not
be changed for NBC (maybe clarified). The discussion of topological
collectives, led by Torsten, concluded that the proposal seems to
limited. We agreed that the design of graph communicators is not
scalable (Jesper discussed this in a previous paper @IPDPS). Sparse
collectives should be merged with topological collectives and discussed
off line in a smaller working group. IU volunteered to drive this
effort. Jesper wanted to clarify his thoughts on extended collective
operations (item #5) and propose them to the working group.
Modularizing the standardization sounds very interesting. Our working
group should stay in touch with the sub-setting working group and
discuss possibilities and approaches with them.<br>

<br>

The next working group meeting will be at the face to face meeting in
Chicago in March. Subgroups should form off line and have proposals
ready by a week before the meeting. Torsten suggested to involve more
application researchers and volunteered to invite them to the group if
members could point him to particular people. He also wants to include
Asian researchers; Jesper will contact some. More information (a
recording of the teleconference) is available for private use on request<br>

from Torsten.

<?
include_once("$topdir/include/footer.php");

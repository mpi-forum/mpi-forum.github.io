<?
$short_desc = "Notes";
$long_desc = "Miscellaneous notes from before, during, and after the meeting";
$file = "notes.php";
include_once("subpage.php");

?>

<h2>Notes from before the meeting</h2>

<p>The steering committee met on 12/21/2007 to flesh out more details for
the meetings in 2008 and beyond, to help make the most efficient use
of the two day face-to-face meetings.  I will summarize what was
discussed.</p>

<h3>Administrative structure:</h3>

<ul>
<li>Chairman and Convener: Rich Graham</li>
<li>Secretary: Jeff Squyres</li>
<li>Treasurer: Working out details with ORNL's conference management group</li>
<? 
# stupid emacs mode: '
?>
<li>Web Master: Bill Gropp</li>
<li>Document management: ?</li>
<li>Steering committee:
<ul>
<li> Jack Dongarra</li>
<li> Al Geist</li>
<li> Rich Graham</li>
<li> Bill Gropp</li>
<li> Andrew Lumsdaine</li>
<li> Rusty Lusk</li>
<li> Rolf Rabenseifner</li>
</ul>
 (response still pending from one person)
</li>
</ul>

Note that we are missing someone to handle Document Management.  If
you are interested in helping out in that manner, please let me know.

<h3>Meeting dates: </h3>

These are now official.  Please note the deviation from
the 8 week schedule in April and September.

<strong>Face-to-face:</strong>

<ul>
<li>Jan 14-16, 2008 </li>
<li> March 10-12, 2008</li>
<li> April 28-30</li>
<li> June 30 - July 2, 2008</li>
<li> Sept 3-5, 2008 Dublin, Ireland (Euro PVM/MPI is Sept 7-10, 2008 in Dublin)</li>
<li> October 20-22, 2008</li>
<li> December 15-17, 2008</li>
</ul>

<strong>Telecon: </strong>

<p>On the order of 2-4 hours, as appropriate, to be scheduled
over a three day period.  Report due back to the chairman from each
working group.</p>

<ul>
<li> Feb 11-13, 2008</li>
<li> April 7-8, 2008</li>
<li> May 26-28, 2008</li>
<li> August 4-6, 2008</li>
<li> Sept 29-Oct 1, 2008</li>
<li> Nov 24-26, 2008</li>
</ul>

<h3>Fee: </h3>

<p>$125/person per meeting.  Note that we will be charging this fee
also at the first meeting, even though Microsoft is picking up the
tab.  Based on experience from the past Forum, it was suggested that
we have a small reserve for unexpected costs (some of which have
already been incurred).  As the Forum winds down we will charge less
for the meetings to use up what ever excess exists.  ORNL conference
management will be handling the financial aspects of the meetings, and
we will be trying to set up a way to make credit card payments online.
Checks will also be accepted, and can be made out to "MPI Forum".
Cash will not be accepted - the audit trail is much more difficult
with this.</p>

<h3>Some guiding principals:</h3>

<ul>
<li> Same voting procedure as used in previous forums</li>
<li> Any one can start a committee, but need critical mass of four
organizations to be sanctioned by the forum</li>
<li> Need written proposal in electronic form to start a new committee</li>
<li> Semantics need to be defined before syntax</li>
<li> Need prototype implementation for a given proposed feature.  Ideally,
this would be in one of the widely used open source implementations, such as
MPICH and/or Open MPI.</li>
<li> Separate mailing lists for the 2.1, 2.2, and 2.3 efforts</li>
<li> One technical subject per e-mail</li>
<li> If interfaces are changed, consider other desired changes at the same
time, to minimize number of changes</li>
</ul>

<h3>MPI 2.1</h3>

<p>Scope of Effort: Clarification to the MPI standards document,
resulting in a single document describing the full MPI 2.1 standard.
This includes merging of documents, text corrections, and added
clarifying text.</p>

<p>Instead of chapter authors, this effort will have a single
coordinator.  MPI 2.1 Chairman: Rolf Rabenseifner</p>

<p>The MPI 1.1, 2.0, errata documents, and ballots 1 and 2 for MPI 2.1
(already voted on) will be combined into a single document at the end
of January.  Once this is done, we will need people to carefully
review the merged document for correctness.  This will undergo the
regular voting procedure, to certify the document (should not having a
public reading of this document) In the mean time, we will proceed
with corrections/clarifications to the old documents.  These will be
maintained as separate documents until the single merged document is
created and certified, and once this is done, will merge these changes
into the single document.</p>

<h3>MPI 2.2</h3>

<p>Scope of Effort: Small changes to the standard.  A small change is
defined as one that does not break existing user code - either by
interface changes or semantic changes - and does not require large
implementation changes.</p>

<p>As with MPI 2.1, we will have a single coordinator for this
effort. (in some cases, we may need to form separate working groups)
MPI 2.2 Chairman: Bill Gropp</p>

<p>Topics already proposed and included in the effort:</p>

<ul>
<li> Language bindings (Note to committee: looks like the person who
is responsible for the Fortran 2003 Fortran/C bindings - Craig
Rasmussen - will participate in the Forum)</li>
<li> Send Buffer Access</li>
<li> Add const keyword</li>
</ul>

<p>Depending on how some of work develops, some of these topics may
move into MPI 3.0</p>

<h3>MPI 3.0</h3>

<p>Scope of Effort: Additions to the standard that are needed for
better platform and application support.  These are to be consistent
with MPI being a library providing of parallel process management and
data exchange.  This includes, but is not limited to, issues
associated with scalability (performance and robustness), multi-core
support, cluster support, and application support.</p>

<p>Initial Chapter Coordinators:</p>

<ul>
<li> Fault Tolerance : Rich Graham</li>
<li> Generalized Requests: ?</li>
<li> Non-Blocking Collectives: Andrew Lumsdaine</li>
<li> One-Sided Communications: Bill Gropp and Rajeev Thakur</li>
</ul>

<?
include_once("$topdir/include/footer.php");

---
layout: notes
date: January 14 - 16, 2008
permalink: meetings/2008/01/notes
---

## Notes from before the meeting

The steering committee met on 12/21/2007 to flesh out more details for the meetings in 2008 and beyond, to help make the most efficient use of the two day face-to-face meetings. I will summarize what was discussed.

### Administrative structure:

*   Chairman and Convener: Rich Graham
*   Secretary: Jeff Squyres
*   Treasurer: Working out details with ORNL's conference management group
*   Web Master: Bill Gropp
*   Document management: ?
*   Steering committee:
    *   Jack Dongarra
    *   Al Geist
    *   Rich Graham
    *   Bill Gropp
    *   Andrew Lumsdaine
    *   Rusty Lusk
    *   Rolf Rabenseifner(response still pending from one person)

Note that we are missing someone to handle Document Management. If you are interested in helping out in that manner, please let me know.

### Meeting dates:

These are now official. Please note the deviation from the 8 week schedule in April and September. **Face-to-face:**

*   Jan 14-16, 2008
*   March 10-12, 2008
*   April 28-30
*   June 30 - July 2, 2008
*   Sept 3-5, 2008 Dublin, Ireland (Euro PVM/MPI is Sept 7-10, 2008 in Dublin)
*   October 20-22, 2008
*   December 15-17, 2008

**Telecon:**

On the order of 2-4 hours, as appropriate, to be scheduled over a three day period. Report due back to the chairman from each working group.

*   Feb 11-13, 2008
*   April 7-8, 2008
*   May 26-28, 2008
*   August 4-6, 2008
*   Sept 29-Oct 1, 2008
*   Nov 24-26, 2008

### Fee:

$125/person per meeting. Note that we will be charging this fee also at the first meeting, even though Microsoft is picking up the tab. Based on experience from the past Forum, it was suggested that we have a small reserve for unexpected costs (some of which have already been incurred). As the Forum winds down we will charge less for the meetings to use up what ever excess exists. ORNL conference management will be handling the financial aspects of the meetings, and we will be trying to set up a way to make credit card payments online. Checks will also be accepted, and can be made out to "MPI Forum". Cash will not be accepted - the audit trail is much more difficult with this.

### Some guiding principals:

*   Same voting procedure as used in previous forums
*   Any one can start a committee, but need critical mass of four organizations to be sanctioned by the forum
*   Need written proposal in electronic form to start a new committee
*   Semantics need to be defined before syntax
*   Need prototype implementation for a given proposed feature. Ideally, this would be in one of the widely used open source implementations, such as MPICH and/or Open MPI.
*   Separate mailing lists for the 2.1, 2.2, and 2.3 efforts
*   One technical subject per e-mail
*   If interfaces are changed, consider other desired changes at the same time, to minimize number of changes

### MPI 2.1

Scope of Effort: Clarification to the MPI standards document, resulting in a single document describing the full MPI 2.1 standard. This includes merging of documents, text corrections, and added clarifying text.

Instead of chapter authors, this effort will have a single coordinator. MPI 2.1 Chairman: Rolf Rabenseifner

The MPI 1.1, 2.0, errata documents, and ballots 1 and 2 for MPI 2.1 (already voted on) will be combined into a single document at the end of January. Once this is done, we will need people to carefully review the merged document for correctness. This will undergo the regular voting procedure, to certify the document (should not having a public reading of this document) In the mean time, we will proceed with corrections/clarifications to the old documents. These will be maintained as separate documents until the single merged document is created and certified, and once this is done, will merge these changes into the single document.

### MPI 2.2

Scope of Effort: Small changes to the standard. A small change is defined as one that does not break existing user code - either by interface changes or semantic changes - and does not require large implementation changes.

As with MPI 2.1, we will have a single coordinator for this effort. (in some cases, we may need to form separate working groups) MPI 2.2 Chairman: Bill Gropp

Topics already proposed and included in the effort:

*   Language bindings (Note to committee: looks like the person who is responsible for the Fortran 2003 Fortran/C bindings - Craig Rasmussen - will participate in the Forum)
*   Send Buffer Access
*   Add const keyword

Depending on how some of work develops, some of these topics may move into MPI 3.0

### MPI 3.0

Scope of Effort: Additions to the standard that are needed for better platform and application support. These are to be consistent with MPI being a library providing of parallel process management and data exchange. This includes, but is not limited to, issues associated with scalability (performance and robustness), multi-core support, cluster support, and application support.

Initial Chapter Coordinators:

*   Fault Tolerance : Rich Graham
*   Generalized Requests: ?
*   Non-Blocking Collectives: Andrew Lumsdaine
*   One-Sided Communications: Bill Gropp and Rajeev Thakur
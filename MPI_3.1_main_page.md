---
layout: page
title: MPI 3.1
permalink: /mpi-31/
---

## Status

The standardization of MPI 3.1 is complete and the new version of the standard is available at [MPI Forum Document Page](/docs).

## Scope

Provide small additions to MPI 3.0 and integrate them together with identified errata items into a new version of the MPI standard.

* * *

## Note

The information below reflects the state of the MPI 3.1 efforts up to the ratification on June 4th 2015. It is no longer maintained, but kept for historical reasons.

* * *

### Timeline

As of the December 2014 meeting, we completed all additions to the MPI 3.1 standard and the expectation was that we vote on the standard at the March 2015 meeting. However, due to technical issues found, this was postponed and is now scheduled for the June 2015 meeting. Here is the timeline for this process:

*   Starting Dec. 2014: Start integrating passed tickets into golden copy
    *   Has to be done by chapter committee chairs
    *   Changes to be reviewed by chapter committees
    *   Text edits must follow [2014-12-instructions.pdf](../slides/2014/12/2014-12-instructions.pdf)
    *   The location of the SVN repo listed in the instructions
    *   WARNING: start with current version of the golden copy (Fortran changes already in)
*   By February 2nd (4 weeks before MPI Forum)
    *   Chapter committee chairs publish draft of each chapter
    *   Commit to golden copy for MPI 3.1 in the repo
    *   Some kind of diff with old chapter (what ever works for the chapter)
    *   To be sent to MPI forum email list
    *   Full draft will be on the forum page for review
*   By February 16th (2 weeks before MPI Forum)
    *   Chapter committees collect and integrate feedback
    *   Chapter committee chairs publish final chapter proposal for MPI 3.1
*   Starting March 2nd (MPI forum meeting in Portland)
    *   Reading of all chapters (i.e., going through the diffs)
    *   Creation of list of open issues
*   By May 4th (4 weeks before MPI Forum)
    *   Chapter committees finish fixing open issues
    *   Chapter committee chairs publish final chapter proposal for MPI 3.1
*   By May 11th (3 weeks before MPI Forum)
    *   MPI Editor publishes final MPI 3.1 draft
*   Starting June 1st (MPI forum meeting in Chicago)
    *   Discussion of fixes to open issues
    *   Final vote on document

### Document Intergration Process and Chaper Committee Responsibilities

Chapter committees will be responsible for integrating and reviewing all changes into the standard document. For already voted in tickets, errata items, and ticket 0 changes, this process can start immediately, at the latest, though, this work needs to be done between the September and December meetings. For this, one member of each chapter committee (the chair a designee) will have write access to the MPI 3.1 tree.

We decided to no longer use the Latex change macros for adding the new text, since those led to bad document quality (feel free to still use them for working group documents and ticket presentations - I am just talking about the main document). Instead we will rely on \"svn diff\" for change tracking. To make this work, please don't reflow any text! Also, please make sure you follow the document instructions contained in the MPI document repository (see README) to make sure we get a consistent document.

At the end of the process, every chapter committee chair is expected to provide:

*   A new PDF of the chapter with all changes integrated (clean document, without any change bars)
*   An SVN diff document (informal to help people track things)
*   A side document detailing the changes (tickets, errata item, ticket 0 items beyond typos, e.g., examples)

These documents need to be reviewed by the chapter committee and made available at least two weeks before the forum meeting.

A longer description of these procedures and documentation on how to write/build the MPI document is available [here](../slides/2014/12/2014-12-instructions.pdf).

## Chapter Committees

| # | Chapter | Chair | Members |
|:---:|---|---|---|
| | Front Matter | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|1| Introduction | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|2|MPI Terms and Conventions|Rolf Rabenseifner|Bill Gropp, Martin Schulz, Dan Holmes, Jim Dinan|
|3|Point to Point Communcation|Dan Holmes", "Bill Gropp, Sayantan Sur, Rich Graham, Pavan Balaji|
|4|Datatypes|George Bosilca|Jeff Hammond, Rich Graham, David Solt, Bill Gropp, Jim Dinan|
|5|Collective Communication|Torsten Hoefler|George Bosilca, Purushotham V. Bangalore, Jeff Hammond|
|6|Groups, Contexts, Communicators, Caching|Pavan Balaji|Bill Gropp, Sayantan Sur, Sreeram Potluri|
|7|Process Topologies|Torsten Hoefler|Rolf Rabenseifner, Purushotham V. Bangalore, Chulho Kim, Pavan Balaji|
|8|MPI Environmental Management|George Bosilca|Martin Schulz, Rolf Rabenseifner, Chulho Kim|
|9|The Info Object|Jeff Hammond|Torsten Hoefler, David Solt, Pavan Balaji|
|10|Process Creation and Mangement|David Solt|Jeff Hammond, Wesley Bland, Howard Pritchard|
|11|One-Sided Communication|Bill Gropp|Pavan Balaji, Torsten Hoefler, Rajeev Thakur, Sayantan Sur|
|12|External Interfaces|Pavan Balaji|Dries Kimpe, Jeff Hammond, Jim Dinan, Aurélien Bouteiller|
|13|I/O|Quincey Koziol|Mohamad Chaarawi, Rajeev Thakur, Dries Kimpe|
|14|Tool Support|Kathryn Mohror|Martin Schulz, Marc-André Hermanns, Adam Moody|
|15|Deprecated Functions|Rolf Rabenseifner||
|16|Removed Interfaces|Rolf Rabenseifner||
|17|Language Bindings|Jeff Squyres|Jeff Hammond, Rolf Rabenseifner, Craig Rasmussen|
|A|Language Bindings Summary|Rolf Rabenseifner|Jeff Hammond, Craig Rasmussen|
|B|Change-Log|Rolf Rabenseifner||

### Draft Chapters for MPI 3.1 (as of the March 2015 Meeting)

Note, sections marked with "rev" are revised versions of the chapters submitted after the two week mark. We will discuss the implications of these chapters at the meeting.

|#|Chapter|Contact|Draft Text|Diff Text|Tickets|
|:---:|:---:|:---:|:---:|:---:|:---:|
|0|Front Matter|Bill Gropp|||Version number changed. Credits need to be updated.|
|0rev|Front Matter|Bill Gropp|||Version, Difference to 3.0 and credits added.|
|1|Introduction|Bill Gropp|||no tickets / no diff since r1750|
|1rev|Introduction|Bill Gropp|||Added background
|2|MPI Terms and Conventions|Rolf Rabenseifner||[Gist](https://gist.github.com/348be66d82fc5ba71d36)|421, 431, 447, 449, 450, 451, 452, 453, 455, 349, 404 Not affected by #388 / BIND(C) errata
|3|Point to Point Communcation|Dan Holmes|||446, 388, 415, 424, 388|
|4|Datatypes|George Bosilca||[Gist](https://gist.github.com/bosilca/1716cbc1e71a3dd0baf4)|102, 349, 404, 421, 431, 443, 388|
|5|Collective Communication|Torsten Hoefler|||388|
|6|Groups, Contexts, Communicators, Caching|Pavan Balaji|||388, 345|
|7|Process Topologies|Torsten Hoefler||[Gist](https://gist.github.com/27050c4a500c3422bcb2)|388, 419, 420|
|7rev|Process Topologies|Torsten Hoefler||[Gist](http://htor.inf.ethz.ch/sec/chap-topol-diff-r1806.diff)|removed the 20-year old outdated reference to EXPRESS; slight wording change in advice to users on MPI_WEIGHTS_EMPTY; slight wording change in example of graph_neighbors; slight wording change in first sentence of 7.5.6.  [Diff for only whitespace changes](http://htor.inf.ethz.ch/sec/chap-topol-diff-r2003.diff)|
|8|MPI Environmental Management|George Bosilca|||388, 357, 390|
|8rev|MPI Environmental Management|George Bosilca||[Gist](https://gist.github.com/b1f7e68510eea45444df)|Switched to subversion 3.1 (svn r2013)|
|9|The Info Object|Jeff Hammond|||388|
|10|Process Creation and Mangement|David Solt|||388|
|11|One-Sided Communication|Bill Gropp|||348, 350, 355, 359, 362, 367, 369, 349, 402, 433, 458, 413, 388, 390 SVN Revisions: 348, 350, 355, 359, 362, 367 - r 1767; 369 - r 1962; 349/402 - r 1963; 433 - r 1964; 458 - r 1955; 413 - r 1965 [Additional Changes](../one-side-2.pdf) [Diff for additional changes](r1767-cur.txt) #388 implemented in r1835 and r1933|
|12|External Interfaces|Pavan Balaji|||388, 357|
|13|I/O|Quincey Koziol||[Diff](https://svn.mpi-forum.org/trac/mpi-forum-web/attachment/ticket/273/ticket-273.diff)|273, 388, 440 Note 440 is still missing in the chapter draft|
|14|Tool Support|Kathryn Mohror||[Gist](https://gist.github.com/kathrynmohror/83b5c1f45b13fe3b11a6)|354, 377, 378, 383, 385, 386, 387, 391, 394, 400, 405, 406, 388|
|15|Deprecated Functions|Rolf Rabenseifner|||no tickets / no diff since r1750|
|16|Removed Interfaces|Rolf Rabenseifner|||no tickets / no diff since r1750|
|17|Language Bindings|Jeff Squyres||[Gist](https://gist.github.com/jsquyres/f2cb363dbb19b252b47c)|444, 441, 393, 445, 388, 345, 403|
|A|Language Bindings Summary|Rolf Rabenseifner||[Gist](https://gist.github.com/77769791d5c39ea651c2)|345, 347, 354, 369, 377, 388, 389, 400 Missing #390, see revisions [appA3-all-mpif08-routines](../appA3-all-mpif08-routines.pdf) [appA234_MPI_CONVERSION_FN_NULL-annotated](../appA234_MPI_CONVERSION_FN_NULL-annotated.pdf) [appA.3.4-f08-annotated](../appA.3.4-f08-annotated.pdf) [appLang-Const-annotated](../appLang-Const-annotated.pdf)|
|Arev|Language Bindings Summary|Rolf Rabenseifner|||390 #390 added as of r2009|
|B|Change-Log|Rolf Rabenseifner||[Gist](https://gist.github.com/68369a61a99082b67c0f)|345, 349, 402, 404, 421, 350, 355, 362, 369, 377, 378, 383, 386, 388, 389, 391, 400, 424, 273, 357, 415, 419|
|Brev|Change-Log|Rolf Rabenseifner||| Fixed page numbers in chancge log|

### Potential issues/changes to completed tickets - to be discussed

|Ticket|Chapter|Issue|
|:---:|:---:|:---:|
||0|Changes to frontmatter/credits|
||1|Changes to chapter 1|
|453|2|TBD - Proper distinction between declared vs. defined functions for the use of PMPI - discussion to back out #453|
||2|READ - Added Bind-C back into text, which is removed incorrectly - r2008 - error was in implementing the ticket|
||4|READ - restoring BIND(C) back to MPI-3.0 page 106 lines 14 and 24 - error was in implementing the ticket|
||7|READ - Changes to chapter 7, discussed an approved as chapter committee changes|
||8|READ - Changes to chapter 8|
|390|8|READ - Updates for Annex A4.6 and A4.9|
|357|8|READ - MPI_Get_version and MPI_Get_library_version were done only partially.|
||8|READ - New subversion 3.1 in (2x) MPI_SUBVERSION and MPI_GET_VERSION|
||8|TBD - Sentence on thread safety - three times in the text - should change from from threads to from multiple thread - requires change in 12.4 as well|
||11|[Open issues in RMA - Bill will discuss the details](https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/mpi3-rma-agenda)|
|390|11|Updates for Annex A4.6 and A4.9|
|357|11|MPI_Get_version and MPI_Get_library_version were done only partially.|
|357|12|TBD - added line in the CC, which causes discussion|
|440|13|READ - Preferred way to cross reference - ticket 0, but unclear which option was intended - discussion on how to implement ticket|
|377|14|READ/TBD - Missing statement that an error happens if no variable >>>in that class<<< is found - needs to be fixed|
||17|READ - restoring BIND(C) back to MPI-3.0 - error was in implementing the ticket|
||A|READ - Changes to annex A, only #390, just simple bug fix|
||B|READ - Changes to annex B - decided on keeping the full log|
||B|READ - font fix|
||B|TBD - B 2.1, bullet 5, add editorial note that we have now 13.5.3 instead of 13.5.2|
||B|TBD - two RMA tickets missing in change log|
|||TBD - White space control for all chapters (r1673 and later)|
|||[White space control for all chapters (r1673 and later)](mpi31-docs/mpi-report-r2030.pdf)|

### Draft Chapters for MPI 3.1 (as of the June 2015 Meeting)

Updates to the MPI standard, following the list of open issues, are published as part of the agenda for the June 2015 meeting.

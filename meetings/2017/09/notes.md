---
layout: notes
date: September 20 - 22, 2017
permalink: meetings/2017/09/notes
---

## MPI Forum Business Discussion

[Slides](https://github.com/mpi-forum/mpi-forum.github.io/raw/master/_slides/2017/09/2017-09-mpiideas.pptx)

Martin presented slides with many ideas about how to improve the pace of progress in the MPI Standard and avoid allowing the standard to become made irrelevant by other programming models. Primarily:

* Adding "virtual" meetings (WebEx with video) between physical meetings
    * Focusing on plenaries and "pre-readings" to make full readings more successful
    * Potentially allowing "minor" votes (side documents, errata)
        * Need to resolve who gets to vote in virtual meetings
    * Rolf - having pre-readings at these meetings would be much more useful than presenting more plenaries for proposals that are ready for a formal reading.
    * Martin - Posting a list of work to do between meetings (either in working groups or in virtual forum meetings) would allow the WGs to better target progress and know what's expected of them. Putting together a list could be one of the last things that happens during a forum.
* Working groups should pick up the pace on their own meetings
    * Move from bi-weekly to weekly to make progress quicker
* Publishing periodic "draft" standards (potentially after the September meeting for SC) would allow implementors and users to begin learning about the new standard earlier in the process and improve implementations and reduce errors in the standard.
    * This had a lot of support from those in the room, including lowering the bar for "draft" standards to include those things that had already passed a first reading.
        * This would require some logistical changes for those managing the repository, but this is solvable.
    * We would make no guarantee about backward compatibility from draft to draft, but once the standard is ratified, there can be an expectation that backward incompatibility would be much less common.
* Side Documents can be allowed to move faster.
    * Allow WGs to publish their own side documents more frequently.
    * Read all changes for a version together and publish after a single vote in the forum.
    * Encourages more incremental versions.
* Improving note taking for plenaries and readings would make it much easier for those who miss a meeting or do not attend regularly to find out how things went.

More details can be found in the slides. Martin, Wesley, and Jeff will come back at the December meeting with more concrete proposals and appropriate rule changes (if necessary).

## Error Handlers Reading

[Slides](https://github.com/mpi-forum/mpi-forum.github.io/raw/master/_slides/2017/09/2017-09-21-Error-Handlers-Reading.pptx)

The Fault Tolerance Working Group read a proposal to improve error handlers. Details about the proposal can be found in the slides. The reading did not succeed due to a need to add a new chapter for non-backward compatible changes. The FTWG will make the necessary changes and re-read the issues at the next meeting.

Detailed comments can be found on the [pull request](https://github.com/mpi-forum/mpi-standard/pull/1#pullrequestreview-64681897).

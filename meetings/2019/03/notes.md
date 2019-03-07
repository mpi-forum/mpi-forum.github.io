---

layout: notes

date: March 4, 2019 - March 7, 2019

permalink: meetings/2019/03/notes

title: March 2019 Meeting Notes

---

# March 2019 Meeting Notes
## Summary of Plenary Sessions
### Clarify what MPI_SUCCESS guarantees, and what is left undefined when MPI_ERR_XXX happens
Wesley (Intel) presented a short change to clarify the state of function inputs and outputs when MPI returns success or errors. The Forum was receptive and asked for minor changes to be brought with a no-no and first vote at the June meeting.

### Define error/failure behavior in MPI_INIT/FINALIZE
Aurelien (UTK) presented clarifications for how errors should be handled before/during/after `MPI_INIT`/`MPI_FINALIZE`. There were a number of minor changes requested, but the Forum agreed that they were probably all small enough to move forward with a no-no vote.

### MPI Sessions
Dan (EPCC) presented (and presented… and presented…) a proposal for adding the Peer to Peer process model to the existing MPI process models (World and Dynamic Processes). A large number of changes were requested, ranging from the trivial to the significant. The changes were significant enough that the proposal will need to be re-read at the June meeting. More extensive notes will be available from the [Sessions Working Group](https://github.com/mpiwg-sessions/sessions-issues/issues/10). The Forum agreed that the future reading can cover only the items that have changed from the current reading rather than being a full new reading (if it can be presented in a coherent way).

### MPI_T Events
Marc-Andre presented the proposal to add callback events to the `MPI_T` interface. Martin took detailed notes that will be available to the tools working group. While there were a lot of small comments, at the very least, the need for a definition of timestamps probably requires a new reading. The Forum agreed that the future reading can cover only the items that have changed from the current reading rather than being a full new reading.

### MPI Terms and Conventions
Dan (EPCC) read the ticket to improve the terms and conventions chapter to add definitions or improve existing definitions in Chapter 2. The conversation was largely intended to stay away from word-smithing and move toward discussions of whether this is working in the right direction. The forum agreed that the proposal generally captures the existing 

### Errata for Passive Target RMA on shared memory
Rolf (HLRS) presented this small proposal, but there was confusion around the contents of the ticket. The Forum said the proposal needed a Pull Request to make the change clear and it should be re-read as an errata at the next meeting.

### Intro nonblocking - no serialization and no deadlocks
Rolf (HLRS) read the proposal and the Forum was generally receptive, though asked for minor changes. He will make changes and bring it back for a future reading.
* The forum agreed that this was a good idea in general and wanted to move forward along with a parallel effort to transition non-blocking procedures to immediate/incomplete procedures.

### Clarify alignment of memory provided to application
Rolf (HLRS) read the proposal. There were enough significant changes requested that there will need to be another reading at a future meeting.

### MPI_Cart_weighted_create / Topology aware Cartesian communicators
Rolf (HLRS) presented a reading for new topology aware communicator creation functions to benefit multi-level architectures (both network and intra-node topologies).  There was lots of discuss that means there will be another reading in the future. Detailed notes should be made available somewhere.

### MPI Timeline
Martin (TUM) presented an updated timeline for future versions of MPI. First, the forum agreed that we wanted to continue operating under a 2020 deadline (potentially moving the final release to SC ’20 instead of ISC ’20 (with a release candidate document at ISC ’20).

The forum also tentatively approved a future version plan of three documents:

#### MPI 4.0
* Include all of the topics currently approved along with those that are close (e.g. Sessions, MPI_T events, etc.)

#### MPI 4.1
* Only includes clarifications, corrections, and definitions. Does not include new features.
* To be completed shortly (within a year or two) after the release of MPI 4.0.

#### MPI 4.5
* Work in parallel with MPI 4.1.
* Includes new features not included in MPI 4.1 (e.g. function pointers, etc.)

### MPI Function Pointer Interface
Jeff (Cisco) presented in idea for a backward compatible way of using function pointers to solve problems with large counts, sessions, QMPI, etc. There was lots of discussion about the feasibility of the proposal and specific interactions with Sessions, large counts, etc. 

### Virtual Meetings (Move to two hour block)

* 3/20 - Terms
* 3/27 - Event Timestamps
* 4/3 - Split Types / Sessions 1
* 4/10 - FT
* 4/17 - Finepoints / Function Pointers
* 4/24 - Cartesian Topologies / Sessions 2
* 5/1 - Backups (Euro Holiday)
* 5/8 - Backups (French Holiday)


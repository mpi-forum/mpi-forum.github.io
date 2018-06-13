---
layout: notes
date: June 11 - June 14, 2018
permalink: meetings/2018/06/notes
title: June 2018 Meeting Notes
---

## MPI Forum Working Groups
Various working groups met. Notes can be found on their respective wikis:

* Sessions
* Tools
* Persistence
* Hardware Topology
* Fault Tolerance
* Collectives (and groups and communicators)
* Hybrid

## MPI Forum Plenaries

### Upcoming Meeting Dates and Locations
* March 4 - 9: Chattanooga, TN
* May 28 - 31: Chicago, IL
* Shifted to Tuesday - Friday to avoid Memorial Day holiday in the US
* September 5 - 9: Zürich, Switzerland
* Thursday - Saturday **before** EuroMPI to avoid Labor Day holiday before and conflicts after the conference
* December 9 - 12: Albuquerque, NM

### Introduction
Martin began the plenary portion of the F2F with introductions and working group updates.

### [Reading: Errata: broken link for rfc1832](https://github.com/mpi-forum/mpi-issues/issues/55)
* No objection

### [Reading: Errata: Possible ambiguity on size of `array_of_indices` and `array_of_statuses`?](https://github.com/mpi-forum/mpi-issues/issues/86)
* No objection

### [Reading: Errata: `MPI_STATUS_SET_CANCELED` F08 binding: flag param intent](https://github.com/mpi-forum/mpi-issues/issues/91)
* No objection

### [Reading: Errata: Behavior of `MPI_Dims_create` when ndims is zero](https://github.com/mpi-forum/mpi-issues/issues/72)
* Open MPI and MPICH are already doing this.
* No objection

### [Reading: Errata: Clarification to allow `MPI_PROC_NULL` as neighbor in (distributed) graph topologies](https://github.com/mpi-forum/mpi-issues/issues/87)
* Rich raised performance concerns that implementations which do not use the existing point-to-point code to implement this (which MPICH and Open MPI already do) will be impacted because they will need to shuffle around buffers and do additional checks for `MPI_PROC_NULL`.
* Agreed that this is **not** an errata change and should go through the full voting procedure.
* This will give everyone a chance to discuss this before the first vote in September.

### [Reading: No-No: Noncatastrophic Errors](https://github.com/mpi-forum/mpi-issues/issues/28)
* No objections

### [Reading: No-No: MPI_T: Consistent reference to MPI processes](https://github.com/mpi-forum/mpi-issues/issues/67)
* No objections

### [Reading: Deprecate MPI_SIZEOF in MPI-4.0](https://github.com/mpi-forum/mpi-issues/issues/51)
* Asked for minor whitespace change and additional text to point out that some compilers may not support `storage_size`.
* Pushback from Jeffs Squyres and Hammond that no available, current compiler falls into this category and we should not make those changes.

### Discussion on Draft Standard and MPI-next
* Tentative targets
	* Draft standard at SC19
	* Release candidate meeting Dec 2019
	* Ratification meeting March 2020

### Plenary on status, open issues (13, 17, 18, 19, 30, 64)
* [#13 Deprecate MPI_COMM_JOIN](https://github.com/mpi-forum/mpi-issues/issues/13)
    * This is a good idea and we should do it.
    * The collectives working group will pick this up.
* [#17 Clarify what functions can be called on uncommitted datatypes](https://github.com/mpi-forum/mpi-issues/issues/17)
	* It seems to have become clear recently that not many implementations are using the commit function.
	* The fix here is not completely clear, but it seems that it should involve listing the functions where uncommitted datatypes are allowed.
	* Wesley will move this forward.
* [#18 Longer types for use with `MPI_MINLOC` and `MPI_MAXLOC`](https://github.com/mpi-forum/mpi-issues/issues/18)
	* Pavan will raise this in the RMA WG.
* [#19 Make MPI_THREAD_MULTIPLE a requirement for all implementations](https://github.com/mpi-forum/mpi-issues/issues/19)
	* Forum agreed to close the ticket.
* [#30 When are attribute callbacks invoked?](https://github.com/mpi-forum/mpi-issues/issues/30)
	* The collective WG will take this.
* [#64 Threading guarantees of MPI_User_function](https://github.com/mpi-forum/mpi-issues/issues/64)
	* The Forum agreed that we want to clarify the existing state of the art for this issue.
	* Martin will work on a proposal and bring it back to a future meeting.

### [No-no: Errata: Possible ambiguity on size of `array_of_indices` and `array_of_statuses`?](https://github.com/mpi-forum/mpi-issues/issues/86)
    * Dan made a few small modifications to the reading from the previous day to make the text more
      consistent with the rest of the standard.

### [Reading: New functions to create files from groups](https://github.com/mpi-forum/mpi-issues/issues/94)

### [Reading: New functions to create communicators from groups](https://github.com/mpi-forum/mpi-issues/issues/93)

### [Reading: Info key(s) for Persistent Collective Communication](https://github.com/mpi-forum/mpi-issues/issues/83)

### [Reading: Front matter text clarifications for the "Collective Communication" and "Topology" Chapters](https://github.com/mpi-forum/mpi-issues/issues/90)

### [Reading: Non-blocking communicator/file/win constructors/destructors/etc](https://github.com/mpi-forum/mpi-issues/issues/78)

### [Reading: Nonblocking functionality for the Process Creation and Management Chapter](https://github.com/mpi-forum/mpi-issues/issues/81)

### [Reading: Nonblocking constructor/destructor(s) for the One-sided Communication RMA Chapter](https://github.com/mpi-forum/mpi-issues/issues/82)

### [Discussion: WITH_INFO review across the collective API](https://github.com/mpi-forum/mpi-issues/issues/84)

### [Discussion: WITH_INFO review correlated to Tickets 80 and 84 for collective operations](https://github.com/mpi-forum/mpi-issues/issues/85)

### Discussion: Collectives WG Update

### Discussion: Splitting ULFM

### Discussion: HW Topology WG Update

### Discussion: Sessions Update

### Discussion: MPI BigCount - what is next?

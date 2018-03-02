---
layout: notes
date: February 26 - March 1, 2018
permalink: meetings/2018/02/notes
title: February 2018 Meeting Notes
---

## MPI Working Groups

Various working groups met. Notes can be found on their respective wikis:

* Sessions
* Tools
* Persistence
* Hardware Topology
* Fault Tolerance
* Collectives (and groups and communicators)

## MPI Forum Plenaries

### Intro

Martin began the plenary portion of the F2F with introductions, WG updates, and renaming/expanding
the scope of the Collectives WG to include communicators and groups.

### [#67: MPI_T Consistent reference to MPI processes](https://github.com/mpi-forum/mpi-issues/issues/67)

Marc-Andre read an issue to clarify the term “processes” in the tools chapter. There were a few
places in the text where people asked for additional changes, but agreed that they were “no-no”
worthy.

### [#77: Add integer-based access to MPI_Wtime](https://github.com/mpi-forum/mpi-issues/issues/77)

Marc-Andre read new interfaces for integer-based timers. There were a few discussions:
* Wesley: The definition of `MPI_WTICK` needs to be updated to mirror `MPI_WTICKS_PER_SECOND`.
* Wesley: A changelog entry needs to be added.
* Jim: Is there a performance benefit to this interface over the double-based `MPI_WTIME`?
    * Martin: Potentially doing the int to double conversion on some architectures (32 bit ARM)
      might be non-negligible.
* A straw vote was take on whether to link the source of `MPI_WTIME` and the new functions.
    * The result was mixed. About 13 in favor and about 5 against.

### [#79: Callback-driven event interface for MPI_T](https://github.com/mpi-forum/mpi-issues/issues/79)

Marc-Andre presented slides for a callback-driven event interface. He also showed potential text to
add these ideas to the tools chapter. There was some specific feedback on the text that will
continue in the tools working group.

### [#1 & #3 No-No Reading](https://github.com/mpi-forum/mpi-standard/pull/1/files/cbf86d158b257b270ab96805fbaa273d53e70974..0460b99ecc9477704fc428eab2d005b240db77b3)

Wesley read the diff to be voted on as a no-no vote before the normal vote on #1 and #3.

### [#25: Adding Persistent Collective Communication](https://github.com/mpi-forum/mpi-issues/issues/25)

Tony read the persistent collectives PR.
* Rich: It isn't clear that allowing interleaved starts will be possible without ending up with
  deadlock or slowdowns.
    * We could add an info key to promise that we will always issue operations in the same order. Such
      an info key is already in the proposal but commented out. The persistence WG would bring it back.
* Martin: Can you edit the `MPI_INFO` object after calling the `INIT` function for any of the
  collectives?
    * Yes, but the text doesn't say that. The text should be updated to reflect that and that changing
      the info object will not change anything for the existing collective.
* Should info keys be uniform for all `INIT` calls?
    * They don't have to be uniform, but they could be if the info key that is being discussed to
      assert that is true.
* The room agreed that this was a "successful reading" and would be in favor of voting on it a the
  next meeting (with some expected "no-no" votes).


### [#78: Add missing communicator operations (mostly non-blocking) to Groups, Contexts, Communicators, and Caching and Topology chapters](https://github.com/mpi-forum/mpi-issues/issues/78)

Tony read the proposal to add non-blocking versions of many communicator, window, and file based
functions for construction, destruction, and manipulation.

### [#28: Catastrophic Errors](https://github.com/mpi-forum/mpi-issues/issues/28)

Wesley read the non-catastrophic errors proposal. There were minor wordsmithing comments, but the
forum agreed with unanimous consent that the reading was "successful" and should be voted on at the
next meeting.

### [#20: User-Level Failure Mitigation](https://github.com/mpi-forum/mpi-issues/issues/20)

Aurelien attempted a reading of the ULFM proposal and presented supporting slides. The general
feedback from the forum is that ULFM as a whole is still too large to standardize as a whole.
Individual pieces might be acceptable (e.g. `MPI_COMM_FAILURE_ACK/GET_ACKED`), but others are still
objectionable (e.g. `MPI_COMM_SHRINK` and `MPI_COMM_REVOKE`).

The suggestion is to break this into three pieces:
1. New error classes and `MPI_FAILURE_ACK/GET_ACKED`
2. `MPI_COMM_AGREE`
3. `MPI_COMM_REVOKE` and `MPI_COMM_SHRINK`

1 and 2 are probably standardizable as is while 3 is the part that is a problem for many. If we have
1 and 2, there might be other solutions that can replace 3 (or tweaks to 3 that can fix the problems
which we would discover in the meantime).

### [#80: Large Count](https://github.com/mpi-forum/mpi-issues/issues/80)

Jeff read the large counts proposal to add large counts versions of the collective functions. He
pointed out that he is not attempting to replace `int` with `MPI_Count` everywhere. If we want that
everywhere, we should do it with C++ and C11 generics and he could bring it as a future proposal.

Martin: If we're going to add `_X` versions of all of the MPI functions, we should make sure we have
all of the changes that we we're going to want. What about:
* Changing the rank from an `int` to `MPI_Rank`
* Adding an `MPI_INFO` object

### FP16

Atsushi presented an update on the FP16 work.

### [#76: Same Info in Collectives](https://github.com/mpi-forum/mpi-issues/issues/76)

Wesley presented a plenary on behalf of Jim Dinan to add an assertion that all
info keys are identical across a communicator.

There was feedback about not wanting force _all_ info keys to be uniform, particularly
around object creation. A number of potential solutions were discussed:

1. The values of this key are a list of other keys
2. Duplicate all keys that should have the same value and the new version is required to be uniform
3. Add an API for setting uniform keys (doesn’t work during object creation)
4. Add new values to keys that we want to be uniform (`true_everywhere`, `false_everywhere`)

### The State of Sessions (SoS)

Dan presented an update on the state of the sessions proposal. He asked for feedback
on whether the Sessions WG should start working on text for the core proposal. There
was support for this in the room.

### [#75: Interoperability with task-based runtimes](https://github.com/mpi-forum/mpi-issues/issues/75)

Dan presented an issue about how MPI can interoperate with task-based runtimes. The concern
is that MPI's thread-safety rules make valid task-based programs erroneous MPI programs.
This is the example program that breaks:

```
#OMP parallel
{
	#OMP task
	{ MPI_SSEND(...) }
	#OMP task
	{ MPI_RECV(...) }
	#OMP taskwait
}
```

The solution is a new thread level `MPI_TASK_MULTIPLE` which implies that the MPI
implementation will yield in the appropriate way to unblock other tasks.
---
layout: page
title: Official Votes for MPI-2
permalink: mpi-20/
---


This is a record of the official votes that have occurred for MPI-2.


April 24, 1996
--------------

22 officially voting institutions


Chapter 4 is One-sided Communications

Question:

Accept section 4.2 (Initialization)

Vote:

17 yes / 1 no / 3 abstain


Question:

Modify section 4.3 (Put and Get Calls) functions so put/get calls do
not have a target_count.

Vote:

4 yes / 15 no / 3 abstain


Question:

Modify section 4.3 (Put and Get Calls) to remove non-blocking versions
for RMA

Vote:

1 yes / 17 no / 4 abstain


Question:

Accept section 4.3 (Put and Get Calls)

Vote:

23 yes / 0 no / 0 abstain


Question:

Accept section 4.4 (Accumulate Functions) with ammendment that
locations in target data type can only be written once in a single
call.

Vote:

19 yes / 1 no / 0 abstain


Question:

Accept section 4.5 (Fence)

Vote:

19 yes / 0 no / 3 abstain


Question:

Have counters in RMA operations as described in 4.7.1 (Window Counters)

Vote:

11 yes / 6 no / 3 abstain


Question:

Accept 4.7.3 (Address transfer)

Vote:

17 yes / 0 no / 2 abstain


Question:

Accept 4.7.4 (RMW operations) with limitation that only applies to int
(no datatype), only count of 1, and restricted set of ops (to be
determined)

Vote:

21 yes / 1 no / 0 abstain


June 5, 1996
------------

27 officially voting institutions


Chapter 3 is Dynamic Processes

Question:

Should we adopt the current process manager interface defined in
section 3.3 (Process Manager Interface) instead of the counter
proposal in section 3.4 (Process Manager Interface - Counterproposal)?

Vote:

18 yes / 6 no / 2 abstain


June 7, 1996
------------

22 officially voting institutions


Question:

Ammend section 3.3 (Process Manager Interface) to replace MPI_Parent()
with MPI_COMM_PARENT.

Vote:

12 yes / 10 no / 3 abstain


Question:

Accept section 3.3 (Process Manager Interface) as ammended.
Ammendment were: delete minprocs; make info have (key,vlaue) pairs;
reserve several keys; info is a handle not a string; MPI_COMM_PARENT
(above).  All but the last were distributed in writing at the meeting.

Vote:

23 yes / 1 no / 1 abstain


Question:

Accept sections 3.5.1 (Signalling Processes) and 3.5.2 (Notification
of change in state of a process).

Vote:

19 yes / 3 no / 3 abstain


Question:

Accept section 3.5.3 (Universe Size).

Vote:

14 yes / 1 no / 9 abstain


Chapter 4 is One-sided

Question:

Accept section 4.6 (Window Counters) with ammendments.  Replace
MPI_GET_COUNTER and MPI_SET_COUNTER_THRESHOLD with proposal in 4.6.1.
Limit to only 1 post per request.  Add advice to users that 0 and 1
counts more efficient.

Vote:

13 yes / 6 no / 6 abstain


Question:

Accept section 4.7 (Semantics of RMA Operations)

Vote:

13 yes / 1 no / 10 abstain


Question:

Ammend section 4.8 (Atomicity and Memory Coherence Operations) to say
that RMA obeys same restrictions for local buffer access as MPI-1
currently has for send and receive.

Vote:

15 yes / 5 no / 6 abstain


Question:

Accept section 4.8 (Atomicity and Memory Coherence Operations) as
ammended.

Vote:

14 yes / 1 no / 9 abstain


Question:

Accept 4.11 (A Fortran Problem with Register Optimization) but make it
advice to users in MPI-1.2 since applies to MPI-1 also.

Vote:

12 yes / 0 no / 14 abstain


Question:

Accept Chapter 4 (One-sided).  Section 4.10 (Optimization Hints) was
removed.

Vote:

13 yes / 7 no / 5 abstain


July 18, 1996
--------------

23 officially voting institutions


Chapter 7 is MPI-1 Language Binding

Question:

Accept section 7.1.1 (Design)

Vote:

21 yes / 0 no / 2 abstain


Question:

Ammend section 7.1.2 (MPI-1 C++ Bindings) to remove virtual from
member functins

Vote:

4 yes / 10 no / 9 abstain


Question:

Accept section 7.1.2 (MPI-1 C++ Bindings) with no ammendments

Vote:

19 yes / 0 no / 5 abstain


Question:

Accept function scoping subsection of 7.1.3 (Semantics) with rule 4
removed.  To be moved to Chapter 2.

Vote:

19 yes / 0 no / 0 abstain


Question:

Accept remainder of section 7.1.3 (Semantics).  Amended to remove constants
subsection except for first sentence.

Vote:

19 yes / 0 no / 0 abstain


Note:

Skip section 7.1.4 (C++ Datatypes).  Need to fix names since C++ names
have Fortran name overlap which is a problem with interoperability in
MPI-2.


Question:

Accept section 7.1.5 (Inter-language Operability)

Vote:

16 yes / 0 no / 2 abstain


Note:

Postponing vote on Section 7.1.6 (Profiling)


July 19, 1996
--------------

23 officially voting institutions


Chapter 3 is Dynamic Processes

Question:

Accept sections 3.6.1 (Names, addresses, ports, and all that), 3.6.2
(Server Routines), 3.6.3 (Client Routines)

Vote:

20 yes / 0 no / 4 abstain


Question:

remove MPI_NAMES_ARE_PUBLISHED from section 3.6.4 (Name Publishing)

Vote:

13 yes / 2 no / 9 abstain


Question:

Ammend section 3.6.4 (Name Publishing).  Change 50:9 so it is
implementation-dependent and not erroneous to delete name.  Also, add
info argument to MPI_NAME_DELETE.

Vote:

22 yes / 0 no / 2 abstain


Question:

Accept section 3.6.4 (Name Publishing) as ammended

Vote:

20 yes / 0 no / 4 abstain


Question:

Accept section 3.6.5 (Non-blocking routines) noting that status is
still open question in MPI-2.

Vote:

19 yes / 1 no / 6 abstain


Question:

add ip_address key to section 3.6.7 (Reserved key values)

Vote:

3 yes / 3 no / 16 abstain


Question:

Accept sections 3.6.6 (Releasing Connections) and 3.6.7 (Reserved key
values) without ammendment

Vote:

16 yes / 1 no / 6 abstain


Question:

Ammend section 3.4.1 (Info Management Routines) to replace valuelen in
MPI_INFO_GET with constant to define maximum length it can be in MPI.

Vote:

15 yes / 2 no / 5 abstain


Question:

Accept section 3.4.1 (Info Management Routines) as ammended above plus
change to get Nth key instead of first/next key.  These were two
options given in handout at meeting.

Vote:

12 yes / 3 no / 7 abstain


September 4, 1996
--------------

19 officially voting institutions


Chapter 7 is External Interfaces

Question:

Accept section 7.2.1 (Introduction [to Generalized Requests])

Vote:

16 yes / 0 no / 5 abstain


Question:

Accept section 7.2.2 (Functionality)

Vote:

18 yes / 1 no / 3 abstain



Question:

Ammend 7.4.1 (Low level datatype accessing) so that result is the same
set of calls as was used to create the datatype

Vote:

17 yes / 0 no / 6 abstain


Question:

Accept section 7.4.1 (Low level datatype accessing) as ammended

Vote:

20 yes / 0 no / 3 abstain


Question:

Accept section 7.8 (Identifying Requests)

Vote:

18 yes / 0 no / 6 abstain


September 5, 1996 - AM
--------------

21 officially voting institutions


Note: votes on Chapter 3 (Miscellany For 1.2) were based on the text
handed out at the meeting.


Question:

Ammend 3.1 (Version Number) to remove functions to get version.

Vote:

1 yes / 13 no / 9 abstain


Question:

Accept section 3.1 (Version Number) without ammendment

Vote:

18 yes / 0 no /  2 abstain


Question:

Accept section 3.2.1 (Passing MPI_STATUS_IGNORE for MPI_Status)

Vote:

19 yes / 1 no / 3 abstain


Question:

Accept section 3.2.2 (Non-destructive Test of MPI_Status)

Vote:

23 yes / 0 no / 1 abstain


Question:

Accept section 3.3 (Error Class for Invalid Keyval)

Vote:

21 yes / 0 no / 3 abstain


Question:

Ammend 3.5 (Datatype extent) to use MPI_Type_newextent(oldtype, lb,
extent, newtype)

Vote:

15 yes / 0 no / 6 abstain


Question:

Accept sections 3.4 (True Extent of Datatypes) and 3.5 (Datatype
extent) as ammended

Vote:

22 yes / 0 no / 0 abstain


Question:

Ammend 3.6.1 (Clarification of MPI_Finalize) to read, "It is not
required that MPI_Finalize return on at least on process." (p. 5,
lines 9-10) I.e., add not and delete second sentence.

Vote:

11 yes / 6 no / 8 abstain


Question:

Ammend 3.1 (Version Number) so can't call version routines after finalize

Vote:

15 yes / 1 no / 4 abstain

(note: no full vote on 3.6.1 (Clarification of MPI_Finalize))


Question:

Accept section 3.6.2 (Clarification of MPI_INTERCOMM_CREATE)

Vote:

22 yes / 1 no / 1 abstain


Question:

Accept section 3.6.3 (Clarification of Binding of MPI_Type_size)

Vote:

19 yes / 0 no / 3 abstain


Question:

Ammend 3.6.4 (Clarification of MPI_REDUCE) to strike new text on p. 6,
lines 34-38.  Replace with advice to users that tell any combination
of functions can be called.

Vote:

22 yes / 0 no / 1 abstain


Question:

Accept section 3.6.4 (Clarification of MPI_REDUCE) as ammended

Vote:

22 yes / 0 no / 1 abstain


Question:

Accept section 3.7.2 (Contiguous Struct Types)

Vote:

6 yes / 7 no / 10 abstain


Question:

Accept section 3.7.3 (Convenient Form of MPI_Type_indexed_block)

Vote:

10 yes / 7 no / 7 abstain


Question:

Accept section 3.8 (Minor Corrections)

Vote:

20 yes / 0 no / 0 abstain


Note: votes on Chapter 4 (Process Creation and Management) were based
on the text handed out at the meeting.


Question:

Accept section 4.3.1 (Processes in MPI) and 4.3.2 (Starting Processes
and Establishing Communication With Them)

Vote:

22 yes / 0 no / 3 abstain


Question:

Accept section 4.3.3 (Starting Multiple Executables and Establishing
Communication with Them)

Vote:

20 yes / 0 no / 3 abstain


Question:

Ammend 4.5.3 (Notification of change in state of a process) so can
free like other requests in MPI, can cancel to remove handler, and
require progress as in rest of MPI.

Vote:

14 yes / 0 no / 8 abstain


Question:

ammendment to remove all independent functions, signal, and monitor
from dynamic chapter in MPI-2.  This removes 4.3.4 (Starting
Independent Processes), 4.3.5 (Starting multiple independent
processes), 4.3.6 (Nonblocking requests) part 2, 4.5.2 (Signaling
Processes), and 4.5.3 (Notification of change in state of a process).

Vote:

14 yes / 7 no / 4 abstain


Question:

Move sections just removed to JOD.

Vote:

19 yes / 1 no / 5 abstain


September 5, 1996 - PM
--------------

23 officially voting institutions


Chapter 10 is Miscellany with new version handed out at meeting.

Question:

Ammend 10.1 (Portable MPI Process Startup) so default of -n not
defined to be 1.

Vote:

14 yes / 4 no / 7 abstain


Question:

Accept section 10.1 (Portable MPI Process Startup)

Vote:

22 yes / 1 no / 2 abstain


Question:

Accept sections 10.3.1 (Introduction to Language Interoperability) and
10.3.2 (Assumptions)

Vote:

21 yes / 0 no / 2 abstain


Question:

Accept section 10.3.3 (Initialization)

Vote:

23 yes / 0 no / 1 abstain


Question:

Accept section 10.3.4 (Transfer of handles)

Vote:

22 yes / 0 no / 0 abstain


Question:

Accept sections 10.3.5 (MPI Opaque objects) and 10.3.6 (Datatypes)

Vote:

23 yes / 0 no / 2 abstain


Question:

Accept sections 10.3.8 (Groups) and 10.3.9 (Communicators)

Vote:

23 yes / 0 no / 1 abstain


Question:

Accept sections 10.3.11 (Requests), 10.3.12 (Error handlers) and
10.3.13 (Reduce operations)

Vote:

23 yes / 0 no / 0 abstain


Question:

Accept sections 10.3.15 (Constants) and 10.3.16 (Interlanguage
communication)

Vote:

21 yes / 0 no / 0 abstain


Question:

Accept section 4.3.6 (Nonblocking requests)

Vote:

12 yes / 1 no / 10 abstain


Question:

Accept section 4.3.7 (Reserved key values)

Vote:

15 yes / 1 no / 6 abstain


Question:

Accept introduction of section 4.4 (Establishing Communication) and
section 4.4.1 (Names, addresses, ports, and all that)

Vote:

15 yes / 0 no / 8 abstain


Question:

Accept section 4.4.2 (Server Routines)

Vote:

13 yes / 0 no / 10 abstain


Question:

Accept section 4.4.3 (Client Routines)

Vote:

11 yes / 0 no / 11 abstain


Question:

Accept section 4.4.4 (Name Publishing)

Vote:

11 yes / 0 no / 12 abstain


Question:

Accept iaccept in 4.4.5 (Non-blocking routines)

Vote:

12 yes / 1 no / 11 abstain


Question:

Accept iconnect in 4.4.5 (Non-blocking routines)

Vote:

9 yes / 3 no / 12 abstain

(note: the last two votes cause 4.4.5 (Non-blocking routines) to be
accepted)


Question:

Ammend 4.4.6 (Reserved key values) to add ip_address to reserved key
values

Vote:

12 yes / 0 no / 9 abstain


Question:

Accept section 4.4.6 (Reserved key values) as ammended

Vote:

13 yes / 0 no / 10 abstain


September 6, 1996
--------------

24 officially voting institutions


Note: votes on Chapter 5 (One-sided Communications) were based on the
text handed out at the meeting.  It was incorrectly numbered chapter 1.


Question:

Ammend 1.2 (Initialization) to drop disp_unit and make implicitly 1

Vote:

3 yes / 14 no / 8 abstain


Question:

Ammend 1.2 (Initialization) to make disp_unit be a datatype

Vote:

3 yes / 16 no / 5 abstain


Question:

Accept section 1.2 (Initialization) without ammendments

Vote:

21 yes / 2 no / 1 abstain


Question:

Ammend chapter to put datatype argument first in calls

Vote:

3 yes / 14 no / 6 abstain


Question:

Ammend chapter to state that MPI does not require character data be
supported in one-sided operations

Vote:

12 yes / 4 no / 7 abstain


Question:

Accept section 1.3 (Communication Calls) as ammended

Vote:

21 yes / 0 no / 3 abstain


Question:

Ammend 1.4.3 (Lock) to limit locks to wins that have memory created with
MPI_Mem_malloc

Vote:

16 yes / 7 no / 2 abstain


Question:

Accept section 1.4 (Synchronization calls) as ammended

Vote:

21 yes / 1 no / 2 abstain


Question:

Accept section 1.5 (Semantics and Correctness) with new text on p. 23
removed, i.e., progress rule.  It will be replaced by previous text
that indicates it is same as MPI-1 progress rule for pt-2-pt.

Vote:

19 yes / 1 no / 5 abstain


Question:

Accept chapter (One-sided Communications) as ammended

Vote:

20 yes / 2 no / 3 abstain


Question:

Ammend 10.3.7 (Addresses) to create 5 new address manipulation
functions.  Take arguments of type Integer (KIND=MPI_ADDR) in F90.
Take "equivalent", which is implementation dependent in F77.
Synonymous with old calls in C.

Vote:

7 yes / 5 no / 10 abstain

(note: decided not to vote formally on 10.3.7 (Addresses).  Decided to
change 10.3.10 (Attributes) to have new functions.)


October 8, 1996
--------------

21 officially voting institutions


Chapter 4 is Process Creation and Management

Question:

Ammend 4.5.1 (Info Management Routines) to:
	implementation can change order of keys
	remove MPI_VALUE_IGNORE

Vote:

15 yes / 1 no / 5 abstain


Question:

Ammend 4.5.1 (Info Management Routines) to:
	add MPI_INFO_DELETE(info,key)
	error if key not set, continuable if have this feature
	MPI_ERR_INFO_NOKEY

Vote:

8 yes / 5 no / 8 abstain


Question:

Ammend 4.5.1 (Info Management Routines) so key always 255

Vote:

5 yes / 6 no / 12 abstain


Question:

Accept 4.5.1 (Info Management Routines) as ammended (last ammendment
failed)

Vote:

18 yes / 0 no / 5 abstain


Question:

Ammend 4.5.2 (Universe Size) so key does not exist if can't use
MPI_UNIVERSE_SIZE. 

Vote:

9 yes / 0 no / 13 abstain


Question:

Accept 4.5.2 (Universe Size)

Vote:

9 yes / 7 no / 6 abstain


Question:

Accept 4.5.3 (Singleton MPI_INIT)

Vote:

8 yes / 6 no / 8 abstain


Question:

Accept 4.5.4 (MPI_APPNUM)

Vote:

10 yes / 1 no / 9 abstain


October 9, 1996
--------------

26 officially voting institutions


Chapter 5 is One-Sided Communications.  Handout contained proposed
changes.


Question:

Ammend 5.2.1 (Memory Allocation) so comm becomes info in MPI_MEM_ALLOC

Vote:

14 yes / 3 no / 9 abstain


Question:

Accept 5.2 (Initialization) as ammended

Vote:

18 yes / 3 no / 3 abstain


Question:

Ammend 5.3 (Communication Calls) so names reflect async. nature by
making them IXXX

Vote:

13 yes / 6 no / 5 abstain


Question:

Accept 5.3 (Communication Calls) as ammended

Vote:

24 yes / 2 no / 0 abstain


Question:

Ammend 5.4 (Synchronization calls) to delete 102:6-7 so can do
lock/unlock on any memory

Vote:

10 yes / 9 no / 6 abstain


Question:

Revote on last ammendment to delete 102:6-7.

Vote:

7 yes / 14 no / 4 abstain

Note: this means the ammendment fails


Question:

Accept 5.4 (Synchronization calls) with changes that rank becomes
group but leave info and test questions for later

Vote:

22 yes / 4 no / 1 abstain


October 9, 1996 - PM
--------------

22 officially voting institutions


Chapter 7 is External Interfaces

Question:

Accept 7.7 (Identifying Requests)

Vote:

14 yes / 0 no / 8 abstain


Question:

Accept 7.4.1 (Low level datatype accessing)

Vote:

14 yes / 0 no / 8 abstain


Question:

Remove 7.6 (Caching on MPI Handles) to JOD

Vote:

12 yes / 7 no / 5 abstain


Question:

Accept 7.8 (Naming Objects) with change that MPI_COMM_WORLD,
MPI_COMM_PARENT, AND MPI_COMM_SELF must have defined default name.

Vote:

15 yes / 1 no / 8 abstain


Question:

Accept 7.9 (Allowing User Errors) with changes in handout for more functions

Vote:

17 yes / 1 no / 7 abstain


October 10, 1996 - AM
--------------

17 officially voting institutions


Chapter 3 is Miscellany for 1.2

Question:

Accept 3.1 (Version Number)

Vote:

15 yes / 0 no / 1 abstain


Question:

Accept 3.2.1 (Passing MPI_STATUS_IGNORE for MPI_Status)

Vote:

15 yes / 0 no / 1 abstain


Question:

Accept 3.2.2 (Non-destructive Test of MPI_Status)

Vote:

16 yes / 0 no / 1 abstain


Question:

Accept 3.3 (Error Class for Invalid Keyval)

Vote:

12 yes / 0 no / 5 abstain


Question:

Accept 3.4 (A Fortran Problem with Register Optimization)

Vote:

14 yes / 0 no / 2 abstain


Question:

Accept 3.6.2 (Clarification of status after MPI_Isend)

Vote:

13 yes / 0 no / 3 abstain


Question:

Accept 3.6.3 (Clarification of MPI_INTERCOMM_CREATE)

Vote:

14 yes / 0 no / 3 abstain


Question:

Accept 3.6.x (new text) (Error Handler in Intercomm Merge).  This
clarifies that you get the error handler from local group.

Vote:

15 yes / 0 no / 2 abstain


Question:

Accept 3.6.4 (Clarification of Binding of MPI_Type_size)


Vote:

13 yes / 0 no / 4 abstain


Question:

Accept 3.6.5 (Clarification of MPI_REDUCE)

Vote:

13 yes / 0 no / 3 abstain


Question:

Accept 3.7.3 (Convenient Form of MPI_Type_indexed_block)

Vote:

9 yes / 4 no / 4 abstain


Question:

Accept 3.8 (Minor Corrections)

Vote:

13 yes / 0 no / 3 abstain


Chapter 9 is Miscellany


Question:

Accept 9.1 (Portable MPI Process Startup)

Vote:

14 yes / 2 no / 1 abstain


Question:

Ammend 9.4 (Continuable Errors) to remove list of continuable errors

Vote:

13 yes / 0 no / 2 abstain

Note: We did not vote on 9.4 (Continuable Errors)


Question:

Accept 9.5.2 (Signed Characters and Reductions)

Vote:

11 yes / 0 no / 6 abstain


Question:

Accept 9.5.1 (Wide Characters)

Vote:

13 yes / 0 no / 3 abstain


Question:

Ammend 3.6.1 (Clarification of MPI_FINALIZE) with presented text to
clarify exact meaning of when it is ok to finalize

Vote:

11 yes / 1 no / 9 abstain


Question:

Ammend 3.6.1 (Clarification of MPI_FINALIZE) so at least process 0 returns

Vote:

13 yes / 3 no / 6 abstain


Question:

Accept 3.6.1 (Clarification of MPI_FINALIZE)

Vote:

15 yes / 0 no / 8 abstain


Question:

Accept 3.5 (Determining Whether MPI Has Finished)

Vote:

16 yes / 1 no / 7 abstain


Chapter 6 is Extended Collective Operations

Question:

Should we have at least MPI_IBARRIER in chapter 6 (Extended Collective
Operation)

Vote:

12 yes / 9 no / 3 abstain


October 10, 1996 - PM
--------------

14 officially voting institutions


Chapter 8 is Language Binding


Question:

Accept 8.1 (C++ Introduction) [only intro paragraphs] and 8.1.1 (Design)

Vote:

14 yes / 0 no / 0 abstain


Question:

Accept 8.1.2 (C++ Classes for MPI)

Vote:

12 yes / 0 no / 2 abstain


Question:

Accept 8.1.3 (Class Member Functions for MPI)

Vote:

12 yes / 0 no / 1 abstain


Question:

Accept 8.1.4 (Semantics)

Vote:

11 yes / 0 no / 3 abstain


Question:

Accept 8.1.5 (C++ Datatypes)

Vote:

13 yes / 0 no / 1 abstain


Question:

Ammend 8.1.6 (Mixed-language Inter-operability) to change advice to
implementors on p. 190/191 so it is required

Vote:

6 yes / 0 no / 7 abstain


Question:

Ammend 8.1.6 (Mixed-language Inter-operability) to remove text just
made required.

Vote:

3 yes / 5 no / 4 abstain

Note: means text is now required and stays in


Question:

Accept 8.1.6 (Mixed-language Inter-operability) with ammendment

Vote:

8 yes / 1 no / 4 abstain


Question:

Accept 8.1.7 (Profiling)

Vote:

6 yes / 1 no / 4 abstain


October 11, 1996
--------------

17 officially voting institutions



Question:

Accept 9.3.1 (Type constructors with explicit addresses)

Vote:

12 yes / 0 no / 4 abstain


Question:

Accept 9.3.2 (Extent and Bounds of Datatypes)

Vote:

15 yes / 0 no / 3 abstain


Question:

Accept 9.3.3 (True Extend of Datatypes)

Vote:

17 yes / 0 no / 1 abstain


Question:

Accept 9.2.1 (Introduction), 9.2.2 (Assumptions), and 9.2.3 (Initialization)

Vote:

16 yes / 0 no / 2 abstain


Question:

Accept 9.2.4 (Transfer of handles)

Vote:

18 yes / 0 no / 1 abstain


Question:

Accept 9.2.5 (MPI Opaque objects) and 9.2.6 (Datatypes)

Vote:

19 yes / 0 no / 0 abstain


Question:

Accept 9.2.7 (Addresses)

Vote:

17 yes / 0 no / 3 abstain


Question:

Accept 9.2.8 (Groups), 9.2.9 (Communicators), 9.2.10 (Attributes),
9.2.11 (Requests), 9.2.12 (Error handlers), and 9.2.13 (Reduce operations)

Vote:

19 yes / 0 no / 0 abstain


Note: 9.2.14 (Status) skipped


Question:

Accept 9.2.15 (Constants)

Vote:

17 yes / 0 no / 1 abstain


Question:

Accept 9.2.16 (Interlanguage communication)

Vote:

18 yes / 0 no / 1 abstain


These next votes on Chapter 5 were based on handouts.


Question:

Accept flags for 5.4 (Synchronization Calls)

Vote:

14 yes / 0 no / 3 abstain


Question:

Add MPI_WIN_TEST to 5.4 (Synchronization Calls)

Vote:

8 yes / 0 no / 8 abstain


January 21, 1997
----------------

22 officially voting institutions


Chapter 4 is Process Creation and Management

Question:

Accept section 4.1 (Introduction)

Vote:

22 yes / 0 no / 1 abstain


Question:

Accept section 4.2 (The MPI-2 Process Model)

Vote:

20 yes / 0 no / 3 abstain


Question:

Accept section 4.5.3 (Singleton MPI_INIT)

Vote:

15 yes / 2 no / 5 abstain


Question:

Accept section 4.5.4 (MPI_APPNUM)

Vote:

14 yes / 5 no / 4 abstain


Question:

Ammend section 4.5.5 (Releasing Connections) to have _COMM precede the
ACCEPT/CONNECT/DISCONNECT in the names

Vote:

19 yes / 1 no / 2 abstain


Question:

Accept section 4.5.5 (Releasing Connections)

Vote:

16 yes / 0 no / 6 abstain


Chapter 3 is Version 1.2 of MPI (formally Miscellany for 1.2)

Question:

Accept first half of section 3.2.1 (Clarification of MPI_FINALIZE)
without process termination discussion

Vote:

22 yes / 0 no / 1 abstain


Question:

Ammend second half of section 3.2.1 (Clarification of MPI_FINALIZED /
Allowing User Functions at Process Termination) to delete p. 23, lines
30-31 & 40-41 that specify order of callbacks.

Vote:

13 yes / 6 no / 4 abstain


Question:

Accept section 3.2.1 (Clarification of MPI_FINALIZED) as ammended

Vote:

16 yes / 3 no / 3 abstain


Question:

Accept section 3.2.2 (Clarification of status after MPI_WAIT andd MPI_TEST)

Vote:

20 yes / 0 no / 2 abstain


Question:

Accept section 3.2.4 (Clarification of MPI_INTERCOMM_MERGE)

Vote:

23 yes / 0 no / 0 abstain


Question:

Ammend section 3.2.7 (Minor Corrections) to make MPI_LONG_LONG_INT and
MPI_UNSIGNED_LONG_LONG_INT required.

Vote:

3 yes / 15 no / 5 abstain

Note: This makes them optional but in the text.


Chapter 9 is Miscellany

Question:

Accept section 9.5 (Determining Whether MPI Has Finished)

Vote:

21 yes / 0 no / 0 abstain


Question:

Accept section 9.10 (Continuable Errors)

Vote:

4 yes / 11 no / 7 abstain

Note: This section was removed by this vote.


Question:

Accept sections 9.11.1 (Wide Characters) & 9.11.2 (Signed Characters
and Reductions)

Vote:

21 yes / 0 no / 1 abstain


January 22, 1997 - AM
---------------------

23 officially voting institutions


Chapter 10 is I/O

Question:

Ammend section 10.2.1 (Opening a File) to make filename, amode, and
info significant only at root and add root argument (to be consistent
with the method used in dynamic).

Vote:

9 yes / 11 no / 4 abstain


Question:

Ammend section 10.2.1 (Opening a File) to say filename must be
textually identical on all processes (already had a friendly
ammendment accepted that filename must reference the same file on all
processes).

Vote:

11 yes / 9 no / 4 abstain


Question:

Accept section 10.2.1 (Opening a File)

Vote:

15 yes / 5 no / 5 abstain


Question:

Accept section 10.2.2 (Nonblocking Open)

Vote:

3 yes / 18 no / 6 abstain

Note: this removes the section.


Question:

Accept section 10.2.3 (Closing a file)

Vote:

24 yes / 0 no / 2 abstain


Question:

Accept section 10.2.4 (Nonblocking Close)

Vote:

2 yes / 22 no / 2 abstain

Note: This removes the section.


Question:

Ammend section 10.2.5 (Deleting a file) to add info argument to MPI_DELETE

Vote:

13 yes / 5 no / 9 abstain


Question:

Accept section 10.2.5 (Deleting a file) 

Vote:

12 yes / 5 no / 9 abstain


Question:

Ammend section 9.6 (Handle Types) to have functions for each handle
type (12 total functions) in section 9.7.4 (Transfer of handles) and
remove section 9.6.

Vote:

12 yes / 1 no / 11 abstain

Note: This removes section 9.6.

Question:

Accept section 9.7.4 (Transfer of handles) as ammended

Vote:

20 yes / 0 no / 4 abstain


Question:

Accept first part of section 9.7.6 (Addresses)

Vote:

18 yes / 1 no / 4 abstain


Question:

Accept rest of section 9.7.6 (Addresses)

Vote:

19 yes / 0 no / 6 abstain


Question:

Accept section 9.7.7 (Reduce operations)

Vote:

21 yes / 0 no / 4 abstain


Question:

Accept section 9.7.10 (Interlanguage communication)

Vote:

21 yes / 0 no / 3 abstain


Question:

Accept start of section 9.8 (New datatype manipulation functions) and
section 9.8.1 (Type constructors with explicit addresses)

Vote:

20 yes / 0 no / 6 abstain


Question:

Accept section 9.8.2 (Extent and Bounds of Datatypes)

Vote:

18 yes / 0 no / 7 abstain


Question:

Accept section 9.8.3 (Ture Extent of Datatypes)

Vote:

17 yes / 0 no / 6 abstain


Question:

Accept section 9.9 (New attribute caching functions)

Vote:

20 yes / 0 no / 5 abstain


Question:

Based on handout, add to section 3.2 (MPI-1.0 and MPI-1.1
Clarifications) that it is an erroneous program if an error code is
returned by a attribute callback function.

Vote:

19 yes / 3 no / 3 abstain


Question:

Ammend MPI to add the predefined groups MPI_GROUP_WORLD and MPI_GROUP_SELF

Vote:

1 yes / 8 no / 17 abstain


January 22, 1997 - PM
---------------------

25 officially voting institutions


Question:

Make Bill Gropp collective chair

Vote:

25 yes / 1 no / 4 abstain


Question:

Make interoperability a chpater in MPI-2 document

Vote:

3 yes / 15 no / 10 abstain

Note: This means interoperability will not be pursued as an official
part of MPI-2.


January 22, 1997 - evening
--------------------------

22 officially voting institutions


Chapter 8 and Appendix C are Language Binding

Question:

Accept bindings style in Appendix C (MPI - C++ Language Binding -
Proposal 2)

Vote:

16 yes / 0 no / 5 abstain


Question:

Ammendment to modify Appendix C to use new MPI-1 names in section 3.3
(Alternative Names for MPI-1 Functions)

Vote:

11 yes / 3 no / 7 abstain


Question:

Accept Appendix C (MPI - C++ Language Binding - Proposal 2) as modified

Vote:

18 yes / 0 no / 3 abstain


Question:

Accept section 8.1.5 (C++ Datatypes) with friendly ammendments to add
unsigned long long, signed char, and wchar

Vote:

15 yes / 0 no / 4 abstain


Question:

Accept section 8.1.7 (Profiling)

Vote:

8 yes / 0 no / 13 abstain


Chapter 5 is One-Sided Communications


Question:

Ammend section 5.2.2 (Window Creation) to make MPI_WIN_FREE collective

Vote:

18 yes / 0 no / 2 abstain


Question:

Ammend section 5.2.2 (Window Creation) so size in MPI_WIN_INIT and
target_disp in put/get/accumulate calls are MPI_AINT in C and INTEGER
(KIND = MPI_ADDRESS_KIND) IN Fortran

Vote:

15 yes / 2 no / 2 abstain


Question:

Accept section 5.6 (Semantics and Correctness)

Vote:

7 yes / 2 no / 9 abstain


Question:

Accept sections 8.2.1 (Overview) and 8.2.2 (Basic Fortran Support)

Vote:

13 yes / 0 no / 7 abstain


Question:

Ammend section 8.2.2 (Basic Fortran Support) to include in MPI-1.2

Vote:

4 yes / 2 no / 11 abstain


Question:

Ammend section 8.2.3 (Extended Fortran Support) so item 2 (Fatal type
mismatch) becomes a high quality implementation issue instead of required.

Vote:

7 yes / 2 no / 10 abstain


Question:

Accept section 8.2.3 (Extended Fortran Support)

Vote:

9 yes / 1 no / 9 abstain


Chapter 7 is External Interfaces and Chapter 14 is Caching on MPI Handles


Question:

Accept section 7.6 (Adding New Error Classes and Error Codes)

Vote:

14 yes / 0 no / 6 abstain


Question:

Accept section 14.2 (Functions) for adding caching with separate
functions on MPI_DATATYPE

Vote:

17 yes / 0 no / 2 abstain

Note: This vote means the section 9.9 (New attribute caching
functions) on caching in Misc is superceded by this section.


Question:

Accept start of section 7.7 (Accessing MPI Datatypes)

Vote:

17 yes / 0 no / 3 abstain


Question:

Accept section 7.7.1 (Low Level Datatype Accessing)

Vote:

8 yes / 3 no / 9 abstain


Question:

Accept section 7.7.2 (Datatype Encoding and Decoding)

Vote:

8 yes / 10 no / 5 abstain

Note: This removes this from MPI-2


Question:

Make section 7.7.3 (Canonical Datatype Representation) advice

Vote:

11 yes / 1 no / 10 abstain


Question:

Accept start of section 7.9 (MPI and Threads)

Vote:

16 yes / 0 no / 5 abstain


Question:

Accept section 7.9.1 (General)

Vote:

13 yes / 0 no / 8 abstain


Question:

Accept section 7.9.2 (Clarifications)

Vote:

14 yes / 0 no / 5 abstain


Question:

Accept section 7.4 (Associating Information with Status)

Vote:

14 yes / 0 no / 5 abstain



Question:

Accept MPI_TYPE_DUP as presented (like discussion in Chapter 14
(Caching on MPI Handles)

Vote:

15 yes / 0 no / 7 abstain


Question:

Accept section 7.5 (Naming Communicators)

Vote:

12 yes / 1 no / 9 abstain


January 23, 1997
----------------

22 officially voting institutions


Chapter 6 is Extended Collective Operations


Question:

Accept section 6.4 (Intercommunicator Constructors)

Vote:

13 yes / 0 no / 9 abstain


Question:

Accept sections 6.5.1 (Intercommunicator Collective Operations), 6.5.2
(Operations that Move Data), and 6.5.3 (Reductions) without voting on
in-place operations for these sections

Vote:

15 yes / 2 no / 5 abstain


Question:

Accept in-place for intracommuncators only for sections 6.5.1
(Intercommunicator Collective Operations), 6.5.2 (Operations that Move
Data), and 6.5.3 (Reductions)

Vote:

17 yes / 0 no / 6 abstain


Question:

Accept sections 6.5.4 (Generalized All-to-all Operations) and 6.5.5
(Generalized All-to-all Functions)

Vote:

16 yes / 0 no / 8 abstain


Question:

Accept section 6.6 (Exclusive Scan)

Vote:

6 yes / 1 no / 17 abstain


Question:

Accept section 10.4.2 (Data Access with Explicit Offsets) without
non-blocking collective routines

Vote:

16 yes / 0 no / 5 abstain


Question:

Accept section 10.4.3 (Data Access With Individual File Pointers)

Vote:

19 yes / 0 no / 2 abstain


Question:

Accept section 10.3 (File Views)

Vote:

18 yes / 0 no / 2 abstain


Question:

Accept sections 10.2.6 (Resizing a file), 10.2.7 (Preallocating space
for a file), and 10.2.8 (Querying the size of a file)

Vote:

13 yes / 0 no / 5 abstain


Question:

Ammend section 10.2.9 (Querying File Parameters) to make
MPI_FILE_GET_COMM into MPI_FILE_GET_GROUP

Vote:

6 yes / 5 no / 9 abstain


Question:

Accept MPI_FILE_GET_GROUP in section 10.2.9 (Querying File Parameters)

Vote:

11 yes / 4 no / 5 abstain


Question:

Accept amode in section 10.2.9 (Querying File Parameters)

Vote:

13 yes / 0 no / 7 abstain

Note: This accepts 10.2.9 with name change


Question:

Accept set ability in section 10.2.10 (File Info)

Vote:

14 yes / 1 no / 6 abstain


Question:

Accept get ability in section 10.2.10 (File Info)

Vote:

13 yes / 2 no / 6 abstain


Question:

Accept section 10.4.4 (Data Access with Shared File Pointers) without
non-blocking collective

Vote:

13 yes / 4 no / 3 abstain


Question:

Accept Native and Internal without MPI_FILE_GET_SIZE in section 10.5
(File Interoperability)

Vote:

16 yes / 0 no / 5 abstain


Question:

In favor of a canonical file representation

Vote:

13 yes / 4 no / 4 abstain


March 5, 1997 - PM
--------------

19 officially voting institutions

Chapter 10 is I/O


Question:

Accept section 10.10 (Examples)

Vote:

10 yes / 2 no / 5 abstain


Question:

Accept section 10.9 (I/O Error Classes)

Vote:

14 yes / 1 no / 5 abstain


Question:

Accept section 10.7.2 (Scatter / Gather Type Constructors)

Vote:

3 yes / 10 no / 8 abstain

Note: This vote removes this section


Question:

Accept section 10.7.1 (Introduction)

Vote:

10 yes / 0 no / 3 abstain


Question:

Accept section 10.7.3 (Local Array Filetype Constructor)

Vote:

21 yes / 0 no / 2 abstain


Question:

Ammend section 10.7.4 (Distributed Array Filetype Constructors) to use
a communicator instead of size, rank, pdims, and psizes in MPI_TYPE_DARRAY

Vote:

6 yes / 6 no / 10 abstain

Note: The motion fails


Question:

Ammend section 10.7.4 (Distributed Array Filetype Constructors) to 
remove MPI_TYPE_DARRAY_BLOCK AND MPI_TYPE_DARRAY_CYCLIC

Vote:

10 yes / 3 no / 8 abstain


Question:

Accept section 10.7.4 (Distributed Array Filetype Constructors) as ammended

Vote:

18 yes / 0 no / 4 abstain


Question:

Accept section 10.6.1 (File Consistency)

Vote:

18 yes / 0 no / 4 abstain


Chapter 4 is Process Creation and Mangement and votes were based on
the version handed out at the meeting

Question:

Accept section 4.1 (Introduction)

Vote:

13 yes / 0 no / 5 abstain


Question:

Accept section 4.2 (The MPI-2 Process Model)

Vote:

15 yes / 0 no / 5 abstain


Question:

Accept all of Chapter 4 (Process Creation and Mangement) except
disconnect, MPI_INFO_ATTRIBUTE, TRYACCEPT, AND 2 phase spawn

Vote:

12 yes / 7 no / 7 abstain


March 6, 1997 - AM
--------------

27 officially voting institutions


Chapter 7 is External Interfaces

Question:

Accept section 7.1 (Introduction)

Vote:

25 yes / 0 no / 7 abstain


Question:

Accept section 7.2.1 (Version 1 - minimal functionality)

Vote:

24 yes / 4 no / 4 abstain


Question:

Accept section 7.2.3 (Version 2.1: Handler option)

Vote:

6 yes / 13 no / 8 abstain

Note: This vote removes all of version 2


These Chapter 10 votes are based on a handout at the meeting


Question:

Do at least one canonical representation for files

Vote:

18 yes / 3 no / 3 abstain


Question:

Accept section 10.6.2 (Progress)

Vote:

22 yes / 0 no / 4 abstain


Question:

Accept section 10.6.3 (Collective File Operations), section 10.6.4
(Type Matching), section 10.6.5 (Miscellaneous Clarifications), and
section 10.6.6 (Logical vs. Physical File Layout)

Vote:

22 yes / 0 no / 3 abstain


Question:

Accept section 10.8 (I/O Error Handling)

Vote:

15 yes / 2 no / 9 abstain


Question:

Accept section 10.1 (Introduction)

Vote:

25 yes / 0 no / 2 abstain


Question:

Accept section 10.4.1 (Data Access Routines)

Vote:

20 yes / 1 no / 3 abstain


March 6, 1997 - afternoon
--------------

26 officially voting institutions


Question:

Accept version 1 part of section 7.2.5 (Examples)

Vote:

17 yes / 0 no / 8 abstain


Question:

Accept start section 7.8 (MPI and Threads) and sectin 7.8.1 (General)

Vote:

20 yes / 0 no / 5 abstain


Question:

Amment section 7.8.2 (Clarifications) to remove p. 166 lines 44:45 that
require MPI_INIT and MPI_FINALIZE on same thread

Vote:

3 yes / 18 no / 5 abstain


Question:

Accept section 7.8.2 (Clarifications) unammended

Vote:

19 yes / 0 no / 7 abstain


Question:

Accept section 7.8.3 (Initialization)

Vote:

9 yes / 5 no / 11 abstain


Question:

Accept section 7.9 (New attribute caching functions) to include
caching on MPI_WIN

Vote:

19 yes / 0 no / 5 abstain


Question:

Accept section 7.10 (Duplicating a Datatype)

Vote:

22 yes / 0 no / 2 abstain


Question:

Remove section 7.7 (identifying Requests)

Vote:

16 yes / 2 no / 5 abstain

Note: The section if removed from the standard


Question:

Accept section 7.3 (Associating Information with Status)

Vote:

14 yes / 0 no / 9 abstain


Question:

Accept section 7.5 (Adding New Error Classes and Error Codes)

Vote:

15 yes / 3 no / 6 abstain



Chapter 6 is Extended Collective Operations


Question:

Ammend section 6.2 (Two-phase Collective Communications) to make start
to be collective

Vote:

13 yes / 2 no / 8 abstain


Question:

Ammend section 6.2 (Two-phase Collective Communications) to invert
p. 2 lines 43 and 44, i.e., can't do blocking collective inside two
phase operation

Vote:

10 yes / 3 no / 11 abstain


Question:

Ammend section 6.2 (Two-phase Collective Communications) to only allow
one two phase operation per process

Vote:

8 yes / 15 no / 0 abstain


Question:

Ammend section 6.2 (Two-phase Collective Communications) to remove buf
from end call in C

Vote:

3 yes / 16 no / 2 abstain


Question:

Accept section 6.2 (Two-phase Collective Communications)

Vote:

11 yes / 12 no / 2 abstain

Note: This removed two phase collective operations


Question:

Accept section 6.3 (Intercommunicator Constructors)

Vote:

21 yes / 1 no / 1 abstain


Question:

Ammend section 6.4 (Extended Collective Operations) to make rooted
calls by all processes in communicator

Vote:

20 yes / 0 no / 5 abstain


Question:

Ammend section 6.4 (Extended Collective Operations) to allow MPI_ROOT
for intracommunicators

Vote:

2 yes / 10 no / 11 abstain


Question:

Accept section 6.4 (Extended Collective Operations) as ammended

Vote:

17 yes / 2 no / 4 abstain


Question:

Accept section 6.5 (Exclusive Scan)

Vote:

12 yes / 3 no / 9 abstain


Question:

Move two phase collective operations to JOD

Vote:

17 yes / 0 no / 1 abstain


Chapter 3 is Version 1.2 of MPI


Question:

Accept section 3.2.1 (Clarification of MPI_INITIALIZED)

Vote:

16 yes / 0 no / 2 abstain


Question:

Accept section 3.2.8 (Clarification of Error Behavior of Attribute
Callback Functions)

Vote:

16 yes / 0 no / 7 abstain


Chapter 9 is Miscellany


Question:

Accept section 9.5 (Allowing User Functions at Process Termination)

Vote:

16 yes / 6 no / 6 abstain


Question:

Accept section 9.8 (New Datatype Manipulation Functions)

Vote:

18 yes / 0 no / 4 abstain


Question:

Accept section 9.9.3 (Unsigned Long long type)

Vote:

19 yes / 0 no / 5 abstain


Question:

Accept ideas in section 9.10 (Functions and Macros) to allow use with
MPI_WTIME and MPI_WTICK and Fortran-to-C conversion routines in
section 9.7.4 (Transfer of handles)

Vote:

16 yes / 3 no / 5 abstain


Question:

Accept p. 214 line 45 to p. 216 line 34 (Cntinuable Errors Issue)

Vote:

6 yes / 10 no / 7 abstain

Note: The section is removed


Question:

Move p. 214 line 45 to p. 216 line 34 (Cntinuable Errors Issue) to the
JOD

Vote:

17 yes / X no / X abstain

Note: vote not finished and clearly passed


March 6, 1997 - PM
--------------

17 officially voting institutions


Question:

Accept Appendix B (MPI-1 C++ Language Binding)

Vote:

16 yes / 0 no / 3 abstain


Chapter 8 is Language Binding


Question:

Accept section 8.2.1 (Overview)

Vote:

10 yes / 0 no / 7 abstain


Question:

Accept section 8.2.2 (Basic Fortran Support)

Vote:

9 yes / 0 no / 8 abstain


Question:

Accept section 8.2.3 (Extended Fortran Support)

Vote:

9 yes / 0 no / 8 abstain


Question:

Accept Chapter 8 (Language Binding)

Vote:

12 yes / 0 no / 5 abstain


These votes on Chapter 10 were based on a handout at meeting


Question:

Accept section 10.5 (File Interoperability) with set-view data
representation but not external32 or external64

Vote:

14 yes / 0 no / 4 abstain


Question:

Accept external32 but don't make it required

Vote:

15 yes / 0 no / 6 abstain


Question:

Should the subcommittee write up the ideas on user filters for a vote

Vote:

19 yes / 1 no / 1 abstain


Question:

Accept external64

Vote:

6 yes / 10 no / 4 abstain


Question:

Add optional datatypes to external32

Vote:

13 yes / 3 no / 3 abstain


Question:

Require support for external32 where use message passing data conversion

Vote:

14 yes / 3 no / 3 abstain


Question:

Accept section 10.6.2 (Random Access vs. Sequential Files)

Vote:

15 yes / 0 no / 3 abstain


Question:

Accept section 10.4.5 (Two-phase Collective Data Access Routines)

Vote:

12 yes / 2 no / 4 abstain


Question:

Accept section 10.2.1 (Opening a File)

Vote:

15 yes / 0 no / 0 abstain


March 7, 1997
--------------

22 officially voting institutions


Chapter 1 is Introduction to MPI-2

Question:

Amment Chapter 1 to strike sentence about implementors doing
interoperability

Vote:

11 yes / 3 no / 4 abstain


Question:

Accept proposed ammendment about interoperability

Vote:

20 yes / 0 no / 1 abstain


Question:

Accept Chapter 1 (Introduction to MPI-2)

Vote:

20 yes / 0 no / 1 abstain


Chapter 2 is MPI-2 Terms and Conventions


Question:

Accept sections 2.1 (Document Notation), section 2.2 (Naming
Conventions), and section 2.3 (Procedure Specification)

Vote:

22 yes / 0 no / 0 abstain


Question:

Accept section 2.4 (Semantic Terms)

Vote:

21 yes / 0 no / 1 abstain


Question:

Accept section 2.5 (Data Types)

Vote:

21 yes / 0 no / 3 abstain


Question:

Accept start of section 2.6 (Language Binding) and section 2.6.1
(Fortran 77 Binding Issues)

Vote:

18 yes / 0 no / 6 abstain


Question:

Accept section 2.6.2 (A Fortran Problem with Register Optimization)

Vote:

18 yes / 0 no / 6 abstain


Question:

Accept sections 2.6.3 (C Binding Issues) and 2.6.4 (C++ Binding Issues)

Vote:

23 yes / 0 no / 0 abstain


Question:

Accept section 2.7 (Processes) with written ammendment

Vote:

18 yes / 0 no / 7 abstain


Question:

Accept section 2.8 (Error Handling)

Vote:

22 yes / 0 no / 1 abstain


Question:

Accept section 2.9 (Implementation issues) with p. 17 lines 12 to 20
removed

Vote:

19 yes / 0 no / 4 abstain


Chapter 4 vote based on handout


Question:

Accetp MPI_JOIN

Vote:

13 yes / 1 no / 9 abstain


Chapter 10 vote based on handout


Question:

Accept F90 external data representation

Vote:

10 yes / 1 no / 13 abstain



Chapter 7 vote based on slides shown


Question:

Accept new section 7.6 (Accessing MPI Datatypes)

Vote:

16 yes / 1 no / 6 abstain


Chapter 3 vote based on text presented


Question:

Accept section 3.2.2 (Clarification of MPI_FINALIZE)

Vote:

22 yes / 1 no / 1 abstain


Question:

Add canonical ability to MPI_PACK and MPI_UNPACK

Vote:

16 yes / 0 no / 7 abstain


Chapter 10 vote based on handout

Question:

Ammend section 10.5.3 (User Defined Data Representations) to add
extra_state argument to calls

Vote:

12 yes / 1 no / 10 abstain


Question:

Accept section 10.5.3 (User Defined Data Representations) as ammended

Vote:

15 yes / 0 no / 9 abstain


Chapter 5 vote based on handout


Question:

Ammend MPI_WIN_BARRIER to add assertion in section 5.4.2 (Barrier)

Vote:

13 yes / 1 no / 8 abstain


Vote based on document text

Question:

Remove section 5.4.1 (General 2-party synchronization)

Vote:

5 yes / 9 no / 9 abstain


Chapter 10 votes based on handout


Question:

Accept section 10.2.2 (Closing a File)

Vote:

19 yes / 0 no / 2 abstain


Question:

Accept section 10.2.3 (Deleting a File)

Vote:

20 yes / 0 no / 2 abstain


Question:

Accept section 10.2.4 (Resizing a File)

Vote:

20 yes / 0 no / 2 abstain


Question:

Accept section 10.2.5 (Preallocating space for a file)

Vote:

17 yes / 0 no / 4 abstain


Question:

Accept sections 10.2.6 (Querying the size of a file) and 10.2.7
(Querying File Paramenters)

Vote:

21 yes / 0 no / 1 abstain


Question:

Accept section 10.2.8 (File Info)

Vote:

18 yes / 0 no / 2 abstain


Question:

Accept section 10.3 (File Views)

Vote:

20 yes / 0 no / 2 abstain


Question:

Accept section 10.4.2 (Data Access With Explicit Offsets)

Vote:

19 yes / 0 no / 2 abstain


Question:

Accept MPI_QUERY_FILTER as presented

Vote:

12 yes / 0 no / 8 abstain


Question:

Accept section 10.4.3 (Data Access with Individual File Pointers)

Vote:

19 yes / 0 no / 2 abstain


Question:

Accept section 10.4.4 (Data Access with Shared File Pointers) - based
on original document

Vote:

14 yes / 1 no / 6 abstain


April 23, 1997 - afternoon
--------------

29 officially voting institutions


Question:

Accept Chapter 1 (Introduction to MPI-2)

Vote:

28 yes / 0 no / 0 abstain


Question:

Add Tony Skjellum to list on page VIII

Vote:

16 yes / 2 no / 12 abstain


Chapter 2 is MPI-2 Terms and Conventions


Question:

Accept Introduction paragraph and section 2.1 (Document Notation)

Vote:

27 yes / 0 no / 1 abstain


Question:

Accept section 2.2 (Naming Conventions)

Vote:

27 yes / 0 no / 3 abstain


Question:

Accept section 2.3 (Procedure Specification)

Vote:

25 yes / 0 no / 2 abstain


Question:

Accept section 2.4 (Semantic Terms)

Vote:

26 yes / 0 no / 5 abstain


Question:

Accept section 2.5 (Data Types)

Vote:

25 yes / 0 no / 3 abstain


Question:

Accept section 2.6 (Language Binding) with ammendments

Vote:

27 yes / 0 no / 2 abstain


Question:

Accept sections 2.7 (Processes) and 2.8 (Error Handling)

Vote:

27 yes / 0 no / 1 abstain


Question:

Accept sections 2.9 (Implementation issues) and 2.10 (Examples)

Vote:

28 yes / 0 no / 2 abstain


April 23, 1997 - evening
--------------

28 officially voting institutions


Chapter 5 is One-Sided Communications


Question:

Remove Advice to implementors on p. 105 in section 5.6.2 (Progress)

Vote:

9 yes / 11 no / 8 abstain


Question:

Remove p. 105 line 39 forward from Advice to implementors in section
5.6.2 (Progress)

Vote:

5 yes / 11 no / 11 abstain


Question:

Accept chapter 5

Vote:

20 yes / 3 no / 4 abstain


Question:

Accept chapter 4

Vote:

19 yes / 0 no / 0 abstain


April 24, 1997 - morning
--------------

29 officially voting institutions


Chapter 10 is I/O


Question:

Accept section 10.1 (Introduction)

Vote:

26 yes / 0 no / 3 abstain


Question:

Accept section 10.4.1 (Data Access Routines) as ammended

Vote:

24 yes / 0 no / 3 abstain


Question:

Accept section 10.4.5 (Split Collective Data Access Routines)

Vote:

21 yes / 2 no / 5 abstain


Question:

Accept section 10.6.1 (File Consistency)

Vote:

24 yes / 0 no / 5 abstain


Question:

Accept sections 10.6.2 - 10.6.8 (Random Access vs. Sequential Files,
Progress, Collective File Operations, Type Matching, Miscellaneous
Clarifications, MPI_Offset Type, and Logical vs. Physical File Layout)

Vote:

23 yes / 0 no / 4 abstain


Question:

Accept sections 10.7.1 (Introduction) and 10.7.2 (Local Array Filetype
Constructors)

Vote:

24 yes / 0 no / 5 abstain


Question:

Accept section 10.7.3 (Distributed Array Filetype Constructors)

Vote:

19 yes / 1 no / 6 abstain


Question:

Accept sections 10.8 (I/O Error Handling) and 10.9 (I/O Error Classes)
with MPI_ERR_FILTER, FILE_HANDLE_X -> "default error handler", and
set/get on FILE_NULL changed to default

Vote:

22 yes / 0 no / 6 abstain


Question:

Accept section 10.5 (File Interoperability) - intro part only

Vote:

19 yes / 0 no / 8 abstain


Question:

Accept section 10.5.1 (Datatype in a Heterogeneous Environment) with
ammendments on slide

Vote:

21 yes / 0 no / 7 abstain


Question:

Accept section 10.5.2 (External Data Representations: "external32")

Vote:

21 yes / 0 no / 5 abstain


Chapter 8 is Language Bindings


Question:

Remove subsection Constuction Routine for Basic Fortran 90 Datatypes
from section 8.2.4 (Extended Fortran Support)

Vote:

3 yes / 6 no / 12 abstain


Question:

Accept section 8.2 (Fortran Support) as ammended

Vote:

12 yes / 0 no / 9 abstain


Question:

Accept section 8.1.6 (Exceptions) as ammended

Vote:

15 yes / 0 no / 7 abstain


April 24, 1997 - afternoon
--------------

23 officially voting institutions


Question:

Accept section 10.5.3 (User Defined Data Representations)

Vote:

16 yes / 0 no / 8 abstain


Question:

Accept section 10.5.4 (Matching Data Representations)

Vote:

17 yes / 0 no / 6 abstain


Question:

Accept section 10.2 (File Manipulation)

Vote:

20 yes / 0 no / 3 abstain


Question:

Accept section 10.3 (File Views)

Vote:

22 yes / 0 no / 2 abstain


Question:

Accept sections 10.4.2 - 10.4.4 (Data Access With Explicit Offsets,
Data Access with Individual File Pointers, and Data Access with Shared
File Pointers) without first sentence of read/write description

Vote:

22 yes / 0 no / 3 abstain


Question:

Accept section 10.6.9 (File Size) on handout

Vote:

19 yes / 0 no / 4 abstain


Question:

Remove etypes from I/O chapter

Vote:

5 yes / 11 no / 10 abstain


Question:

Change p. 222 line 44 to be "the file extent of etype must be identical"

Vote:

16 yes / 2 no / 7 abstain


Question:

Accept chapter 10

Vote:

25 yes / 2 no / 1 abstain


April 24, 1997 - late afternoon
--------------

23 officially voting institutions


Chapter 6 is Extended Collective Operaions


Question:

Accept section 6.1 (Introduction)

Vote:

20 yes / 0 no / 1 abstain


Question:

Allow empty group in MPI_COMM_CREATE AND MPI_COMM_SPLIT

Vote:

2 yes / 4 no / 17 abstain


Question:

Make Barrier semantics consistent with ALLREDUCE

Vote:

11 yes / 1 no / 13 abstain


Question:

Accept chapter 6

Vote:

22 yes / 0 no / 2 abstain


Chapter 3 is Version 1.2 of MPI


Question:

Keep current text on finalize

Vote:

8 yes / 6 no / 12 abstain


Question:

Accept section 3.2.9 (Clarificaion of MPI_PROBE and MPI_IPROBE

Vote:

18 yes / 0 no / 6 abstain


Question:

Accept chapter 3

Vote:

26 yes / 0 no / 0 abstain


Chapter 9 is Miscellany


Question:

Accept section 9.7.5 (Status)

Vote:

26 yes / 0 no / 0 abstain


Question:

Accept section 9.10 (Functions and Macros)

Vote:

26 yes / 0 no / 1 abstain


Question:

Ammend to add data representation to functions in 9.11 (Canonical
MPI_PACK and MPI_UNPACK)

Vote:

5 yes / 1 no / 16 abstain


Question:

Accept section 9.11 (Canonical MPI_PACK and MPI_UNPACK)

Vote:

19 yes / 1 no / 5 abstain


Question:

Accept chapter 9

Vote:

25 yes / 0 no / 2 abstain


Chapter 7 is External Interfaces


Question:

Accept section 7.1 (Introduction)

Vote:

23 yes / 0 no / 3 abstain


Question:

Accept section 7.2 (Generalized Requests)

Vote:

10 yes / 5 no / 7 abstain


Question:

Accept section 7.4 (Naming Communicators)

Vote:

19 yes / 0 no / 3 abstain


Question:

Accept section 7.5 (Adding New Error Classes and Error Codes)

Vote:

17 yes / 0 no / 4 abstain


April 24, 1997 - evening
--------------

21 officially voting institutions


Question:

Ammend 7.6.3 (Initialization) to add argc and argv to INIT_THREAD

Vote:

13 yes / 4 no / 3 abstain


Question:

Ammend 7.6.3 (Initialization) to take alternative of QUERY_THREAD)

Vote:

10 yes / 0 no / 6 abstain


Question:

Accept section 7.6 (MPI and Threads)

Vote:

13 yes / 0 no / 6 abstain


Question:

Accept section 7.5.1 (Adding New Error Classes and Error Codes)

Vote:

13 yes / 0 no / 3 abstain


Question:

Accept chapter 7

Vote:

17 yes / 0 no / 0 abstain


Question:

Use overloaded functions with void in C++ for initialization routines

Vote:

13 yes / 2 no / 0 abstain


Question:

Accept window error handler text on slide

Vote:

14 yes / 0 no / 1 abstain


Question:

Add separate error handlers for files and windows

Vote:

13 yes / 2 no / 1 abstain


Question:

Alias with new names for communicators and depricate old ones for C
and Fortran

Vote:

8 yes / 5 no / 3 abstain


April 25, 1997 - morning
--------------

30 officially voting institutions


Question:

Ammend section 2.6.2 (C Binding Issues) on p. 11 lines 30-31 about
values returned in C++ as per slide

Vote:

23 yes / 0 no / 7 abstain


Question:

Ammend section 2.6.3 (C++ Binding Issues) about C++ static as per slide

Vote:

22 yes / 0 no / 6 abstain


Question:

Ammend section 8.2 (Fortran Support) for F90 types in handout

Vote:

12 yes / 1 no / 15 abstain


Question:

Accept ammendment to give fuller F90 on slide

Vote:

12 yes / 8 no / 11 abstain


Question:

Accept corrected text for TYPE_RESIZED in section 9.8.2 (Extent and
Bounds of Datatypes) on slide

Vote:

21 yes / 0 no / 7 abstain


Question:

Accept ammendment to 2.6.3 (C++ Binding Issues) of C++ return values
on slide

Vote:

24 yes / 0 no / 6 abstain


Question:

Accept chapter 2

Vote:

30 yes / 0 no / 1 abstain


Question:

Accept 8.1.6 (Exceptions) as ammended

Vote:

25 yes / 0 no / 5 abstain


Question:

Accept chapter 8

Vote:

29 yes / 0 no / 1 abstain


Question:

Ammend section 10.6.9 about shared file pointers

Vote:

22 yes / 1 no / 7 abstain


Question:

Ammend chapter 10 with new names on slides

Vote:

24 yes / 5 no / 2 abstain


Question:

Accept all of MPI-2

Vote:

30 yes / 0 no / 0 abstain
---
layout: page
title: MPI 4.0
permalink: /mpi-40/
---

## Scope

The MPI 4.0 standardization efforts aim at adding new techniques, approaches, or concepts to the MPI standard that will help MPI address the need of current and next generation applications and architectures. In particular, the following additions are currently being proposed and worked on:

*   Extensions to better support hybrid programming models
*   Support for fault tolerance in MPI applications
*   Persistent collectives
*   Performance Assertions and Hints
*   RMA/One-sided communication

Additionally, several working groups are working on new ideas and concepts, incl.

*   Active messages
*   Stream messaging
*   Rework of the MPI profiling interface
*   Extensions to MPI_T
*   Generalized requests
*   Hybrid MPI+X concerns (esp. MPI+CAF)
*   Send cancelation
*   Attribute callback
*   Large count

Further, the tools WG is discussing additional 3rd party tool interfaces, which are generally published as side documents:

*   Handle introspection from debuggers
*   Debug DLL detection and identification

Note, though, that all of these efforts or new concepts are currently only being discussed or proposed and there is no guarantee that any particular one will be included in any upcoming MPI version.

## Process for proposing new ideas for MPI 4.0

The forum encourages that new items will be brought forward through the respective working group. All working groups are listed below. The working group will the place for discussion, the creation of a preliminary proposal as well as drive the socialization of the idea in the forum once a certain level of maturity has been reached. Once the idea is mature enough, the working group will help to develop a formal proposal, which includes the proposed text as well as entry in the MPI ticket management system linked of the Wiki. Once complete and deemed ready by the working group, the proposal goes through the MPI forum voting process, which is detailed in the next section.

## Voting Rules

On June 9th 2016, the MPI forum voted for [new voting rules](../procedures-current.pdf) (effective June 9th, 2016).

## Working Groups

The following working groups are currently participating in the MPI 4.0 efforts. For more information on each working group, current topics, and meeting schedules, please follow the links to the respective Wiki pages.

#### [Collective Communication and Topology](https://github.com/mpiwg-coll)

*   Lead: Torsten Hoefler, Andrew Lumsdaine
*   Scope: The main goals of the working group are to discuss the modernization of the collective communication interface to reflect the changed environment and improve the capability of MPI to run efficiently on large-scale computing systems. Our efforts also affect communicator management MPI topologies.

#### [Fault Tolerance](https://github.com/mpiwg-ft)

*   Leads: Wesley Bland, Aurélien Bouteiller and Rich Graham
*   Scope: To define any additional support needed in the MPI standard to enable implementation of portable Fault Tolerant solutions for MPI based applications.

#### Fortran

*   Lead: Craig Rasmussen
*   Scope: To investigate new Fortran language bindings that overcome the problems and limitations of the Fortran 90 MPI bindings.

#### Generalized Requests

*   Lead: Fab Tillier
*   Scope: Redefine the generalized requests interface. A more flexible interface between the user defined requests and the MPI library is required in order to allow the provider of the generalized request to integrate a progress function inside the MPI library. The ultimate goal is to allow the generalized requests progress to be done without a special test or wait function.

#### [Hybrid](https://github.com/mpiwg-hybrid)

*   Lead: Pavan Balaji and Jim Dinan
*   Scope: Ensure that MPI has the features necessary to facilitate efficient hybrid programming and investigate what changes are needed in MPI to better support traditional thread interfaces (e.g., Pthreads, OpenMP), emerging interfaces (like TBB, OpenCL, CUDA, and Ct), and PGAS (UPC, CAF, etc.).

#### I/O (WG on hold)

*   Lead: Quincey Koziol and Mohamad Chaarawi
*   Scope: Definition of API extensions for I/O operations

#### [Large Counts](https://github.com/mpiwg-large-count)

*   Lead: Jeff Hammond
*   Scope: Understanding and fixing the issues associated with integer counts and displacements.

#### [Persistence](https://github.com/mpiwg-persistence)

*   Lead: Anthony Skjellum
*   Scope:

#### [Point to Point Communication](https://github.com/mpiwg-p2p)

*   Lead: Rich Graham and Dan Holmes
*   Scope: To re-examine the MPI peer communication semantics and interface, and consider additions and/or changes needed to better support point-to-point data movement within MPI.

#### [Remote Memory Access](https://github.com/mpiwg-rma)

*   Lead: Bill Gropp and Rajeev Thakur
*   Scope: To re-examine the MPI RMA interface and consider additions and or changes needed to better support the one-sided programming model within MPI.

#### [Sessions](https://github.com/mpiwg-sessions/sessions-issues/wiki)

*   Lead: Dan Holmes
*   Scope: Explore alternate concepts to MPI_Init and MPI_Finalize

#### [Tools](https://github.com/mpiwg-tools)

*   Lead: Kathryn Mohror and Marc-Andre Hermanns
*   Scope: Definition of interfaces for debugging and performance tools

## Chapter Committees

| # | Chapter | Chair | Members |
|:---:|---|---|---|
| | Front Matter | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|1| Introduction | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|2|MPI Terms and Conventions|Rolf Rabenseifner|Bill Gropp, Martin Schulz, Dan Holmes, Jim Dinan|
|3|Point to Point Communcation|Dan Holmes, Bill Gropp, Sayantan Sur, Rich Graham, Pavan Balaji|
|4|Datatypes|George Bosilca|Jeff Hammond, Rich Graham, David Solt, Bill Gropp, Jim Dinan|
|5|Collective Communication|Torsten Hoefler|George Bosilca, Purushotham Bangalore, Jeff Hammond|
|6|Groups, Contexts, Communicators, Caching|Pavan Balaji|Bill Gropp, Sayantan Sur, Sreeram Potluri|
|7|Process Topologies|Torsten Hoefler|Rolf Rabenseifner, Purushotham Bangalore, Chulho Kim, Pavan Balaji|
|8|MPI Environmental Management|George Bosilca|Martin Schulz, Rolf Rabenseifner, Chulho Kim|
|9|The Info Object|Jeff Hammond|Torsten Hoefler, David Solt, Pavan Balaji|
|10|Process Creation and Mangement|David Solt|Jeff Hammond, Wesley Bland, Howard Pritchard|
|11|One-Sided Communication|Bill Gropp|Pavan Balaji, Torsten Hoefler, Rajeev Thakur, Sayantan Sur|
|12|External Interfaces|Pavan Balaji|Dries Kimpe, Jeff Hammond, Jim Dinan, Aurélien Bouteiller|
|13|I/O|Quincey Koziol|Mohamad Chaarawi, Rajeev Thakur, Dries Kimpe|
|14|Tool Support|Kathryn Mohror|Martin Schulz, Marc-Andre Hermanns, Adam Moody|
|15|Deprecated Functions|Rolf Rabenseifner||
|16|Removed Interfaces|Rolf Rabenseifner||
|17|Language Bindings|Jeff Squyres|Jeff Hammond, Rolf Rabenseifner, Craig Rasmussen|
|A|Language Bindings Summary|Rolf Rabenseifner|Jeff Hammond, Craig Rasmussen|
|B|Change-Log|Rolf Rabenseifner||
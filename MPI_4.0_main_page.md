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

[Link to the MPI-Forum GitHub Issue/Ticket System](https://github.com/mpi-forum/mpi-issues/issues) 

## Voting Rules

On Dec 6th 2017, the MPI forum voted for [new voting rules](../docs/other/procedures-current.pdf) (effective Dec 6th, 2017).

## Active Working Groups

The following working groups are currently participating in the MPI 4.0 efforts. For more information on each working group, current topics, and meeting schedules, please follow the links to the respective Wiki pages.

#### [Collective Communication, Topology, Communicators, Groups](https://github.com/mpiwg-coll/coll-issues)

*   Lead: Torsten Hoefler, Andrew Lumsdaine, Anthony Skjellum
*   Scope: The main goals of the working group are to discuss the modernization of the collective communication interface to reflect the changed environment and improve the capability of MPI to run efficiently on large-scale computing systems. Our efforts also affect communicator management MPI topologies.

#### [Fault Tolerance](https://github.com/mpiwg-ft/ft-issues)

*   Leads: Wesley Bland, Aurélien Bouteiller and Rich Graham
*   Scope: To define any additional support needed in the MPI standard to enable implementation of portable Fault Tolerant solutions for MPI based applications.

#### [Hardware-Topologies](https://github.com/mpiwg-hw-topology/hw-topology-issues)

*   Lead: Guillaume Mercier
*   Scope: Address questions like how can hardware resources (I/O, cores, caches, I/O proxies, etc.) be discovered, queried upon and distributed between execution flows? Define portable primitives inside MPI to explore and take advantage of the hardware topology either at the node or the process level.

#### [Hybrid](https://github.com/mpiwg-hybrid/hybrid-issues/wiki)

*   Lead: Pavan Balaji and Jim Dinan
*   Scope: Ensure that MPI has the features necessary to facilitate efficient hybrid programming and investigate what changes are needed in MPI to better support traditional thread interfaces (e.g., Pthreads, OpenMP), emerging interfaces (like TBB, OpenCL, CUDA, and Ct), and PGAS (UPC, CAF, etc.).

#### [Large Counts](https://github.com/mpiwg-large-count/large-count-issues)

*   Lead: Jeff Hammond
*   Scope: Understanding and fixing the issues associated with integer counts and displacements.

#### [Persistence](https://github.com/mpiwg-persistence/persistence-issues)

*   Lead: Anthony Skjellum
*   Scope: Work on definitions and specifications of operations that support higher performance forms of existing MPI operations when there is an ability to "plan once" and "amortize costs". Current work focuses on collective operations and neighborhood collectives.

#### [Point to Point Communication](https://github.com/mpiwg-p2p/p2p-issues/wiki)

*   Lead: Rich Graham and Dan Holmes
*   Scope: To re-examine the MPI peer communication semantics and interface, and consider additions and/or changes needed to better support point-to-point data movement within MPI.

#### [Remote Memory Access](https://github.com/mpiwg-rma/rma-issues/wiki/RMA-Working-Group-Wiki)

*   Lead: Bill Gropp and Rajeev Thakur
*   Scope: To re-examine the MPI RMA interface and consider additions and or changes needed to better support the one-sided programming model within MPI.

#### [Semantic Terms](https://github.com/mpiwg-semantic-terms/semantic-terms-issues)

*   Lead: Rolf Rabenseifner and Purushotham Bangalore
*   Scope: Review and update semantic terms used throughout the MPI Standard.

#### [Sessions](https://github.com/mpiwg-sessions/sessions-issues/wiki)

*   Lead: Dan Holmes
*   Scope: Explore alternate concepts to MPI_Init and MPI_Finalize

#### [Tools](https://github.com/mpiwg-tools/tools-issues)

*   Lead: Kathryn Mohror and Marc-Andre Hermanns
*   Scope: Definition of interfaces for debugging and performance tools

## Working Groups on Hold

In addition to the active working groups, several working groups exist that have been on hold.

#### [Fortran](https://github.com/mpiwg-fortran/fortran-issues)

*   Lead: Geoffroy Vallee and Rolf Rabenseifner
*   Scope: To investigate a modernisation of the Fortran language bindings beyond Fortran 2008.

#### Generalized Requests

*   Lead: Fab Tillier
*   Scope: Redefine the generalized requests interface. A more flexible interface between the user defined requests and the MPI library is required in order to allow the provider of the generalized request to integrate a progress function inside the MPI library. The ultimate goal is to allow the generalized requests progress to be done without a special test or wait function.

#### [I/O](https://github.com/mpiwg-io/io-issues)

*   Lead: Quincey Koziol, Mohamad Chaarawi, and Tony Skjellum
*   Scope: Definition of API extensions for I/O operations



## Chapter Committees

| # | Chapter | Chair | Members |
|:---:|---|---|---|
|  | Front Matter | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|1| Introduction | Bill Gropp | Rolf Rabenseifner, Martin Schulz |
|2| MPI Terms and Conventions| Claudia Blaas-Schenner | Rolf Rabenseifner, Bill Gropp, Tony Skjellum, Puri Bangalore, Guillaume Mercier, Dan Holmes, Julien Jaeger |
|3|Point to Point Communcation| Dan Holmes | Ken Raffenetti, Ryan Grant, Bill Gropp, Brian Smith |
|4|Datatypes| George Bosilca | Bill Gropp, Martin Ruefenacht, Dan Holmes | 
|5|Collective Communication| Tony Skjellum | Torsten Höfler, Brian Smith, Wesley Bland, Martin Schulz, Julien Jaeger |
|6|Groups, Contexts, Communicators, Caching| Guillaume Mercier | Bill Gropp, Tony Skjellum, Pavan Balaji | 
|7|Process Topologies | Rolf Rabenseifner | Guillaume Mercier, Claudia Blaas-Schenner, Torsten Höfler, Tony Skjellum, Mahdieh Ghazimirsaeed | 
|-|Partitioned Communication | Ryan Grant | Tony Skjellum, Puri Bangalore, Dan Holmes, Matthew Dosanjh |
|8|MPI Environmental Management | George Bosilca | Ken Raffenetti, Wesley Bland, Thomas Naughton | 
|9|The Info Object | Martin Schulz | Ryan Grant, Guillaume Mercier, Wesley Bland | 
|10|Process Creation and Mangement | Howard Pritchard | Ken Raffenetti, Dan Holmes, Martin Schulz, Thomas Naughton | 
|11|One-Sided Communication | Bill Gropp | Pavan Balaji, Joseph Schuchart, Nathan Hjelm, Artem Polyakov | 
|12|External Interfaces | Martin Schulz | Pavan Balaji, Brian Smith, Tony Skjellum |
|13|I/O| Tony Skjellum | Quincey Koziol, Shinji Sumimoto | 
|14|Tool Support| Marc-Andre Hermanns | Martin Schulz, Jithin Jose, Kathryn Mohror | 
|15|Deprecated Functions | Rolf Rabenseifner | Martin Schulz, Wesley Bland | 
|16|Removed Interfaces | Rolf Rabenseifner | Martin Schulz, Wesley Bland | 
|17|Backward Incompatibilities | Wesley Bland | Martin Schulz |
|18|Language Bindings | Puri Bangalore | Tony Skjellum, Rolf Rabenseifner | 
|A|Language Bindings Summary | Rolf Rabenseifner | Puri Bangalore, Tony Skjellum, Hubert Ritzdorf | 
|B|Change-Log | Rolf Rabenseifner | Marc-Andre Hermanns, Hubert Ritzdorf | 



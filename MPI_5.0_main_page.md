---
layout: page
title: MPI 5.0
permalink: /mpi-50/
redirect_from:
  - mpi-42/
---

## Scope

The MPI 5.0 standardization effort primarily aims to establish an ABI for MPI libraries. Additional small topics are also being discussed.

Major changes will go into the MPI 5.0 efforts.

Note, though, that all of these efforts or new concepts are currently only being discussed or proposed and there is no guarantee that any particular one will be included in any upcoming MPI version.

## Process for proposing new items for MPI 5.0

The forum encourages that new items will be brought forward through the respective working group. All working groups are listed below. The working group will the place for discussion, the creation of a preliminary proposal as well as drive the socialization of the idea in the forum once a certain level of maturity has been reached. Once the idea is mature enough, the working group will help to develop a formal proposal, which includes the proposed text as well as entry in the MPI ticket management system linked of the Wiki. Once complete and deemed ready by the working group, the proposal goes through the MPI forum voting process, which is detailed in the next section.

[Link to the MPI-Forum GitHub Issue/Ticket System](https://github.com/mpi-forum/mpi-issues/issues)

## Voting Rules

On June 30 2020, the MPI forum voted for version 3.3 of [these voting rules](../docs/other/procedures-current.pdf) (effective June 30th, 2020).

## Active Working Groups

The following working groups are currently participating in the MPI 5.0 efforts. For more information on each working group, current topics, and meeting schedules, please follow the links to the respective Wiki pages.

#### [Application Binary Interface (ABI)](https://github.com/mpiwg-abi/abi-issues)

*   Lead: Jeff Hammond  and Lisandro Dalcin
*   Scope: The purpose of the MPI ABI Working Group is to discuss and implement the features required for MPI binaries - applications and libraries - to work with any implementation of MPI on compatible platforms.
*   Meeting Schedule: On Demand

#### [Collective, Communicators, Context, Persistent, Partitioned, Groups](https://github.com/mpiwg-coll/coll-issues)

*   Lead: Anthony Skjellum and Julien Jaeger (prior leads: Torsten Hoefler, Andrew Lumsdaine)
*   Scope: This working group considers cross-cutting issues of groups, context, communicators, and collective operations as well as features such as persistence, partitioning, topologies, and operational semantics (e.g., blocking, nonblocking, local, synchronizing) thereof.
*   Meeting Schedule: Wednesdays at <a href="https://time.is/0900_in_CT">9am</a> US Central Time

#### [Fault Tolerance](https://github.com/mpiwg-ft/ft-issues)

*   Leads: Aurélien Bouteiller and Ignacio Laguna
*   Scope: To define any additional support needed in the MPI standard to enable implementation of portable Fault Tolerant solutions for MPI based applications.
*   Meeting Schedule: Fortnightly on Mondays at <a href="https://time.is/900_in_CT">9am</a> US Central Time

#### [Fortran](https://github.com/mpiwg-fortran/fortran-issues)

*   Lead: Jeff Hammond, Purushotham Bangalore, and Tony Skjellum
*   Scope: To investigate a modernisation of the Fortran language bindings beyond Fortran 2008.
*   Note, there is a close link to the languages working group.
*   Meeting Schedule: On Demand

#### [Hardware & Virtual Topologies](https://github.com/mpiwg-hw-topology/hw-topology-issues)

*   Lead: Guillaume Mercier
*   Scope: Address questions like how can hardware resources (I/O, cores, caches, I/O proxies, etc.) be discovered, queried upon and distributed between execution flows? Define portable primitives inside MPI to explore and take advantage of the hardware topology either at the node or the process level.
*   Meeting Schedule: On Demand

#### [Hybrid & Accelerator](https://github.com/mpiwg-hybrid/hybrid-issues/wiki)

*   Lead: James Dinan
*   Scope: Ensure that MPI has the features necessary to facilitate efficient hybrid programming and investigate what changes are needed in MPI to better support traditional thread interfaces (e.g., Pthreads, OpenMP), emerging interfaces (like TBB, OpenCL, CUDA, and Ct), and PGAS (UPC, CAF, etc.).
*   Meeting Schedule: Wednesdays at <a href="https://time.is/0900_in_CT">9am</a> US Central Time

#### [I/O](https://github.com/mpiwg-io/)

*   Lead: Quincey Koziol
*   Scope: Definition of API extensions for I/O operations
*   Meeting Schedule: Fortnightly on Thursdays at <a href="https://time.is/1500_in_CT">3pm</a> US Central

#### [Languages](https://github.com/mpiwg-languages/languages-issues/wiki)

*   Lead: Tony Skjellum
*   Scope: Ensure MPI has robust support for present and future language expressions and to introduce new languages encapsulating the MPI concepts.
*   Note, there is a close link to the Fortran working group.
*   Meeting Schedule: On Demand

#### [Remote Memory Access](https://github.com/mpiwg-rma/rma-issues/wiki/RMA-Working-Group-Wiki)

*   Lead: Joseph Schuchart and Bill Gropp (prior lead: Rajeev Thakur)
*   Scope: To re-examine the MPI RMA interface and consider additions and or changes needed to better support the one-sided programming model within MPI.
*   Meeting Schedule: On Demand

#### [Sessions](https://github.com/mpiwg-sessions/sessions-issues/wiki)

*   Lead: Howard Pritchard and Dan Holmes
*   Scope: Explore alternate concepts to MPI_Init and MPI_Finalize
*   Meeting Schedule: Fortnightly on Mondays at <a href="https://time.is/800_in_CT">8am</a> US Central Time

#### [Tools](https://github.com/mpiwg-tools/tools-issues)

*   Lead: Marc-Andre Hermanns (prior lead: Kathryn Mohror)
*   Scope: Definition of interfaces for debugging and performance tools
*   Meeting Schedule: Mondays at <a href="https://time.is/1000_in_CT">10am</a> US Central Time

## Working Groups on Hold

In addition to the active working groups, several working groups exist that have been on hold.

#### [Semantic Terms](https://github.com/mpiwg-semantic-terms/semantic-terms-issues)

*   Scope: Review and update semantic terms used throughout the MPI Standard.

#### Generalized Requests

*   Scope: Redefine the generalized requests interface. A more flexible interface between the user defined requests and the MPI library is required in order to allow the provider of the generalized request to integrate a progress function inside the MPI library. The ultimate goal is to allow the generalized requests progress to be done without a special test or wait function.

#### [Point to Point Communication](https://github.com/mpiwg-p2p/p2p-issues/wiki)

*   Scope: To re-examine the MPI peer communication semantics and interface, and consider additions and/or changes needed to better support point-to-point data movement within MPI.

#### [Persistence](https://github.com/mpiwg-persistence/persistence-issues)

*   Scope: Work on definitions and specifications of operations that support higher performance forms of existing MPI operations when there is an ability to "plan once" and "amortize costs". Current work focuses on collective operations and neighborhood collectives.

#### [Large Counts](https://github.com/mpiwg-large-count/large-count-issues)

*   Scope: Understanding and fixing the issues associated with integer counts and displacements.


## Chapter Committees

| # | Chapter | Chair | Members |
|:---:|---|---|---|
| | Front Matter | Bill Gropp | Martin Schulz, Wes Bland |
|1| Introduction | Bill Gropp | Martin Schulz |
|2| MPI Terms and Conventions | Claudia Blaas-Schenner | Bill Gropp, Tony Skjellum, Puri Bangalore, Guillaume Mercier, Dan Holmes, Julien Jaeger |
|3| Point to Point Communcation| Dan Holmes | Ken Raffenetti, Ryan Grant, Bill Gropp, Brian Smith |
|4| Partitioned Communication | Ryan Grant | Tony Skjellum, Puri Bangalore, Dan Holmes, Matthew Dosanjh |
|5| Datatypes| George Bosilca | Bill Gropp, Martin Ruefenacht, Dan Holmes |
|6| Collective Communication | Tony Skjellum | Torsten Höfler, Brian Smith, Martin Schulz, Julien Jaeger, Benson Muite |
|7| Groups, Contexts, Communicators, Caching | Guillaume Mercier | Bill Gropp, Tony Skjellum, Pavan Balaji |
|8| Process Topologies | Christoph Niethammer | Guillaume Mercier, Claudia Blaas-Schenner, Torsten Höfler, Tony Skjellum |
|9| MPI Environmental Management | George Bosilca | Ken Raffenetti, Wes Bland, Thomas Naughton |
|10| The Info Object | Martin Schulz | Ryan Grant, Guillaume Mercier, Wes Bland |
|11| Process Creation and Mangement | Howard Pritchard | Ken Raffenetti, Dan Holmes, Martin Schulz, Thomas Naughton, Aurélien Bouteiller |
|12| One-Sided Communication | Joseph Schuchart | Bill Gropp, James Dinan, Christoph Niethammer |
|13| External Interfaces | Martin Schulz | Pavan Balaji, Brian Smith, Tony Skjellum |
|14| I/O | Tony Skjellum | Quincey Koziol, Shinji Sumimoto |
|15| Tool Support | Marc-Andre Hermanns | Martin Schulz, Bill Williams |
|16| Deprecated Functions | Wes Bland | Martin Schulz|
|17| Removed Interfaces | Wes Bland | Martin Schulz|
|18| Backward Incompatibilities | Wes Bland | Martin Schulz |
|19| Language Bindings | Puri Bangalore | Tony Skjellum, Victor Eijkhout |
|20| ABI | Jeff Hammond | Hui Zhao |
|A| Language Bindings Summary | Puri Bangalore | Tony Skjellum | 
|B| Change-Log | Tobias Haas | Marc-André Hermanns | 

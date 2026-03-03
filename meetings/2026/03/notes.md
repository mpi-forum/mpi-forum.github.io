---
layout: notes
date: March 02, 2026 - March 05, 2026
permalink: meetings/2026/03/notes
title: March 2026 Meeting Notes
---

AI notes from the Zoom recording. AI can make mistakes. Review for accuracy.

# Day 1
## Quick recap
The meeting focused on reviewing working group progress and planning priorities for MPI 6, including technical discussions about fold model changes and process failure models. The team explored new proposals for session-friendly spawning functionality in MPI, including implementation details and potential challenges around global state and compatibility with existing code. The discussion concluded with reviews of process sets, session features, and non-blocking operations, with plans to continue RMA discussions the following morning.

## Next steps
- Joseph: Incorporate text changes from the no-no vote discussion into the PR (changing "these errors" phrasing, fixing "fail stop process" language, and correcting MPI_Comm_spawn_multiple references)
- Joseph: File a separate PR to fix the bug in the standard regarding MPI_Comm_spawn vs MPI_Comm_spawn_multiple in the colon notation section (lines around 2858 and 2057)
- Sonja/Session Working Group: Address the scoping concerns raised by Martin regarding global state and session isolation in the spawn proposal
- Sonja/Session Working Group: Investigate adding non-blocking versions of MPI_Comm_accept and MPI_Comm_connect (iConnect and iAccept)
- Sonja/Session Working Group: Consider adding timeout mechanisms for MPI_Comm_accept and MPI_Comm_connect, potentially as standardized info keys
- Sonja/Session Working Group: Explore the ability to cancel pending accept/connect requests
- Sonja/Session Working Group: Develop the concept of remote psets or parent psets to enable session-friendly connection establishment
- Sonja/Session Working Group: Consider the alternative approach of having spawn create a pset that includes both parent and child processes, with a standardized name (e.g., "parent" or user-specified via info key)
- Sonja/Session Working Group: Clarify the completion semantics of MPI_spawn and MPI_Ispawn regarding what guarantees are provided about spawned processes
- Sonja/Session Working Group: Address the question of whether MPI_spawn_test_parent is needed if pset-based mechanisms are implemented
- Sonja/Session Working Group: Reconsider whether to present spawn functionality as integrated with psets from the start rather than as separate steps
- Wes: Set up the no-no vote for the fault tolerance PR, keeping it open until the start of tomorrow's meeting
- Wes: Set up the first vote for tomorrow's meeting

## Summary
### MPI 6 Working Group Progress Review
The meeting focused on reviewing working group progress and planning priorities for MPI 6. NYC provided logistical updates about the room arrangements and schedule, noting that the meeting would go through individual working groups to determine current topics and priorities. The group discussed technical changes to the fold model using Refuel Event, with Joseph presenting updates to the text following a previous official reading in December. The meeting aimed to establish a list of priorities for the next version of the standard, with plans to continue discussions into Wednesday morning.

### MPI Process Failure Model Language
The team discussed and refined text related to MPI process failure models, specifically focusing on user-visible failure behavior. They agreed on language describing how implementations should treat failed processes, including ignoring messages from intermittently failed processes or using operating system mechanisms to terminate them. The group decided to address indexing of fault, failure, and error terms in a future PR after other changes are merged, and noted that the full ballot for the ticket would occur the following day.

### MPI Session-Friendly Spawning Proposal
Sonja presented a proposal to add session-friendly spawning to MPI, motivated by the lack of support for this feature, the absence of non-blocking spawning, and increasing interest in malleability. She outlined the proposed new functions, including MPI spawn, MPI iSpawn, and MPI spawn test parent, which would work with both the session and world models. Aurelien raised questions about the integration of parent process information with MPI psets and how processes would communicate without sessions after spawning. The discussion was cut short as Sonja prepared to review the PR and examples, leaving some questions open for further discussion.

### MPI Spawn Functionality Implementation
Sonja demonstrated a draft PR for implementing MPI spawn functionality with sessions, showing how it works by modifying an existing manager-worker example to use MPI sessions and MPI spawn instead of MPI CommSpawn. The implementation allows parent and child processes to communicate through intercommunicators, with the key difference that MPI spawn is local while MPI CommSpawn is collective. The team discussed potential future enhancements including remote psets and the possibility of integrating these concepts more seamlessly, though Sonja noted that remote psets would require additional standardization work.

### Session-Based Process Spawning Challenges
The team discussed challenges with implementing session-based process spawning in MPI, particularly around global state and compatibility with existing code. Sonja and Aurelien explained that the current approach uses existing mechanisms like publish name and open port, which work with both world and session models, though NYC expressed concerns about reintroducing global state that could break session isolation. The group debated whether to make a clean break from non-session compatible concepts or incrementally improve the current system, with NYC advocating for a more complete session-compliant approach rather than reusing existing mechanisms that may cause issues in multi-session scenarios.

### MPI Process Sets and Sessions
The team discussed the handling of process sets (psets) and sessions in MPI, particularly focusing on how spawned processes relate to the MPI World pset. Sonja explained that according to the standard, each spawned process creates its own independent MPI world, though this behavior needs to be clarified for the session model. NYC raised concerns about the introduction of global state through sessions and potential issues with library composability when creating multiple sessions. The team agreed to take a short break and continue reviewing the text after the break to further discuss these concerns and potential solutions.

### MPI Spawn Function Updates Review
The meeting focused on reviewing changes to the dynamic process chapter in the MPI standard, specifically regarding the addition of two new spawn functions: MPI spawn and MPI ISpawn. Sonja presented the modifications needed across various sections of the document, including updates to enumeration lists, info keys, and process startup mechanisms. NYC announced an open voting block and confirmed the next day's meeting would start at 9 AM US Eastern Time. A bug in the standard regarding MPI ComSpawn multiple was identified and noted for future correction.

### MPI Spawn and iSpawn Updates
Sonja presented updates to the MPI documentation, focusing on the addition of MPI spawn and MPI iSpawn procedures. She explained that these new procedures allow starting MPI processes without establishing communication, making them compatible with both the session and world models. The discussion included details about the parameters and behavior of MPI spawn, with Sonja noting that the Max Prox parameter should be a positive integer for pure spawn operations. Aurelien asked about the previous definition of Max Prox, and Sonja clarified that it was previously just an integer, which could be zero.

### MPI Spawn Functionality and Error Handling
The group discussed MPI spawn functionality and error handling mechanisms. They explored questions about timeout handling, non-blocking operations, and resource allocation guarantees. Sonja explained that while current MPI implementations don't provide standardized timeout mechanisms, runtime systems may have internal timeouts, and the "soft" mechanism allows spawning fewer processes than specified. The discussion clarified that MPI spawn operations typically fail completely if any part of the process creation fails, though the exact state of spawned processes after completion is not guaranteed.

### MPI Spawn Completion Definition Debate
The team discussed the definition and implications of process spawning completion in MPI. They debated whether the completion of a spawn request guarantees that processes have been successfully spawned, with George and Aurelien arguing that it's similar to send operations where delivery cannot be guaranteed, while Sonja and others suggested it should at least indicate that the runtime system has performed its necessary operations to launch the processes. The discussion highlighted the challenge of defining what constitutes a successful spawn and how this should be communicated to user code, with Hui questioning the practical implications for user code behavior. The team concluded that the current statement about spawn completion was too strong and may need to be revised to reflect that resources are available for spawning processes, though the exact definition and timing of when spawn operations should return success remains an open question.

### Non-blocking MPI Spawn Implementation
The team discussed the implementation of non-blocking MPI spawn and connect operations. Aurelien raised concerns about the non-observable state from MPI when spawning processes, arguing that it could lead to over-specification. The group debated whether to include timeout mechanisms and cancellation options for connect and accept operations. They also discussed the rationale for implementing non-blocking spawn, with Sonja explaining that long spawn times could occur when starting many processes on previously unused resources. The team concluded that the main waiting point should be at the connect-accept level, rather than requiring non-blocking spawn.

### MPI Session Process Management Discussion
The team discussed the implementation of MPI session features, focusing on process management and communication mechanisms. They explored the use of process sets (PSETs) and PSATs as alternatives to intercommunicators for tracking parent-child relationships in MPI processes. The group agreed that a new function, MPI_spawn_test_parent, could be unnecessary if PSETs are properly implemented, as processes could query their parent PSET directly. They decided to take these discussions back to the session working group for further consideration, particularly regarding how to handle remote PSETs and session scoping. The conversation ended with plans to continue RMA discussions the following morning at 9 AM Eastern Time.

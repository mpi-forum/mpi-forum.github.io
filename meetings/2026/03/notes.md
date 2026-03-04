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

# Day 2
## Quick recap
The team reviewed and discussed various aspects of MPI's notification and fault tolerance features, including implementation details, synchronization semantics, and potential simplifications. They explored different approaches to handling failure detection and agreement protocols in collective operations, with ongoing debates about the complexity versus functionality of fault tolerance features. The conversation ended with discussions about the MPI shrink function and its potential applications, while also touching on upcoming topics for the hybrid working group.

## Next steps
- Yusuf/Alex/Dmitry: Fix the typo in the RMA notification text where "Notification num..." appears incomplete
- Yusuf/Alex/Dmitry: Address the formatting issue with MPI win notification value UB in the window attributes section
- Yusuf/Alex/Dmitry: Fix the missing ampersand before NF in the MPI group size call in the example code
- Yusuf/Alex/Dmitry: Revisit the rationale for not allowing decrease of notification counter numbers
- Yusuf/Alex/Dmitry: Add explicit statement that notification counters can only be used with passive target synchronization
- Yusuf/Alex/Dmitry: Fix the broken comment in the notification counter overflow prevention example
- Yusuf/Alex/Dmitry: Remove OpenMP from the example code as it adds unnecessary complexity
- Yusuf/Alex/Dmitry: Clarify the text about "all failed processes with a rank less than the parameter" to make it easier to understand
- Yusuf/Alex/Dmitry: Consider simplifying the description of MPI_Com_agree to make it less convoluted
- Yusuf/Alex/Dmitry: Change "otherwise similar" to "otherwise equivalent" in the MPI_put_notify and related function descriptions
- Yusuf/Alex/Dmitry: Replace "update" with "increment" in the notification descriptions to be more precise
- Yusuf/Alex/Dmitry: Fix the incomplete sentence about fail stop faults in the ULFM slice 1 text before the next no-no vote
- Christoph: Adapt the collective synchronization semantics text based on feedback to remove the explicit list of function names and keep only the reference to the appendix
- Christoph: Prepare the collective synchronization clarification for the next reading
- Dominik/Sonja: Prepare proposals for session attributes and accessor methods for the next meeting
- Dominik/Sonja: Coordinate with tools working group on session attributes proposal
- Hui: Join the ULFM working group meetings and contribute to discussions
- Hui: Write a draft proposal for a simplified MPI_Com_agree alternative
- Fault Tolerance Working Group: Make a decision about whether to proceed with the current MPI_Com_agree proposal or develop an amended proposal before the June meeting
- Fault Tolerance Working Group: Schedule and conduct working group meetings to resolve disagreements about MPI_Com_agree semantics
- Yusuf: Check if MPI_Com_shrink works correctly on intercommunicators and update the text accordingly
- Yusuf: Remove the MPI_Win_get_failed reference from the MPI_Com_shrink text as it's not part of that PR
- Bill Williams/Tools Working Group: Continue work on QMPI and MPI debugging features for potential inclusion in MPI-6
- Bill Williams: Prototype session attributes and accessors in implementations for testing
- Guillaume/Christoph: Coordinate with collectives working group on topology-related proposals
- NYC: Update the working group status page to reflect dormant status of I/O working group
- NYC: Check with I/O working group members about recent activity and current status
- NYC: Open votes for appropriate tickets at the next meeting
- Patrick: Continue writing draft for device-initiated RMA in the hybrid working group

## Summary
### RMA Notification Feature Review
The team reviewed and discussed the RMA notification feature, focusing on the MPI win set num notify and MPI win get num notify functions. They clarified that notification counters cannot be decreased and should be set at the beginning of an operation. The team also discussed the restrictions on calling MPI win set num notify while an access epoch is open. They reviewed the MPI win notify threshold function and its usage for waiting on notification counter values to reach a threshold. The team identified some areas where the text could be improved, such as moving rationale statements and clarifying the synchronization properties of the operations.

### MPI Notified Communication Semantics Discussion
The group discussed the semantics and implementation of notified communication operations in MPI. They clarified that completion at the target implies the notification counter is updated, and multiple concurrent notified operations are allowed using the same counter. They also discussed the equivalency of notified operations to their non-notified counterparts, with Bill Gropp suggesting that describing semantics later in the chapter is acceptable. The team decided not to add notified versions for all operations, such as fetch-up, unless there is a clear use case. They agreed to explicitly state that notification counters must be incremented, even if data transfers are optimized.

### MPI Notification Counter Implementation
The team discussed the implementation of notification counters in MPI, focusing on how to handle overflow and ensure atomic operations. They identified a potential issue with the current formula for resetting and updating notification values, and agreed to remove unnecessary complexity by removing OpenMP threading from the example code. The group also clarified the use of window info keys for optimizing notification counter allocation and representation. Finally, they noted that the maximum value for notification counters should be treated as an attribute that can be dynamically retrieved, rather than a compile-time constant.

### MPI Collective Synchronization Semantics
The meeting focused on clarifying the synchronization semantics for collective communication operations in MPI. Christoph presented a proposal to add a statement to Appendix 2A.2, specifying that collectives like MPI_allgather, MPI_alltoall, and their variants, as well as MPI_reduce and its variants, synchronize only if the counts and data types are non-zero. The group discussed the implications of this clarification, including potential optimizations for high-quality implementations. NYC raised questions about the definition of data type size and the maintenance of the list of synchronizing collectives, expressing concerns about how to handle future additions or changes. The conversation ended with an agreement to include a statement about the completeness of the current list and the need to consult the appendix for further details.

### MPI Standard Updates Discussion
The group discussed several topics related to MPI standard updates and working group activities. They agreed to remove lists of function names from the main text and reference them in the appendix instead. Dominik presented ideas for session attributes and access methods, which Bill Williams supported as sufficient for tools' needs. The group decided to withdraw a vote on the ULFM proposal due to minor text issues that need fixing. They also reviewed a proposal to consolidate the description of when the MPI error field should be set in the status object, aiming to be more accurate and concise.

### MPI Error Handling Text Clarifications
The team discussed text clarifications for MPI error handling, focusing on maintaining existing semantics and improving readability. They agreed to keep the current wording regarding communicator creation and error handling, despite some ambiguity, and decided to put it up for a first vote in the next meeting. The group then planned their schedule, taking a one-hour lunch break and allocating two hours for the ULFM discussion, with Aurelien remaining for further input.

### MPI Collective Communication Protocols
The discussion focused on the semantics and implementation of MPI's collective communication operations, particularly around failure detection and agreement protocols. Aurelien explained that the current description of MPI's Comagree function is too detailed and complex, while Hui and NYC questioned the necessity of certain parameters, particularly the number of known failed processes. The group agreed that while the current API functionality is clear, the documentation could be simplified without losing essential information. They also discussed the need to better define the scope and purpose of ULFM (Unified Layer for Fault Tolerance in MPI) in future discussions.

### MPI Fault-Tolerant Operations Design
The discussion focused on the design and functionality of MPI's fault-tolerant operations, particularly around the agreement and failure detection mechanisms. Aurelien explained the current implementation's ability to both agree on a flag and detect failures within a single operation, emphasizing that splitting these functions into separate calls would not simplify the user experience while potentially increasing the number of required MPI calls. The group debated the merits of implicit failure tracking versus explicit parameter passing, with NYC advocating for a more streamlined approach where MPI would automatically track and communicate failure states without requiring explicit parameter updates from the user. The conversation concluded with an acknowledgment that while the current implementation may appear complex, it provides a complete solution that can be adapted to various use cases through different programming patterns, rather than forcing a one-size-fits-all approach.

### MPI Fault Tolerance Discussion
The group discussed fault tolerance in MPI collectives, particularly focusing on the agree function. Hui proposed a simpler implementation that only requires knowing the number of failed processes, without needing to construct a complete list or perform an all-reduce. The others expressed concerns about this approach, noting that it could limit implementation options and potentially increase costs. The group agreed that fault-tolerant collectives should be optional and not modify existing collective semantics, with Aurelien suggesting that a fault-tolerant barrier might be a better approach than a fault-tolerant all-reduce. They also discussed the possibility of having two versions of the agree function, one for fault tolerance and one for regular use.

### MPI Fault Tolerance Implementation Discussion
The group discussed the implementation of fault tolerance in MPI operations, particularly focusing on the MPIX_Comm_agree function. Aurelien emphasized the need for a simple, lightweight error detection mechanism that could be used in performance-critical applications, while Hui argued for a more comprehensive approach that would allow for full fault tolerance semantics. The discussion revealed ongoing disagreements about the core functionality of the proposed MPIX_Comm_agree function, with some participants advocating for a simplified version focused on error detection and others pushing for a more robust solution that includes full fault tolerance capabilities. The group agreed to continue the discussion in a newly reformed working group, with Hui offering to draft a proposal for the next meeting.

### MPI Fault Tolerance Simplification Discussion
The meeting focused on discussing the complexity and potential simplification of fault tolerance features in MPI (Message Passing Interface). NYC and Hui debated the merits of a simplified solution versus maintaining the current complex approach, with NYC emphasizing the need to move forward with a practical solution that balances simplicity and functionality. They discussed the challenges of implementing fault tolerance, including the need to query groups of failed processes and the potential for hidden state in libraries that could lead to inconsistent information across an application. The group explored different approaches to agreeing on failure states, with NYC advocating for a simpler method that would allow applications to check if their knowledge of failures is up to date without requiring global queries every time. The discussion highlighted the tension between providing a minimal set of features that could be expanded later versus delivering a more comprehensive solution that might be too complex for widespread adoption.

### MPI Shrink Function Discussion
The meeting focused on discussing the MPI shrink function and its potential use cases, including fault tolerance and dynamic process management. The group agreed that shrink could be used for both fault tolerance and deliberate process termination, but decided against adding an example of the latter to avoid potential misuse. They also discussed the relationship between shrink and the agree function, considering whether shrink could be implemented without agree. The conversation ended with a brief overview of upcoming topics for the hybrid working group, including notifications and device-initiated RMA.

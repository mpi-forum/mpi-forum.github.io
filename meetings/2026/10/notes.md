---
layout: notes
date: October 05, 2026 - October 06, 2026
permalink: meetings/2026/10/notes
title: October 2026 Meeting Notes
---

# Day 1

## Key Outcomes

The MPI Forum convened in person at TU Wien (Vienna) for a full working-group plenary covering several active proposals. Key technical progress was made on the **Sessions-based spawn extension** (PR #1150), **notified communication cleanup** (PR #1131), and **deprecation of MPI_PROD** in RMA. Two errata and two no-no votes were prepared for same-day ballot, with first votes on the full proposals scheduled for the following day. Future meeting dates were tentatively set: **December 14–17** (online) and either **late February or mid-March** in Austin, TX (in-person). 

---

## Decisions Made

- **December virtual meeting:** December 14–17, 9 AM–1 PM Central Time; ballots must be announced by November 30. 
- **March in-person meeting (Austin/TAC):** Two options under consideration — last week of February (conflicts with SIAM) or third week of March (conflicts with SXSW/hotel costs); final decision to be made via poll in the voting block the following day. 
- **No-no vote scope confirmed:** Two no-no items (Session attributes Fortran 90 fix + notified communication cleanup) and two errata readings to be voted same day; first votes on full proposals the next day. 
- **Handle introspection interface:** Confirmed to target inclusion in the **main MPI standard** (not a separate document), following prior forum consensus. 
- **MPI_PROD deprecation:** Sent back to RMA working group for further discussion; no vote taken. Community feedback to be solicited at SC BOF. 
- **MPI_WinCreate_C displacement:** Not treated as errata (strong opposition in room); deprecation also opposed by majority; returned to RMA working group to explore adding a safe query mechanism. 
- **Binding tool (code generation):** New constructs from handle introspection should be added to the Python/LaTeX binding tool where possible; Martin Rufenach can be contacted for guidance though he is no longer actively working on MPI. 

---

## Technical Discussions

### Sessions-Based Spawn Extension (PR #1150)

Three new examples were added to the dynamic process management chapter to illustrate how the new spawn interfaces work alongside the sessions model. 

**New interfaces introduced:**

- `MPI_Spawn` (blocking) and `MPI_ISpawn` (non-blocking) — separate procedures, not combined with existing `MPI_Comm_spawn`. 
- Reserved info key `pset_name` (naming TBD; must not conflict with existing `MPI_pset_name` key) — allows spawning processes to specify a name under which the new process set will be known to all processes in the spawn communicator. 
- New mandated process set `MPI_Parent` — for spawned processes, contains all processes that were in the communicator at the time of the spawn call; returns an empty group for non-spawned processes. 

**Conceptual changes to process set management:**

- **Remote process sets** now allowed: a process can reference a pset of which it is not a member; `MPI_Group_rank` returns `MPI_UNDEFINED` in that case. 
- **Empty process sets** now explicitly permitted; creating a group from an empty pset yields `MPI_GROUP_EMPTY`. 

**Three examples walked through:**

1. **Manager-worker with connect/accept** — uses `MPI_Comm_connect`/`MPI_Comm_accept`; no new pset concepts required; compatible with world model. 
2. **Manager-worker with psets → intercommunicator** — uses `pset_name` info key and `MPI_Intercomm_create_from_groups`; workers use `MPI_Parent` pset to find their parent group. 
3. **Manager-worker with psets → intracommunicator directly** — uses `MPI_Group_union` to merge world and worker groups, then `MPI_Comm_create_from_group`; requires implementations to bootstrap communicators across arbitrary job sets without the intercommunicator intermediate step. 

**Key semantic clarification on spawn completion:**

- An `MPI_Spawn` operation completes once all processes in the communicator are notified of either successful spawn (and new pset names) or a spawn error. 
- At completion, MPI does **not** guarantee that spawned processes have initialized MPI — connection establishment is deferred to communicator creation; spawned processes could theoretically be orphans. 

**Open issue flagged:** The standard does not clearly define the **scope of process set names** (per-session, per-process, global); this is a known to-do to be addressed separately. 

---

### Session Attributes No-No Vote (PR #1129 / Howard)

Three fixes bundled for no-no vote: 

- **Missing Fortran 90 constants** in appendix for `MPI_Session_copy_attr_function`, `MPI_Session_delete_attr_function`, and associated type — omitted from original session attributes proposal, now added for symmetry with Windows and Types.
- **Note moved to rationale:** The note that "no MPI functions currently duplicate a session handle, so the supplied copy function is never invoked" moved from canonical text to a rationale block; same treatment applied to the equivalent Windows section.
- **Example cleanup:** Missing `free` of the `big_buffer` in the `MPI_Session_create_attr` failure path added per Tobias's comment.

---

### Notified Communication Cleanup (PR #1131 / Joseph)

A set of minor but numerous corrections bundled for no-no vote, including: 

- Removed accidentally duplicated content from the pull request.
- Added missing constants: `MPI_WIN_NOTIFY_NUMSB`, `MPI_WIN_NOTIFY_NUMUB`, `MPI_WIN_NOTIFY_VALUE_UB`.
- Changed `MPI_Win_sync` synchronization behavior from **weak** to **strong** to guarantee a consistent view of notification counters.
- Renamed `mcai_will_notify_our_threshold` → `threshold` for consistency with text.
- Added `MPI_Test`/`MPI_Wait` semantics for the request returned by `MPI_Notify_when_notify_threshold`.
- Clarified that completion at the origin implies the **data movement operation** is complete at the origin; sending of the notification may be a decoupled MPI activity.
- Fixed: `MPI_Win_set_num_notify` is erroneous only if an access epoch is open **locally** (not at any process in the window group) — removes the implicit requirement for a user-level barrier before the call; the implementation can internalize that barrier. 
- Removed commented-out leftover text that should not have been in the PR.
- **Changelog entry missing** — Joseph to add before next vote. 

**Errata also presented:** Table caption for predefined window attributes incorrectly referenced `MPI_Win_set_attribute`; since these attributes are set at window creation and cannot be changed, the reference to the set function was removed. 

---

### MPI_PROD Deprecation (PR #1152 / Joseph)

**Rationale presented:**

- Most hardware does not support atomic multiplication for RMA; `MPI_PROD` may force a software fallback that slows all other operators. 
- No compelling known use case in RMA; historical usage has been as a substitute for `MPI_LAND`/`MPI_BAND`. 

**Forum debate summary:**

- **Against deprecation/removal:** Inconsistency with other operators lacking full hardware support (e.g., `MPI_MINLOC`/`MPI_MAXLOC`); breaking backward compatibility in regular reductions if constant is removed; rationale not clearly spelled out in the PR. 
- **For deprecation:** Clear signal to users and tools (including LLMs) not to use it; existence forces implementation coverage even if nobody uses it; compiler warnings on deprecated symbols in OpenMPI already work effectively. 
- **Alternative proposed:** Add rationale text explaining which operators lack hardware atomic support before deprecating; consider advice-to-users approach rather than deprecation. 
- **Outcome:** Returned to RMA working group; SC BOF identified as venue to gather user community feedback. 

---

### MPI_WinCreate_C Displacement (PR #1153 / Joseph)

**Problem:** When the standard was "embiggened" for large counts, `MPI_Win_create` and related functions received underscore-C variants with `MPI_Count` displacement. However, no corresponding large-count attribute query was added, making it impossible to safely retrieve the displacement from a window created with the `_C` variant if the caller didn't know how it was created. 

**Options debated:**

- **Errata (remove as if never existed):** Strongly opposed — 5+ hands against in the room; would break any existing usage. 
- **Deprecation:** Also opposed by majority; seen as inconsistent with the otherwise systematic underscore-C convention. 
- **Add a safe query mechanism:** Proposed as the correct fix — either a new `MPI_Win_get_builtin_attr` style function or an embiggened attribute query; Joseph noted this is a larger change and needs RMA working group input. 
- **Add a flag attribute:** Could allow callers to determine whether a window was created with `_C` before choosing pointer type for query — acknowledged as complex. 

**Outcome:** Returned to RMA working group; Joseph to investigate and return with a proposal that fixes the broken state without removing the function. 

---

### Handle Introspection / MPI Debugging Interface (Joachim / Marc-André)

**Motivation:** Debuggers currently receive opaque integer or struct values for MPI handles with no portable way to interpret them. The goal is a standardized ABI between MPI libraries and debugging tools (analogous to the OMPD interface for OpenMP). 

**Architecture:**

- Information stored in MPI library; exposed via a separate debugging library loaded by the debugger (e.g., GDB via Python plugin with C component). 
- Prototype implemented via a PMPI interception library that observes handle creation; full in-library implementation would allow richer queries (e.g., exact state of an MPI operation). 

**Current status:**

- Interface design mostly in the **Tools Working Group wiki**; migration to a standard LaTeX document in progress but incomplete — estimated ~50 pages when done. 
- Prefix/naming cleanup still needed in wiki content.
- Decision confirmed: target inclusion in the **main standard**, not a separate document. 

**Structural questions raised:**

- New constructs involve **structs encapsulating multiple pieces of information** rather than simple function pointers — question of whether to add these to the code generation tool or write analytic code. 
- Binding tool (Python/LaTeX generation) is largely unmaintained since Martin Rufenach's departure; Howard noted it is occasionally touched for enhancements. 

**Call for implementers:** Tools WG meets Mondays at 10 AM Central / 5 PM European; currently only ~5 participants from 2 tools; seeking OpenMPI and MPICH representatives to guide implementation decisions. 

---

### Callback Extra State / MPIOpCreateX (Tim / Languages WG)

**Problem:** Language bindings (MPI for Python, Julia, C++) cannot safely implement custom reduction operations without a trampoline function, and trampolines need extra state (a pointer to the target-language function) that the current `MPI_Op_create` interface does not support. 

**Proposal:** New function `MPI_Op_create_x` (name TBD) taking:

- User function pointer
- Extra state pointer
- Deletion callback (called once when the op is freed) 

**Forum feedback:**

- **BigCount-only vs. symmetry:** Howard flagged that using only `MPI_Count` in the new function (without an int version) caused problems in partitioned communication previously and may need an underscore-C variant for symmetry. 
- **Scalar vs. pointer arguments:** Since the new function is C-only (not for direct Fortran interop), `len` and `datatype` arguments could be scalars rather than pointers — the pointer convention exists only because old Fortran functions are called by reference. 
- **Scope of change:** Extra state and deletion callbacks are also needed for **error handlers** and potentially **generalized requests**; all require proxy callbacks because handles need conversion for language bindings. 
- **Outcome:** Working group to continue; may split op-create-x from error handler changes for separate readings; PR not ready for formal reading. 

---

### Dictionary / Key-Value Store for Dynamic Process Management (Dominic / Sessions WG)

**Proposal:** Add a general-purpose named dictionary API to Chapter 11 (Process Creation and Management) to support bootstrapping between processes that do not yet share a communicator: 

- `MPI_Dict_create(name, info)` / `MPI_Dict_remove(name)`
- `MPI_Dict_publish(dict_name, key_value_info, hints_info)`
- `MPI_Dict_lookup(dict_name, keys_info [in/out], hints_info)`
- `MPI_Dict_unpublish(dict_name, keys_info)`

**Motivation:** Existing `MPI_Publish_name`/`MPI_Lookup_name` is too narrow (port-name only); new spawn and dynamic resource proposals need a way to communicate pset names and control information to newly started processes before any MPI communicator exists. 

**Major concerns raised:**

- **Scope undefined:** Implementation-defined scope (same as `MPI_Publish_name`) may be insufficient; suggestion to make scope an explicit signature argument with mandatory job-level support. 
- **Risk of misuse as a general KV store:** Users will likely use it for application data, large binary blobs, or high-frequency coordination — far beyond the intended bootstrapping use case; PMIx history cited as a cautionary example of scope creep. 
- **Strings-only limitation:** Current design restricts values to MPI info strings; question of whether to allow arbitrary binary data raised but not resolved. 
- **Relationship to PMIx:** The proposal essentially moves PMIx KV store functionality into MPI; the forum debated whether this belongs in the standard or should remain an external library. 
- **Alternative:** Use existing spawn pset-name mechanism plus a bootstrapped communicator for subsequent data exchange. 

**Outcome:** Working group tasked with preparing a **concrete walkthrough example** showing the full lifecycle (resource request → process boot → dictionary lookup → communicator creation) for a future plenary, ideally on one of the standing Wednesday slots. 

---

## Working Group Status Updates

|          Working Group          |             Status              |                                                     Notes                                                      |
|---------------------------------|---------------------------------|----------------------------------------------------------------------------------------------------------------|
| **ABI**                         | Standards part complete         | Technical implementation details being finalized                                                               |
| **Collectives**                 | Active                          | Discussing new fault model definition; Matthew and Brian leading                                               |
| **Sessions**                    | Active                          | Reactivating; new interfaces and ideas in discussion                                                           |
| **Languages**                   | Active (bi-weekly)              | C++ language interface reference implementation nearing workable state; callback/interoperability work ongoing |
| **Tools**                       | Active (Mondays, 10 AM Central) | Handle introspection + P-control focus; seeking more implementer participants                                  |
| **RMA**                         | Active                          | MPI_PROD, displacement issues, notified communication                                                          |
| **Point-to-Point / Persistent** | On hold                         | No current activity                                                                                            |

# Day 2

## Quick recap

The morning meeting focused on two main topics: proposals for intercepting and recording internal MPI I/O communication for performance analysis, and updates to the MPI fault tolerance model. Bill presented a proposal from Max Zonder to expose internal MPI I/O communication via an MPIT control variable, sparking a discussion on generalizing this concept to other internal communications like collectives. The group then reviewed Matthew's detailed proposal to clarify and update the MPI fault model, introducing new terms like "failed process group" and "failure precluded" to define process states and error handling. The discussion delved into complex scenarios such as misrecorded failures, disjoint process groups, and the handling of "ghost" processes in MPI AnySource receives. Matthew also presented the new MPICommAgreeFailed function, designed to agree on a consistent group of failed processes, with examples illustrating its use for safe communicator creation. The conversation ended with plans to continue discussions after a lunch break.

The afternoon meeting focused on reviewing and refining MPI standard text and discussing ongoing development work. MPI and Joseph confirmed that the fault tolerance discussion had been completed with only a few comments and general agreement. Joseph then presented a proposal to reorder and clarify the text regarding the status object in the point-to-point chapter, specifically how the error field is updated only by procedures returning MPI_ERR_IN_STATUS. Tony provided a detailed recap of a long-standing proposal for P_arrived_any and P_arrived_some APIs to support out-of-order reception of partitions, explaining their importance for early bird communication and concurrency. Tony also discussed the ongoing research into kernel-initiated communication for GPUs and how it relates to streaming communication work led by Patrick Bridges. MPI provided an update on the spring meeting scheduling, noting that TAC strongly discouraged a March meeting due to logistical issues in Austin, and mentioned that the December meeting remained scheduled. The conversation ended with a brief mention of voting on the proposal and a group photo.

## Summary

### MPIIO Interception Proposal Discussion

MPI presented a proposal from Max Zonder to implement interception and recording of MPIIO internal communication through an MPIT control variable, allowing performance analysis without requiring MPI recompilation. The discussion focused on whether this approach should be generalized to include collectives beyond just I/O operations, with concerns raised about future-proofing and implementation complexity. The group agreed on the need for iterative development and prototyping before formal standardization, with plans to explore existing implementations to identify common ground and missing features for future MPIT events specifications.

### Fault Model Updates Presentation

Matthew presented updates to the fault model section in the fault tolerance chapter, focusing on clarifying and making the definitions more precise. He introduced key concepts including failed and extant processes, failed process groups, and terms like recorded failed and misrecorded failed. The discussion included a controversial aspect about how failure determination applies across all communicators and sessions for a given MPI process. The group also discussed the potential for future extensions to handle transient failures without breaking backwards compatibility.

### MPI Fault Knowledge Discussion

Matthew and MPI discussed the use of the term "comprehensive" in describing MPI fault knowledge, agreeing to change it to avoid misleading users about current implementation capabilities. They reviewed requirements for fault tolerance errors in MPI operations and clarified that at least one failed process must be recorded in the failed process group when an error occurs. The discussion also covered implementation options for handling different fault types, including the ability to terminate or misrecord processes, with a requirement for implementations to document such policies.

### MPI Process Failure Handling Discussion

The discussion focused on handling misreported MPI process failures in implementations. Matthew explained that implementations may detect misrecorded failures through verification methods but cannot bring back misreported processes as this would break application recovery logic. The standard allows implementations to choose whether to terminate misreported processes, though this is implementation-defined behavior that should be documented. The group discussed different fault-tolerant design approaches, including democratic-style process management versus centralized process monitoring, with MPI suggesting a third option of allowing processes to rejoin after being marked as failed. The meeting took a break before continuing the discussion.

### Meeting Restart Discussion Planning

The meeting participants agreed to restart the discussion at 11:00. They planned to continue with a reading and then move on to a second topic after the restart. The immediate focus was on finishing a discussion about the last paragraph before resuming the main meeting.

### MPI Documentation Updates Discussion

Matthew discussed updates to MPI documentation, focusing on changing references from "failed process" to "recorded failed process" throughout the text to clarify the fault tolerance model. MPI raised a concern about handling ghost processes in any-source receives, particularly when hardware matching occurs after a process has been recorded as failed. The discussion explored implementation challenges of preventing ghost messages and the burden this would place on implementations, with MPI arguing that reissuing receives or maintaining additional bookkeeping would be too expensive to implement.

### MPI Message Handling Strategy Discussion

Matthew and MPI discussed handling messages from failed processes in MPI communication. They debated whether to report corrupted data or allow the application to receive messages from ghost processes. MPI argued that implementing a retry mechanism would be expensive and counter to the "fire and forget" design principle. Matthew countered that the performance cost is minimal and the current approach would force the application to handle the issue anyway. They agreed that while point-to-point communication is straightforward, any-source receipts require additional recovery steps after a failure, though this is primarily a performance concern rather than a correctness issue.

### MPI AnySource Error Recovery Discussion

The discussion focused on handling MPI AnySource receives after process failures and ghost processes. MPI explained that implementing error recovery would require saving input parameters to allow message replay, as current optimizations would need to be disabled. The group agreed that applications should be advised about the potential for errors when using AnySource receives with acknowledged failed processes, though the specific error handling approach would remain implementation-dependent. Matthew and MPI aligned on adding user advice to the documentation without requiring significant changes to the existing text or semantics.

### MPICommAgreeFailed Proposal Discussion

The team discussed a proposal for MPICommAgreeFailed, focusing on its functionality and semantics. They reviewed the proposed text and examples, including how the function handles failure groups and misreported failures. Matthew explained that the function returns a consistent group of recorded failed processes across all participants, allowing applications to safely exclude failed ranks when creating new communicators. The group agreed that the proposed semantics were clear and useful, even if they don't address all desired fault tolerance features. They decided to simplify the text by removing certain nuanced descriptions and planned to continue the discussion after lunch, with the possibility of US participants joining later.

### MPI Documentation Clarification Updates
The team completed their fault tolerance discussion with minimal issues and reached agreements on all points. Joseph presented item 814, which focused on reordering and clarifying text regarding the content and setting of status objects in MPI, particularly around error codes and field definitions. The proposed changes aim to make the language more clear about when the MPI error field should be updated and provide better consistency across different sections of the documentation.

### Pre-Read Voting and Meeting Updates
The meeting focused on voting for pre-read items, with Joseph requesting votes and Wes agreeing to add a comment to ensure items aren't forgotten. MPI announced that morning recordings would be posted soon. The group reviewed organizations that had not yet voted, including AMD, Cornellis, HPE, and others. MPI updated the group on a straw poll regarding spring meeting scheduling, noting that while February and March options were considered, TAC strongly discouraged a March meeting due to conflicts with South by Southwest and a rodeo event.

### MPI-4 Partition Communication Proposal
Tony presented a proposal to add partition communication features to MPI-4, specifically the P_arrive API which allows out-of-order reception of partitioned messages. The proposal was originally submitted in 2018 but was left out of the MPI-4 standard, and Tony is now seeking to resubmit it. The new APIs would enable early bird communication and support concurrent processing of message partitions, particularly beneficial for GPU and OpenMP parallelism. Tony indicated that while the CPU version is ready, the GPU implementation remains a work in progress and will require further development and demonstration of real-world use cases before being proposed for standardization.

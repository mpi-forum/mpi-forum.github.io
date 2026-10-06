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


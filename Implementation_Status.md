---
layout: page
full-width: true
center: true
title: Implementation Status
permalink: /implementation-status/
---

This page provides a way to update the community on the current status of various MPI implementation with respect to the various vesions of the MPI Standard.

## MPI 4.1

| ------------------------- | ----- | ------- |
| Feature                   | [MPICH](https://mpich.org/) | [Open MPI](https://www.open-mpi.org/) |
| (P)MPI_WTI{ME,CK} and handle conversion macros are symbols             |   ✅   |      |
| `MPI_REQUEST_GET_STATUS` makes progress                                |   ✅   |      |
| Status field get/set functions                                         |   ✅   |      | 
| Send with automatic buffering features                                 |   ✅   |      | 
| Getting multiple statuses from an array of requests                    |   ✅   |      | 
| `MPI_TYPE_GET_VALUE_INDEX`                                             |   ✅   |      | 
| `MPI_COMM_TYPE_RESOURCE_GUIDED` and `mpi_pset_name`                    |   ✅   |      | 
| `mpi_assert_strict_persistent_collective_ordering`                     |   ✅   |      | 
| Memory alloc kinds                                                     |   ✅   |      | 
| Getting names for null handles                                         |   ✅   |      | 
| `MPI_GET_HW_RESOURCE_INFO`                                             |   ✅   |      | 
| `MPI_ERR_ERRHANDLER`                                                   |   ✅   |      | 
| Removing error class, code and string                                  |   ✅   |      | 
| `MPI_WIN_SHARED_QUERY` supports more window types                      |   ✅   |      | 
| `mpi_accumulate_granularity`                                           |   ✅   |      | 

|---|---|
|# - Under development | + - Partly done |

## MPI 4.0

| ------------------------- | ----- | ------- | ------- |
| Feature                   | [MPICH](https://mpich.org/) | [Open MPI](https://www.open-mpi.org/) |  [Intel MPI](https://www.intel.com/content/www/us/en/developer/tools/oneapi/mpi-library.html) |
| Large Counts              |  ✅   |   ✅    |    ✅    | 
| Partitioned Communication |  ✅   |   ✅    |    ✅    |
| Sessions                  |  ✅   |   ✅    |    ✅    |
| MPI_T Events              |  ✅   |   ✅    |    ❌    |
| Error Handling            |  ✅   |   ✅    |    ✅    |
| Non-blocking SENDRECV     |  ✅   |   ✅    |     #    |
| Persistent Collectives    |  ✅   |   ✅    |    ✅    |
| New Split Types           |  ✅   |   ✅    |    ✅    |
| MPI_COMM_DUP info         |  ✅   |   ✅    |     #    |
| Info Assertions           |  ✅   |   ✅    |    ❌    |
| Memory Alignment          |  ✅   |   ✅    |    ❌    |
| MPI_INFO_CREATE_ENV       |  ✅   |   ✅    |     #    |


|---|---|
|# - Under development | + - Partly done |

## MPI 3.1

| ------------------------ | ----- | ------- | -------- | ---- | ------ | --------- | ------------------- | ----------------- | -------------- | --- | ------- | --------- | --- | --- | ------ | ----- | ------- |
| Feature                  | [MPICH](https://mpich.org/) | MVAPICH | [Open MPI](https://www.open-mpi.org/) | Cray | Tianhe | [Intel MPI](https://www.intel.com/content/www/us/en/developer/tools/oneapi/mpi-library.html) | IBM (BG/Q - Legacy) | IBM (PE - Legacy) | IBM (Spectrum) | HPE | Fujitsu | Microsoft | MPC | NEC | Sunway | RIKEN | AMPI    |
| Non-Blocking Collectives | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | ✅      |
| Neighborhood Collectives | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ❌        | ✅  | ✅  | ✅     | ✅    | ✅      |
| RMA                      | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | +       |
| Shared Memory            | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | #       |
| MPI_T                    | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | #         | ✅  | ✅  | ✅     | ✅    | Q1 2019 |
| `MPI_COMM_CREATE_GROUP`  | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | #         | ✅  | ✅  | ✅     | ✅    | ✅      |
| F08 Bindings             | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ❌                | ✅             | ✅  | #       | ❌        | ✅  | ✅  | ✅     | ✅    | Q2 2019 |
| New Datatypes            | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | ✅      |
| Large Counts             | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | ✅      |
| `MPI_MProbe`             | ✅    | ✅      | ✅       | ✅   | ✅     | ✅        | ✅                  | ✅                | ✅             | ✅  | ✅      | ✅        | ✅  | ✅  | ✅     | ✅    | ✅      |
| NBC I/O                  | ✅    | ✅      | ✅       | ✅   | ❌     | ✅        | ❌                  | ❌                | ✅             | ✅  | #       | ❌        | #   | ✅  | ❌     | ✅    | Q2 2019 |

|---|---|
|# - Under development | + - Partly done |

#### Instructions for MPI Implementation Maintainers

If you would like to update the information for your implementation. Create a pull request [here](https://github.com/mpi-forum/mpi-forum.github.io/edit/master/Implementation_Status.md) to make that change. If you're unclear on how that works, contact [@wesbland](https://github.com/wesbland) or [@schulzm](https://github.com/schulzm) for help.

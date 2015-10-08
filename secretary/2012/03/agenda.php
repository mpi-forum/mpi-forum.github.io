<?
$short_desc = "Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">";
}

agenda_day_start("Monday, March 5, 2012");
agenda_item(" 1:00pm -  2:00pm", "Plenary Session: Hybrid working group- Clarify MPI behavior when multiple MPI processes run in the same address space - formal reading  " 
        . ticket(310) . "Ticket #310</a>");
agenda_item(" 2:00pm -  3:00pm", "Plenary Session: Hybrid working group- Provide a mechanism for migrating threads between MPI processes - formal reading  " 
        . ticket(311) . "Ticket #311</a>");
agenda_item(" 3:00pm -  4:00pm", "Plenary Session: Hybrid working group- Helper Threads - formal reading  " 
        . ticket(217) . "Ticket #217</a>");
agenda_item(" 4:00pm - 4:15pm","Break");
agenda_item(" 4:15pm -  6:30pm", "Planary Session: Fault Tolerance working group Formal Readings <br/> 
         User-Level Failure Mitigation "  . ticket(323) . "Ticket #323</a> <br/>
         Clarify MPI_ERRORS_ARE_FATAL scope of abort "  . ticket(324) . "Ticket #324</a>
"       
);
agenda_item(" 6:30pm -  7:30pm", "Dinner on own");
agenda_item(" 7:30pm - 10:00pm", "Planary Session: Fault Tolerance working group Formal Readings <br/> 
         User-Level Failure Mitigation "  . ticket(323) . "Ticket #323</a> <br/>
         Clarify MPI_ERRORS_ARE_FATAL scope of abort "  . ticket(324) . "Ticket #324</a>
"       
);
agenda_day_end();

agenda_day_start("Tuesday, March 6, 2012");
agenda_item(" 8:45am - 9:30am","Existing ticket 0 - <br/>
            Mention C++ typedef deprecations " . ticket(185) . "ticket #185</a> <br/>
            Minor Text Correction / MPI_COMM_GET_NAME + MPI_GET_PROCESSOR_NAME " . ticket(207) . "ticket #207</a> <br/>
            MPI-2.2 typo - missing parenthesis on page 272, line 25 " . ticket(215) . "ticket #215</a> <br/>
            Typo in the description of MPI_GROUP_INCL " . ticket(254) . "ticket #254</a> <br/>
            Missing headline for MPI_GET_PROCESSOR_NAME " . ticket(255) . "ticket #255</a> <br/>
            Minor typos in pt2pt chapter " . ticket(262) . "ticket #262</a> <br/>
            wrong formula for the upper bound " . ticket(263) . "ticket #263</a> <br/>
            Typo in One-Sided chapter 11.4.4 " . ticket(267) . "ticket #267</a> <br/>
            Formatting issue in One-Sided chapter 11.4.4 " . ticket(268) . "ticket #268</a> <br/>
            MPI 2.1 Clarification - MPI_Cart_map with num_dims=0 " . ticket(162) . "ticket #162</a> <br/>
            s/legal/something_better/g " . ticket(182) . "ticket #182</a> <br/>
            MPI_MAX_OBJECT_NAME and MPI_Type/win_get_name " . ticket(219) . "ticket #219</a> <br/>
            Typo-Correction in ALLTOALLV " . ticket(312) . "ticket #312</a>"

);
agenda_item(" 9:30am -10:00am","Plenary Session: MPI_info object- formal reading  " .
	            ticket(271) . "Ticket #271</a>");
agenda_item("10:00am - 10:15am","Plenary Session: 1st vote: Remove non-blocking collective C++ bindings " . ticket(272) . "ticket #272</a><br/>
            Use of [] in output arrays ticket(Tillier) " . ticket(125) .  "ticket #125</a>, <br/>
            Ensure MPI_Dims_create is really suitable for MPI_Cart_create(Gropp) " . ticket(194) .  "ticket #194</a>, <br/>
        "
);
agenda_item("10:15am - 10:30am","Break");
agenda_item("10:30am - 11:30am","Plenary Session: 1st votes: <br/> 
	     RMA - Remove sentence on offset in datatypes " . ticket(308) . "ticket #308</a>, <br/>
	     RMA - Clarify usage of status for request-based RMA operations " . ticket(309) . "ticket #309</a>,  <br/>
	     Allocate a shared memory window " . ticket(284) . "ticket #284</a>,  <br/>
	     Add a new datatype creation routine - MPI_Type_create_hindexed_block " . ticket(280) . "ticket #280</a>,  <br/>
             2nd Votes: <br/>
	     Adding clarification to MPI_WIN_LOCK_ALL " . ticket(298) . "ticket #298</a> ,<br/>
	     Fortran Bindings " . ticket(229) .  "ticket #229</a>,  <br/>
             Change displs in neighborhood collectives " . ticket(299) .  "ticket #299</a>"
);
agenda_item("11:30am - 12:30pm","Working lunch: Plenary Session: Formal Readings: <br/>
             Add Immediate versions of nonblocking collective I/O routines (Koziel) " . ticket(273) .  "ticket #273</a>,   <br/>
             Noncollective Communicator Creation(Dinan) " . ticket(286) .  "ticket #286</a>, <br/>"
	);

agenda_item("12:30pm -  4:30pm","Plenary Session: Formal Readings:  <br/>
            Update MPI_Intercomm_create to use collective tag space(Dinan) " . ticket(305) .  "ticket #305</a>,  <br/>
            Update examples to not use deprecated constructs (where possible)(Tillier) " . ticket(278) .  "ticket #278</a>,  <br/>
            Remove C++ Bindings(Tillier) " . ticket(281) .  "ticket #281</a>,  <br/>
     	    MPI_UNWEIGHTED should not be NULL " . ticket(294) . "ticket #294</a> <br/>
            Change MPI_OFFSET external32 size to 16 Bytes " . ticket(196) . "ticket #196</a> <br/>
            MPI_WAIT/TEST language unclear about non blocking I/O, Generalized, or collective requests " . ticket(321) . "ticket #321</a> <br/>
            Topology awareness in MPI_Dims_create(Balaji) " . ticket(195) .  "ticket #195</a> 
            Move MPI-1 deprecated functions to new Removed Interfaces chapter(Tillier) " . ticket(303) .  "ticket #303</a> " 
	);
agenda_item(" 4:30pm -  4:45pm","Break");
agenda_item(" 4:45pm -  6:30pm","Plenary Session: Formal Readings: <br/>
            Clarification that MPI_Cart_map and MPI_Graph_map are local calls(Traff/Rabenseifner) " . ticket(158) .  "ticket #158</a>, <br/>
            For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types(Ritzdorf/Rabenseifner) " . ticket(187) .  "ticket #187</a>, <br/>
            Clarify ambiguous sentence for MPI_FINALIZE(Snir) " . ticket(227) .  "ticket #227</a>, <br/>
            MPI_PROC_NULL behavior for MPI_PROBE and MPI_IPROBE not directly defined(Squyres) " . ticket(256) .  "ticket #256</a>, <br/>
            Text updates for MPI_DIST_GRAPH(Moody) " . ticket(259) .  "ticket #259</a> " 
	);
agenda_item(" 6:30pm -  7:30pm","Dinner on own");
agenda_item(" 7:30pm -  9:30pm","Plenary Session: Formal Readings: <br/>
              Consistent use of [] for input arrays(Tillier) " . ticket(126) .  "ticket #126</a>, <br/>
              K&R style on 6.7.6(Tillier) " . ticket(293) .  "ticket #293</a>"
                                    );

agenda_day_end();

agenda_day_start("Wednesday, March 7, 2012");
agenda_item(" 9:00am - 10:00am","Plenary Session: Formal Reading: <br/>
            Update examples to not use deprecated constructs (where possible)(Tillier) " . ticket(278) .  "ticket #278</a>,  <br/>
            Plenary Session: Relaxing MPI_TYPE_GET_ENVELOPE combiner rules " 
	);
agenda_item("10:00am - 12:00pm", "Planary Session: Formal Readings <br/> 
         User-Level Failure Mitigation "  . ticket(323) . "Ticket #323</a> <br/>
         MPI3 Fault Tolerance - Files "  . ticket(326) . "Ticket #326</a> <br/>
         MPI3 Fault Tolerance - Dynamic process management"  . ticket(327) . "Ticket #327</a><br/>
         Clarify MPI behavior when multiple MPI processes run in the same address space"
	          . ticket(310) . "Ticket #310</a><br/>
         Provide a mechanism for migrating threads between MPI processes"
	          . ticket(311) . "Ticket #311</a><br/>
         MPI_INIT & MPI_FINALIZE"
	          . ticket(313) . "Ticket #313</a>
         ");
agenda_item("12:00pm - 12:30pm","Working Lunch: Plenary Session: MPI 3.0 status");
agenda_item("12:30pm -  3:30pm","Plenary Session: Formal Readings:  <br/>
	     Nonblocking Communicator Duplication " . ticket(168) . "ticket #168</a> <br/>
            MPI_IN_PLACE in Gather (Hoefler) " .  ticket(163) .  "ticket #163</a>, <br/>
            Fix issue with definition of nonblocking in One Sided Chapter (Hoefler) " . ticket(300) .  "ticket #300</a> <br/>
            Fix MPI_PROC_NULL behavior for mprobe/improbe/mrecv/imrecv " . ticket(328) .  "ticket #328</a> <br/>
            Topology awareness in MPI_Dims_create " . ticket(195) .  "ticket #195</a> <br/>
            C++ binding for Dist_graph_neighbors_count is badly broken " . ticket(192) .  "ticket #192</a> <br/>
            Correct error related to MPI_REQUEST_FREE" . ticket(317) .  "ticket #317</a> <br/>
            "
	);

agenda_day_end();

include_once("$topdir/include/footer.php");

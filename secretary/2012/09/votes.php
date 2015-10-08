<?
$short_desc = "Votes";
$long_desc = "Votes and Formal Readings from the meeting";
$file = "votes.php";
include_once("subpage.php");

$passed = "<font color=\"#00bb00\"><strong>Ballot passed</strong></font>";
$failed = "<font color=\"#bb0000\"><strong>Ballot failed</strong></font>";

////////////////////////////////
// Prior meeting

print("<h2>Prior Meeting</h2>

<p>See the <a href=\"../07/votes.php\">prior meeting formal readings / votes</a> to know what will be coming up for this meeting.</p>\n\n");

////////////////////////////////
// Formal readings

$line = "<div align=\"center\"><hr width=\"50%\"></div>";

print("$line\n\n<h2>Formal Readings:</h2>

<p><ol>\n");

// If you don't fill in the title, we'll download it from Trac
// automatically.  BEWARE!  This is really slow if you have more than
// a few tickets.  :-(
//reading(187, "For reductions: Grouping MPI_AINT, MPI_OFFSET, MPI_COUNT as Multi-language types");

print("<li> There were no formal readings at this meeting.</li>\n");
print("</ol><p>\n\n");

////////////////////////////////
// Votes

print("$line\n\n<h2>Votes:</h2>
<p><strong>NOTE <font size=+3>NOTE <font color=red size=+5>NOTE:</font></font></strong> The Forum voted during a prior meeting that \"abstain\" now means the same as \"no\".  There is no longer a \"missed\" category -- if you missed a vote, it's the same as abstaining, which is therefore a \"no\".

<p><ol>\n\n");

////////////////////////////////
// First-and-only vote for these two trivial text fixes

ballot72012("RMA chapter trivial text fix #1 (displacement types)",
            15, 0, 2);

ballot72012("RMA chapter trivial text fix #2 (MPI_ERR_RMA_[WRONG_]FLAVOR)",
            16, 0, 1);


////////////////////////////////
// Chapter votes

ballot72012("Chapter vote: Frontmatter",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 1 / Introduction to MPI",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 2 / MPI Terms and Conventions",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 3 / Point-to-Point Communication",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 4 / Datatypes",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 5 / Collective Communication",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 6 / Groups, Contexts, Communicators, and Caching",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 7 / Process Topologies",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 8 / MPI Environmental Management",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 9 / The Info Object",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 10 / Process Creation and Management",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 11 / One-Sided Communication",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 12 / External Interfaces",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 13 / I/O",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 14 / Tool Support",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 15 / Deprecated Functions",
            17, 0, 0);

ballot72012("Chapter vote: Chapter 16 / Removed Interfaces",
            15, 0, 2);

ballot72012("Chapter vote: Chapter 17 / Language Bindings",
            17, 0, 0);

ballot72012("Chapter vote: Annex A / Language Bindings Summary",
            17, 0, 0);

ballot72012("Chapter vote: Annex B / Change-Log",
            17, 0, 0);

ballot72012("Chapter vote: Bibliography + Indexes",
            17, 0, 0);

////////////////////////////////
// Whole document vote

ballot72012("Overall MPI-3.0 document",
            17, 0, 0);


print("</ol></p>\n\n");

include_once("$topdir/include/footer.php");

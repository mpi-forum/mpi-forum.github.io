<?php

$data = $_POST["data"];
$site = $_POST["site"];
$title = isset($_POST["title"]) ? $_POST["title"] : "";
$restrict = isset($_POST["restrict"]) ? $_POST["restrict"] : "";
$dispatch = isset($_POST["dispatch"]) ? $_POST["dispatch"] : "";

# Do a Swish-e search
if ($dispatch != "") {
    $data = str_replace(" ", "+", $data);
    header("Location: $dispatch?query=$data");
    exit(0);
}

# Do a normal Google search
$extra = "";
if (!empty($title)) {
    $extra .= "AND title:\"$title\" ";
}
if (isset($site)) {
    if (!empty($restrict) && "$restrict" != "all") {
        if (substr($site, strlen($site) - 1, 1) == "/" ||
	    substr($restrict, 0, 1) == "/") {
	    $extra .= "site:$site$restrict ";
	} else {
	    $extra .= "site:$site/$restrict ";
	}
    } else {
        $extra .= "site:$site ";
    }
}
if ($extra != "") {
  $data = "$data $extra";
}

if (!empty($data)) {
  header("Location: http://www.google.com/search?q=" . urlencode(trim($data)));
} else {
  header("Location: ../bad-search.php");
}

<?php
	if (isset($_POST["sort"]))

	if ($_POST["sort"]==="highPrice"){
		$_SESSION["order"]="DESC";
		$_SESSION["column"]="Price";
	}
	else if ($_POST["sort"]==="lowPrice"){
		$_SESSION["order"]="ASC";
		$_SESSION["column"]="Price";
	}
	else if ($_POST["sort"]==="new"){
		$_SESSION["order"]="DESC";
		$_SESSION["column"]="Year";
	}
	else if ($_POST["sort"]==="old"){
		$_SESSION["order"]="ASC";
		$_SESSION["column"]="Year";
	}
	else if ($_POST["sort"]==="highMile"){
		$_SESSION["order"]="DESC";
		$_SESSION["column"]="Miles";
	}
	//last option i.e lowMile
	else{
		$_SESSION["order"]="ASC";
		$_SESSION["column"]="Miles";
	}
?>
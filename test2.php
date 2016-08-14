<?php
session_start();

	echo $_SESSION["userName"];
if (isset($_COOKIE["userName"])){
	echo "<br>yes";
}
else{
	echo "<br>no";
}





?>

<?php

session_start();
session_destroy();

if(isset($_POST["submit"])) {
	echo "yes";
}

/*
session_start();
if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "hi";
}
echo "what";
session_destroy();
*/



?>

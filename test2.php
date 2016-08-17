<?php

session_start();
session_destroy();
$sql = "SELECT Car.*, image\.Image FROM Car LEFT JOIN image ON Car\.CarID=image.";
print($sql);
/*
session_start();
if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "hi";
}
echo "what";
session_destroy();
*/



?>

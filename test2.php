<?php

session_start();
session_destroy();
$hi = 3;
$img="$hi" ."." ."yolo";
$file_name="$hi"."."."jpg";
print($file_name);
/*
session_start();
if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "hi";
}
echo "what";
session_destroy();
*/



?>

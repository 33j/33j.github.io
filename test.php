<?php




$dbservername = "comp380gp4.cztejaciasub.us-west-2.rds.amazonaws.com";
$dbusername = "comp380";
$dbpassword = "comp380gp4";
$dbname = "comp380gp4";


$userName = "username";

//setcookie("userName", "", time() - 3600,"/");
//unset($_COOKIE["userName"]);

//	setcookie("userName", $userName, time() + (86400 * 30), "/");
echo $_SESSION	["userName"];
	
if (isset($_SESSION["userName"])){
	echo "<br>yes";
}
else{
	echo "<br>no";
}





?>



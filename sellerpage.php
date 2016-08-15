<?php
	session_start();
	//if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
	//	echo "<script type='text/javascript'>window.location.href = 'sellerpage.php';</script>";
	//}
?>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="carstyles.css"/>
		<title>Sellers page</title>
	</head>

<body>
	<div>
	<h1>Welcome <?php echo($_SESSION["userName"]); ?> </h1>
	</div>

	<div>
		<img style="margin-left:5em" alt="Click to post" src="drawButton (1).png" margin-left:15em>
	</div>

<div class="box cyanbox">
Seller database should update this box with a list of cars the seller has posted
also create a password verification for the log in page.
</div>

</body>
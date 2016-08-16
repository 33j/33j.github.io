<?php
	session_start();
?> 





<html>
	<head>
		<link type="text/css" rel="stylesheet" href="carstyles.css"/>
		<!--style overwrite-->
		<style>
		#header{
				height: 150px;
				background: white; /* For browsers that do not support gradients */
				background: -webkit-linear-gradient(bottom,rgba(255,255,255,0),rgba(255,255,255,1)); /*Safari 5.1-6*/
				background: -o-linear-gradient(bottom,rgba(255,255,255,0),rgba(255,255,255,1)); /*Opera 11.1-12*/
				background: -moz-linear-gradient(bottom,rgba(255,255,255,0),rgba(255,255,255,1)); /*Fx 3.6-15*/
				background: linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,1)); /*Standard*/
			
		}
		</style>
		<title>Sellers page</title>
	</head>

	<body>
	<div id="header">
	<p style="font-size:50px; text-align:center;"> Welcome <?php echo($_SESSION["userName"]); ?> </p>
	</div>

	
		
	<div style="height:30%;">
		<a style="display:block; width:20%; margin:auto;" href="http://yahoo.com"><img style="width:100%;" alt="Click to post" src="drawButton (1).png"/></a>	
	</div>
	
	<div>
	Seller database should update this box with a list of cars the seller has posted
	also create a password verification for the log in page.
	</div>

	</body>

</html>


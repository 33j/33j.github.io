<?php
	session_start();
	if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "<script type='text/javascript'>window.location.href = 'sellerpage.php';</script>";
	}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="loginstyle.css"/>
		<meta charset="UTF-8">
	</head>
	
	<body>
	
		<ul>
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	
		<form action="" method="post">
			<label for="userName">Username</label>
			<input style="width:100%" type="text" name="username"></p>
			<label for="password">Password</label>
			<input style="width:100%" type="text" name="password"></p>
		
			<input type="submit" value="login">
		</form>
		<button onclick="window.location.href='signup.php'">signup</button>
		<a href = "#forgot"><sup>forgot password/username?</sup></a>
		<br>
	</body>
</html>

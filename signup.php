<?php
	if (isset($_COOKIE["name"])){
		header("location: index.html");
	}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="signupstyle.css"/>
		<meta charset="UTF-8">

	</head>
	
	<body>


	<?php
		
		// first set the name to be error
		$userNameErr = $firstNameErr = $lastNameErr = $contactErr = $passwordErr = "";
		$userName = $firstName = $lastName = $address = $city=$contact = $password = $confpass = "";
		$valid = TRUE;
		$until = FALSE;
		if ($_SERVER['REQUEST_METHOD']=="POST"){
			if (empty($userName=$_POST["username"])){
				$userNameErr = "UserName is required";
				$valid = FALSE;
			}
			else if (!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
				$userNameErr = "Only numbers and letters in UserName";
				$valid = FALSE;
			}
			if (empty($firstName=$_POST["firstname"])){
				$firstNameErr = "First Name is required";
				$valid = FALSE;
			}
			else if (!preg_match("/^[a-zA-Z]*$/",$firstName)){
				$firstNameErr = "Only letters in First Name";
				$valid = FALSE;
			}
			if (empty($lastName=$_POST["lastname"])){
				$lastNameErr = "Last Name is required";
				$valid = FALSE;
			}
			else if (!preg_match("/^[a-zA-Z]*$/",$lastName)){
				$lastNameErr = "Only letters in Last Name";
				$valid = FALSE;
			}


			
 		$until = TRUE;
		} 
		if ($valid&&$until){
			echo "<script type='text/javascript'>window.location.href = 'http://yahoo.com';</script>";
        	//exit();
		}
	?>


	

	
		<ul>
			<li class="menu"><a class="active" href="index.html">Home</a></li>
			<li class="menu"><a href="contact.html">Contact</a></li>
			<li class="menu"><a href="#about">About</a></li>
		</ul>
		
		
		<form action="" method="post">
			<ol type = "1" style="list-style-type:none">
					
				<div>
					<div class="left"><li>UserName:</li></div>
					<div class="right"><input class="text" type="text" name="username" value="<?php print $userName;?>">
						<span> * <?php print $userNameErr ?></span></div>
				</div>
				
				<div>
					<div class="left"><li>First Name:</li></div>
					<div class="right"><input class="text" type="text" name="firstname" value="<?php print $firstName;?>">
						<span> *  <?php //print $firstNameErr ?> </span></div>
				</div>
				
				<div>
					<div class="left"><li>Last Name:</li></div>
					<div class="right"><input class="text" type="text" name="lastname" value="<?php print $lastName;?>">
						<span> * <?php //print $lastNameErr ?></span></div>
				</div>
				
			
			
			
			
		
				<div>
					<div class="left"><li>Address:</li></div>
					<div class="right"><input class="text" type="text" name="address"></div>
				</div>
				
				<div>				
					<div class="left"><li>City:</li></div>
					<div class="right"><input class="text" type="text" name="city"></div>
				</div>
					
				<div>	
					<div class="left"><li>State:</li></div>
					<div class="right"><input class="text" type="text" name="state"></div>
				</div>
	

		
				<div>
					<div class="left"><li>e-mail:</li></div>
					<div class="right"><input class="text" type="text" name="email"></div>
				</div>
				
				<div>
					<div class="left"><li>Conact number:</li></div>
					<div class="right"><input class="text" type="text" name="phone">
						<span> * <?php print $contactErr ?></span></div>
				</div>
				

				<div>
					<div class="left"><li>Password:</li></div>
					<div class="right"><input class="text" type="text" name="password">
						<span> * <?php print $passwordErr ?></span></div>
				</div>
				
				<div>
					<div class="left"><li>Confirm Password:</li></div>
					<div class="right"><input class="text" type="text" name="confpass"><span> *</span></div>
				</div>
				
			
			</ol>

			<div>
				<div class="left"><input class="finish" type="submit" value="Finish" style="text-align:center;"></div>
				<div class="right"><a href="login.html"><input type="reset" value="Cancel"></a></div>
			</div>
		</form>
	<div>
		<?php 
			//var_dump($valid);
			//print "<br>$userName" ; 
		?>

		
	</div>


	</body>	

</html>

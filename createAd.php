<?php
	session_start();
	$infoProvide = FALSE;
	$imgProvide = FALSE;
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="GET"){
		if(isset($_POST["submit"]){
			echo "hi"
		}

	}
?>



<html>
	<head>
		<link type="text/css" rel="stylesheet" href="createAdstyle.css"/>
		<meta charset="UTF-8">

	</head>
	
	<body>
	
		<ul>
			<li class="menu"><a class="active" href="index.html">Home</a></li>
			<li class="menu"><a href="#contact">Contact</a></li>
			<li class="menu"><a href="#about">About</a></li>
		</ul>
		<div>
			<?php
				//testing only
				echo($_SESSION["userName"]); 
			?>
		</div>
		
		<form action="" method="POST" class="image">
			<p>Upload image</p>
			<input type="file" name="pic" accept="image/*">
			<div><input type="submit" value="Upload" name="submit"class="button"/></div>
		</form>
		
		<ol type="1">
			
		
			<form action="">
				<li>Vehicle Make: <div><input type = "text" class = "textbox" name="make"></div></li>
				<li>Vehicle Model: <div><input type = "text" class = "textbox" name="model"></div></li>
				<li>Vehicle Year: <div><input type = "text" class = "textbox" name="year"></div></li>
				<li>Mileage: <div><input type = "text"  class = "textbox" name="miles"></div></li>
				<li>Vehicle Price: <div><input type = "text" class = "textbox" name="price"></div></li>
				<li>Vehicle Color: <div><input type = "text" class = "textbox" name="color"></div></li>
				<input type="submit" value="Submit" class="button"/>
			</form>
			
			
		</ol>
		
		
		
	</body>

</html>

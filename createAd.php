<?php
	session_start();
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$makeErr = $modelErr = $yearErr = $mileageErr = $priceErr =$colorErr = "";
		$make = $model = $year =$mileage = $price = $color = "";
		$valid = TRUE;
		$withImg = FALSE;
		
		if (empty($make=trim($_POST["make"]))){
			$makeErr = "* Make info required";
			$valid = FALSE;
		}

		if (empty($model=trim($_POST["model"]))){
			$modelErr = "* Model info required";
			$valid = FALSE;
		}

		if (empty($year=trim($_POST["year"]))){
			$yearErr = "* Year info required";
			$valid = FALSE;
		}
		else if (!preg_match("/^[0-9]*$/",$year)){
			$yearErr = "* Only Integer";
			$valid = FAlSE;
		}

		if (empty($mileage=trim($_POST["mileage"]))){
			$Err = "* Mileage info required";
			$valid = FALSE;
		}
		else if (!preg_match("/^[0-9]*$/",$mileage)){
			$mileageErr = "* Only Integer";
			$valid = FAlSE;
		}

		if (empty($price=trim($_POST["price"]))){
			$priceErr = "* Price info required";
			$valid = FALSE;
		}
		else if (!preg_match("/^[0-9]*$/",$price)){
			$priceErr = "* Only Integer";
			$valid = FAlSE;
		}

		if (empty($color=trim($_POST["color"]))){
			$colorErr = "* Color info required";
			$valid = FALSE;
		}

		if($valid){
			include("database_connect.php");
			$sql = "INSERT INTO  Car (Price, Makes, Models, Miles, Color, Year) 
				VALUES ($price, \"$make\", \"$model\", $mileage, \"$color\", $year);";
			$conn->query($sql);
			
			$last_id = $conn->insert_id;
			$username = $_SESSION['userName'];
			$sql = "INSERT INTO ID (SellerID, CarID) VALUES (\"$username\", $last_id);";
			$conn->query($sql);
			

			$conn->close();
		}
		
		
		if($_FILES['image']['tmp_name']){
			$imgErr="";
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
			//only jpg for now
			$expensions= array("jpg");
			
			if(in_array($file_ext,$expensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}
			
			if($file_size > 2097152){
				$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"images/".$file_name);
				echo "Success";
			}
			else{
				print_r($errors);
			}
		
		}
		



	}
?>


<html>
	<head>
		<link type="text/css" rel="stylesheet" href="createAdstyle.css"/>
		<meta charset="UTF-8">
		<style>
			.err{color:red;}
		</style>

	</head>
	
	<body>
	
		<ul>
			<li class="menu"><a class="active" href="index.html">Home</a></li>
			<li class="menu"><a href="#contact">Contact</a></li>
			<li class="menu"><a href="#about">About</a></li>
		</ul>

		
			<form action="" method="POST" enctype="multipart/form-data">
				
				<ol type="1">

				<li>Vehicle Make: 
					<div><input type = "text" class = "textbox" name="make" value="<?php print($make); ?>">
						<span class="err"><?php print($makeErr); ?></span>
					</div>
				</li>
				<li>Vehicle Model: 
					<div><input type = "text" class = "textbox" name="model" value="<?php print($model); ?>">
						<span class="err"><?php print($modelErr); ?></span>
					</div>
				</li>
				<li>Vehicle Year: 
					<div><input type = "text" class = "textbox" name="year" value="<?php print($year); ?>">
						<span class="err"><?php print($yearErr); ?></span>
					</div>
				</li>
				<li>Vehicle Mileage: 
					<div><input type = "text"  class = "textbox" name="mileage" value="<?php print($mileage); ?>">
						<span class="err"><?php print($mileageErr); ?></span>
					</div>
				</li>
				<li>Vehicle Price:
					<div><input type = "text" class = "textbox" name="price" value="<?php print($price); ?>">
						<span class="err"><?php print($priceErr); ?></span>
					</div>
				</li>
				<li>Vehicle Color: 
					<div><input type = "text" class = "textbox" name="color" value="<?php print($color); ?>">
						<span class="err"><?php print($colorErr); ?></span>
					</div>
				</li>
				
				<li>Image: 
					<div>
						<input type="file" name="image">
					</div>
				</li>
				<div>
				
					<input type="submit" value="Submit" name="submit" class="button"/>
				</div>
				</ol>
			</form>
			
			
		</ol>
		<div>
			<?php
				//testing only
				echo($_SESSION["userName"]); 
			?>
		</div>
		
		
		
	</body>

</html>

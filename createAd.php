<?php
	session_start();
	$imgErr="";
?>

<?php
	if(isset($_POST["submitpic"])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    		if($check !== false) {
    			echo "File is an image - " . $check["mime"] . ".";
        		$uploadOk = 1;
    		} 
	    	else {
	        	echo "File is not an image.";
	        	$uploadOk = 0;
	    	}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
    		$imgErr = "Sorry, your file was not uploaded.";		
		} 
		// if everything is ok, try to upload file
		else {
    		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    		}
    		else {
        		echo "Sorry, there was an error uploading your file.";
			}
		}
	}
?>

<?php
	if(isset($_POST["submit"])){
		$makeErr = $modelErr = $yearErr = $mileageErr = $priceErr =$colorErr = "";
		$make = $model = $year =$mileage = $price = $color = "";
		$valid = TRUE;
		
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
		<div>
			<?php
				//testing only
				echo($_SESSION["userName"]); 
			?>
		</div>
		
		<form action="" method="POST" enctype="multipart/form-data" class="image">
			<p>Upload image</p>
			<input type="file" name="fileToUpload">
			<div><input type="submit" value="Upload" name="submit" class="button"/></div>
			<span><?php print($imgErr); ?></span>
		</form>
		
		<ol type="1">
			
		
			<form action="" method="POST">
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
				<input type="submit" value="Submit" name="submit" class="button"/>
			</form>
			
			
		</ol>
		
		
		
	</body>

</html>

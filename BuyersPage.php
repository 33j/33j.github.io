<?php
	session_start();
	$_SESSION["order"]="DESC";
	$_SESSION["column"]="Year";
?>

<?php
	if (isset($_POST["sort"])){
		if ($_POST["sort"]==="highPrice"){
			$_SESSION["order"]="DESC";
			$_SESSION["column"]="Price";
		}
		else if ($_POST["sort"]==="lowPrice"){
			$_SESSION["order"]="ASC";
			$_SESSION["column"]="Price";
		}
		else if ($_POST["sort"]==="new"){
			$_SESSION["order"]="DESC";
			$_SESSION["column"]="Year";
		}
		else if ($_POST["sort"]==="old"){
			$_SESSION["order"]="ASC";
			$_SESSION["column"]="Year";
		}
		else if ($_POST["sort"]==="highMile"){
			$_SESSION["order"]="DESC";
			$_SESSION["column"]="Miles";
		}
		//last option i.e lowMile
		else{
			$_SESSION["order"]="ASC";
			$_SESSION["column"]="Miles";
		}
	}
?>



<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="carstyles.css"/>
<style>
	.car{height:30%; background-color:rgba(255,255,255,0.5);}
	.carInfo{height:100%; width:50%; background-color:red; float:left; text-align: center; font-size: 20px;}
	.carImg{height:100%; width:50%; background-color:yellow; float:right; text-align: center;}
</style>
<title>Cars homepage</title>
</head>
<body>
	<center>
		<div class="container-fluid ">
		<div class="jumbotron">
			<h1>
				Buyers Page
			</h1>
		</div>
		</div>

	</center>
	
	<div>
		<form action="" method="POST">
			<label for="sort">Sort Option</label>
			<select name="sort">
				<option value="highPrice">Highest Price</option>
				<option value="lowPrice">Lowest Price</option>
				<option value="new">Newest</option>
				<option value="old">Oldest</option>
				<option value="highMile">Highest Mileage</option>
				<option value="lowMile">Lowest Mileage</option>
			</select>
				
			<input type="submit">
		</form>
	</div>

		
<?php
	//$sql = "SELECT Car.*, image.Image FROM Car LEFT JOIN image ON Car.CarID=image.CarID ORDER BY ".$_SESSION["column"]. " ".$_SESSION["order"].";";
	//echo $sql;
	
	include("database_connect.php");
	//include("database_connect2.php");
	$sql = "SELECT Car.*, image.Image FROM Car LEFT JOIN image ON Car.CarID=image.CarID ORDER BY ".$_SESSION["column"]. " ".$_SESSION["order"].";";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {

	// output data of each row
	while($row = $result->fetch_assoc()) {
		//image path
    	$imgpath="images/".$row["Image"].".jpg";

		echo "<div class='car'>";

		echo "<div class='carImg'>";
		echo "<img src='$imgpath' style='height:80%;'>";
		echo "</div>";

		echo "<div class='carInfo'>";
		echo "Make: ".$row['Makes']."<br> Model: ".$row['Models']."<br>Year:".$row["Year"]."<br>Mileage: ".$row["Miles"]."<br>Color: ".$row["Color"]."<br>Price: ".$row["Price"];
		echo "</div>";

		echo "</div>";
		echo "<br>";
    }
    

	}

	$conn->close();


?>


<div>
<?php 

?>
</div>







</body>

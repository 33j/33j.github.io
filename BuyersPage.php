<DOCTYPE! html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="carstyles.css"/>
<title>
Cars homepage</title>
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

		
<?php
	include("database_connect.php");
	//include("database_connect2.php");
	$sql = "SELECT Car.*, image.Image FROM Car LEFT JOIN image ON Car.CarID=image.CarID;";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	// output data of each row
    while($row = $result->fetch_assoc()) {
    		//$carID=$row["CarID"];
    	//$sql2 = "SELECT Image FROM Car WHERE CarID='$carID';";
    	//$result2 = $conn2->query($sql2);
    	$imgpath="images/".$row["Image"].".jpg";
        echo "<div style='height:30%; background-color:rgba(255,255,255,0.5);'>Make: ".$row['Makes']." Model: ".$row['Models']
        ." Year:".$row["Year"]." Mileage:".$row["Miles"]." Color:".$row["Color"]." Price:".$row["Price"]. 
        "<br><img src='$imgpath' style='height:80%;'>"."</div><div style='height:5%';></div>";
    }

}

	$conn->close();
?>


<div>
<?php 

?>
</div>







</body>

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
	<form action="logout.php">
		<input type="submit" value="logout"/>
	</form>
	<p style="font-size:50px; text-align:center;"> Welcome <?php echo($_SESSION["userName"]); ?> </p>
	</div>

	

	<div style="height:auto; content:""; display:table">
div 1
		<a style="display:block; width:20%; margin:auto;" href="createAd.php"><img style="width:100%;" alt="Click to post" src="AddProduct.png"/></a>
		<a style="display:block; width:20%; margin:auto;" href="createAd.php"><img style="width:100%;" alt="Remove Product" src="RemoveProduct.png"></a>
		<a style="display:block; width:20%; margin:auto;" href="contact.html"><img style="width:100%;" alt="Contact Us" src="ContactUs.png"></a>
	</div>
	
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


	</body>

</html>

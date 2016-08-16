
<?php



?>


<html>
<body>

<form action="" method="post">
   post:
    <input type="text" name="text" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit1">
</form>

<form action="" method="post">
    get:
    <input type="text" name="text" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit2">
</form>

<div>
	<?php
	static $what="";
	if(isset($_POST["submit1"])) {
		$what="yolo";
		echo "yes1";
	}
	if(isset($_POST["submit2"])) {
		//$what="yolo2";
		echo $what;
	}
	?>

</div>

</body>
</html>



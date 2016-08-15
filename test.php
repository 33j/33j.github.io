<?php
include("database_connect.php");
$sql = "SELECT * FROM Seller WHERE SellerID = 'username';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['PassWord'];
$conn->close();

?>



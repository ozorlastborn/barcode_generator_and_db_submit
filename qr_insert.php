<?php
//how to create the table in php
$servername = "localhost";
$username = "ozor";
$password = "test";
$dbname = "qrCode";

$conn = mysqli_connect($servername, $username, $password, $dbname); //creating connection.
//checking connection
if (!$conn) {
	die("connection failed:" . mysqli_connect_error());	
}
//sql to instert multile into a table(myGuests) under myDB database
$sql = "INSERT INTO myQR ( bar)
VALUES ('ben');";
$sql = "INSERT INTO myQR ( bar)
VALUES ('toyota');";
$sql = "INSERT INTO myQR ( bar)
VALUES ('ford');";

// for mutiple input 
if (mysqli_multi_query($conn, $sql)) {
	echo "new records created successfully";
}else {
	echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
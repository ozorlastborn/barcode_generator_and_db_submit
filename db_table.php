
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
//sql to create a table(myGuests) under myDB database
$sql = "CREATE TABLE myQr(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	bar VARCHAR(30) NOT NULL,
	barcode VARCHAR(30),	
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
	echo "Table myQr created successfully";
}else {
	echo "Error creating database:" . mysqli_error($conn);
}
mysqli_close($conn);
?>
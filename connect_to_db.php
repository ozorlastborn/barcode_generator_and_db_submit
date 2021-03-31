<!-- this connect to your localhost server -->


<?php
//how to connect to database server
$servername = "localhost";
$username = "ozor";
$password = "test";
$conn = new mysqli($servername, $username, $password); //creating connection.
//checking connection
if ($conn->connect_error) {
	die("connection failed:" . $conn->connect_error);	
}
echo "connection successfully";
?>
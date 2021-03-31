<!-- db create -->


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
//create database
$sql = " CREATE DATABASE qrCode";
if ($conn->query($sql)=== TRUE) {
	echo "Database created successfully";
}else {
	echo "Error creating database:" . $conn->error;
}
$conn->close();
?>
 <!-- this inserts the details to the db table -->



 <?php
//how to selete data from a sql database
$servername = "localhost";
$username = "ozor";
$password = "test";
$dbname = "qrCode";
$conn = mysqli_connect($servername, $username, $password, $dbname); //creating connection.
//checking connection
if (!$conn) {
	die("connection failed:" . mysqli_connect_error());	
}


$sql = "INSERT INTO myQr (bar)

     VALUES ( '$_POST[bar]' )";

    if (mysqli_multi_query ($conn, $sql)) {
     echo "Thanks You For Buying";
}
    	
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
// header("location:/interview1/index.php");
?>

<!-- type http://localhost/interview1/qrcode_check.php on your browser to get the details for db -->


<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
   table{
   	width: 80%;
   	border-color: green;
      margin-bottom: 30px;
   }
   th{
   	height: 50px;
   }
   th,td{
   	padding: 10px;   
   	}
    table, th, td {
			border: 1px solid green;
			margin-left:50px;
			margin-top: 50px;			 			
		}     

    </style>
   
        <div class="sub">
        	
<?php

//how to create the table in php
$servername = "localhost";
$username = "ozor";
$password = "test";
$dbname = "qrCode";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

$sql = "SELECT id, bar, reg_date FROM myqr /* the where clause fetches out a particular conditon from the table either by decending or assending order*/ ORDER BY id DESC"; //or ASC 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Bar</th><th>Buying Date</th></tr>";

    //output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["id"] . " </td><td>". $row["bar"]. " </td><td>" . $row["reg_date"]. "</td></tr>";
        
    }
echo "</table>";

}else{
    echo "0 results";
}

$conn->close();

?>
</div>
         
</body>
</html>

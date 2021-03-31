<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>My Interview Test</title>
</head>
<body>

	 <form class="test" action="qrcode1.php" method="post" onsubmit="generateQR()" >

		<div class="test1">
			<img src="images/Gadgets.jpg">
			<h2>A Nice Gadgets For Your Occasion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore.</p>
			<span>
				<input class="btn" type="text" id="qr-data" name="bar" placeholder="fill in your choice here" >		
				<div id="qrcode" name="barcode"></div>
			</span>			
		</div>		
	</form>

    <script src="js/qrcode.js"></script>     
       <script src="js/qrReader.js"></script>	 

</body>
</html>

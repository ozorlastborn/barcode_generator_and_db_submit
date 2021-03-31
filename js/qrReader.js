var qrdata = document.getElementById('qr-data');
	var qrcode = new QRCode(document.getElementById('qrcode'));

	function generateQR() {
		var data = qrdata.value;

		qrcode.makeCode(data);
		qrcode.append('<br><strong>'+data+'</strong');

		data.keyup(generateQR);
		data.change(generateQR);

		// alert(data)
	}


	
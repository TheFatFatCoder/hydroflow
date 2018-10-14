<?php
	if (!empty($_POST['inputName']) && !empty($_POST['inputEmail']) && !empty('inputSubject')) {
		$receiverEmail = "veronica.natashiaa@gmail.com";
		$senderName = $_POST['inputName'];
		$senderEmail = "From: " . $_POST['inputEmail'];
		$senderSubject = $_POST['inputSubject'];
		$senderMessage = $_POST['inputMessage'];

		//mail(to, subject, txt, header)
		mail($receiverEmail, $senderSubject, $senderMessage, $senderEmail);

		$response = "Success";
	}else{
		$response = "Error";
	}
	

	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
</head>
<body>
	<?php echo $response; ?>
</body>
</html>
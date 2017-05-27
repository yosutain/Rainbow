<html>
	<head>
		<?php
			include 'connect.php';
		?> 

		<title>Index</title>
		<!-- BootStrap -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/Style.css">

		<!-- JS -->	
		<script src="js/Script.js"></script>
	</head>

	<body>
		<?php
			$sql = "INSERT INTO contact (Email, Topic, Subject, Message)
			VALUES ('".$_POST['contactEmail']."','".$_POST['contactTopic']."','".$_POST['contactSubject']."','".$_POST['contactMessage']."')";
			if ($db->query($sql) === TRUE) {
				echo "Message Sent";
			} else {
				echo "Message Sent";
			}
		?>

		<?php
			$contactEmail = $_POST['contactEmail'];
			$contactTopic = $_POST['contactTopic'];
			$contactMessage = $_POST['contactMessage'];
			$subject = $_POST['contactSubject'];
			$to = 'EMAIL';
			$message = '
			<html>
			<head>
			  <title>'.$contactTopic.'</title>
			</head>
			<body>
				<p>Category: '.$contactTopic.'</p>
				<p>Email: '.$contactEmail.'</p>
				<p>Message: '.$contactMessage.'</p>
			</body>
			</html>
			';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: RainbowUser '.$contactEmail.' <'.$contactEmail.'>' . "\r\n";
			mail($to, $subject, $message, $headers);
		?>
		
		<a class="list-group-item" href="index.html">Back</a>
	</body>
</html>
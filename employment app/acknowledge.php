<?php 

if (isset($_POST["send"])) {
	
	$to = 'it@panhandlerestaurantservices.com'; //email recipient 
	$subject = 'Application for Employment';
	$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
	$message .= 'Date: ' . $_POST['date'] . "\r\n\r\n";
	$message .= 'Present Address: ' . $_POST['address'] . "\r\n\r\n";
	$message .= 'Length at present address: ' . $_POST['lengthAddress'] . "\r\n\r\n";
	$message .= 'Social Security: ' . $_POST['ssn'] . "\r\n\r\n";
	$message .= 'Telephone number: ' . $_POST['telephone'] . "\r\n\r\n";
	$message .= 'Age if under 18: ' . $_POST['age'] . "\r\n\r\n";
	$message .= 'Position applied for: ' . $_POST['position'] . "\r\n\r\n";
	$message .= 'Salary desired: ' . $_POST['salary'] . "\r\n\r\n";
	$message .= 'Days/hours available to work: ' . $_POST['nopref'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Employment Desired: ' . $_POST['emType'] . "\r\n\r\n";
	$message .= 'Employment Application: ' . $_POST['employment'] . "\r\n\r\n";
	$headers = "From: noReply@panhandlerestaurantservices.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ($email) {
		$headers .= "\r\nReply-To: $email";
	}

	$success = mail($to, $subject, $message, $headers); 


}





?>
<!DOCTYPE html>
<!--
	Career Page for Panhandle Restaurant Services by Joshua Wilson
	Using CSS provided by HTML5 UP and Photon

-->
<html>
<head>
	<title>Thank you!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	
</head>
<body>

	<!--Header-->
		
	<!--Application Body-->



	<div id="message" style="
	display: inline-block;
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0; 
	right: 0; 
	width: 200px;
	height: 100px;
	margin: auto; 
	background-color: lightorange;">

	
	<h1>Thank You</h1>
		<p>Your application has been sent! We will contact you shortly. </p>
		
	

</div>
</body>		
</html>
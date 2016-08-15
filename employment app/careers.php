<?php 

if ($_POST["submit"]) {
	$recipient="it@panhandlerestaurantservices.com";
	$subject="Employment Application";
	$sender=$_POST["sender"];
	$senderEmail=$_POST["applicant@panhandlerestaurantservices.com"];
	$message=$_POST["message"];

	$mailBody="Full Name: $sender\n Contact Email: \n\n$message";

	mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

		$thankYou="<p>Thank you! Your application is under review! We will call you shortly!</p>";
}



?>
<!DOCTYPE html>
<!--
	Career Page for Panhandle Restaurant Services by Joshua Wilson
	Using CSS provided by HTML5 UP and Photon

-->
<html>
<head>
	<title>Careers | Panhandle Restaurant Services</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1"/>
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

	<!--Header-->
		<section id="header">
			<div class="inner">
				<div style="background-color:white;   width: 121%;   margin-left: -10%;">

				<img src="https://irp-cdn.multiscreensite.com/08fd31d2/dms3rep/multi/desktop/panhandlerestaurant-464x96.gif">
			</div>
				<h1>Welcome to the Career Page for Panhandle Restaurant Services</h1>
					<br>
				<h2>Please fill out the application to the best of your ability and then submit it for review! We appreciate your interest in working with us.</h2>

					<form method="post" action="careers.php">
						<label>Full Name:</label>
						<input type="text" name="applicantName">

						<label>Contact Email:</label>
						<input type="email" name="applicantEmail">

						<label>Employment History-10 years:</label>
						<textarea rows="20" cols="20" name="employmentHistory"></textarea>
						<input type="submit" name="submit" <?php echo $thankYou ?>
					</form>

</body>
</html>
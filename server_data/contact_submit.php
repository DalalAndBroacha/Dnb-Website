<?php 
//print_r($_POST);
if(isset($_POST["Name"])) {
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$phone = $_POST["Phone"];
	$message = $_POST["Message"];
	
	$mailbody  = "This is an inquiry from the website\r\r";
	$mailbody .= "Name: " . $name . "\r";
	$mailbody .= "Email: " . $email . "\r";
	$mailbody .= "Phone: " . $phone . "\r";
	$mailbody .= "Message: " . $message . "\r";
	$mailbody .= "\r";
	
	// $address = "admin@irinfo.in,aditigandhi.ccs@gmail.com,anishaa@colourcraftstudio.co.in";
	// $address = "thewebdepot@gmail.com";
	$address = "nilay.dalal@dalal-broacha.com, hriday.dalal@dalal-broacha.com";
	$subject = "Inquiry from website";
	
	$mailsuccess = mail( "$address", "$subject", "$mailbody", "From: {$email}");

	if($mailsuccess == true) {
		echo $confirm = "<img src='images/tick.gif' alt='Success' /> Your inquiry has been successfully sent.";
	}
	else {
		echo $confirm = "There was an error sending your inquiry. Please try again.";
	}

}
?>
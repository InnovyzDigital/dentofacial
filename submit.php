<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST["name"])){
$name=$_POST['name'];
$phone=$_POST['phone1'];
$email=$_POST['email1'];
$date=$_POST['date'];
$time=$_POST['time'];
$message=$_POST['message'];


	
	$from = 'info@dentofacial.com';
	$to = 'abhijithsbwork@gmail.com';
	// $Cc = 'sharon.r@garcorp.in,richa.n@garcorp.in,latika.c@garcorp.in';
	// $Bcc = 'leads@analysedigital.com';
	$subject = 'Book Appointment Enquiry - LP - Dentofacial ';
	$message = "Name: " .$name ."\r\nEmail: " . $email. "\r\nPhone: " . $phone."\r\nDate: " . $date."\r\nTime: " . $time. "\r\nMessage: " . $message;
	$headers = "From:" . $from."\r\n";
	// $headers .= "Cc:" . $Cc."\r\n";
	// $headers .= "Bcc:" . $Bcc."\r\n";
	$val = mail($to,$subject,$message,$headers);
	// echo 'Status: '.$val;
	$emailSent = true;
	if($val==1){
		echo "<h5>Thank You for contacting us. We will get back to you soon</h5>";
	
}
}

?>
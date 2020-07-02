<?php

    $frommail = $_GET['email'];
	$to = "mutha.am16@gmail.com";
	$subject = "Support : ";
	/*$phone = $_GET['phone'];*/
	$msg = $_GET['message'];
	$headers = "From:{$frommail}";
	mail($to,$subject,$msg,$headers);
	print("Sent Successfully");
	
?>
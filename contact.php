<?php
 $to = 'srivastavavarnita78@gmail.com';
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
	$from = $_REQUEST["mail"];
	$subject = $_REQUEST["sub"];
    $message = $_REQUEST["mesg"];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Contact Us";
			
    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    
    
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>First Name:</strong> {$fname}</td>";
    $body .= "<td style='border:none;'><strong>Last Name:</strong> {$lname}</td>";


	$body .= "<td style='border:none;'><strong>Subject:</strong> {$subject}</td>";
	
	
 	$body .= "</tr>";
		$body .= "<td style='border:none;'><strong>message:</strong> {$message}</td>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    
    
    $send = mail($to, $subject, $body, $headers);
	echo "<alert> Suucessfully submitted</alert>";
    header("Location: index.html");
    
 ?>
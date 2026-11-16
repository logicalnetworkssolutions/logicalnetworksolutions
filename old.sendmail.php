<?php 
$ToEmail = 'contact@logicalnetworksolutions.com'; 
$ToEmail1 = 'nishantluhar@gmail.com'; 
$EmailSubject = 'New Inquiry at Logical Network Solutions'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY .= "Contact Person : ".$_POST["person"]."<br>"; 
$MESSAGE_BODY .= "Email : ".$_POST["email"]."<br>";
$MESSAGE_BODY .= "Subject : ".$_POST["subject"]."<br>";
$MESSAGE_BODY .= "Message : ".nl2br($_POST["message"])."<br>";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
mail($ToEmail1, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: index.html");
?>
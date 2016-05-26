<?php 
$to = "admin@mohitgoenka.com"; 
$name = $_REQUEST['name'] ; 
$email = $_REQUEST['email'] ; 
$category = $_REQUEST['category'] ; 
$sub = $_REQUEST['subject'] ; 
$subject = "Mail from my website: $category - $sub"; 
$message = $_REQUEST['message'] ; 
$headers = "From: \"$name\" <$email>"; 
if($message && $name && $email)
{$sent = mail($to, $subject, $message, $headers) ; }
if($sent) 
{echo "<meta http-equiv='refresh' content='0;url=Comment_Submitted.php#Comments'>";}
else 
{echo "<meta http-equiv='refresh' content='0;url=Comment_Not_Submitted.php#Comments'>";}
?>
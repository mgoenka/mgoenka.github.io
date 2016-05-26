<?php 
$to = "admin@mohitgoenka.com"; 
$name = $_REQUEST['name'] ; 
$email = $_REQUEST['email'] ; 
$subject = "Mail from my website: Mailing List"; 
$message = "Join Mailing List"; 
$headers = "From: \"$name\" <$email>"; 
if($message && $name && $email)
{$sent = mail($to, $subject, $message, $headers) ; }
if($sent) 
{echo "<meta http-equiv='refresh' content='0;url=mailingList_Submitted.php#Join'>";}
else 
{echo "<meta http-equiv='refresh' content='0;url=mailingList_Not_Submitted.php#Join'>";}
?>
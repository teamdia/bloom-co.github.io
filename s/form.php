<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'teamdiamond00s@gmail.com';

$email_from=  'New Form Submission';

$email_from=  "User Name= $name.\n".
               "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                  "User message: $message .\n";

$to = 'shekkylar18@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)  ;               

header("Location:contact.html");

?>
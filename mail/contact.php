<?php
if(empty($_POST['name']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "maliwanagallysa@gmail.com"; // Change this email to your //
$subject = "$email_name:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\n Message: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $body, $header))
  http_response_code(500);
?>

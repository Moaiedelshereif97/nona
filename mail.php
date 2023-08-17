<?php
$name = $_POST['name'];
$email = $_POST['email'];
$Phone = $_POST['subject'];
$message = $_POST['message'];
$to = "massagenona1@gmail.com";
$subject = "Mail from website";
$txt = "name = " . $name . "\r\n email = " . $email . "\r\n message = " . $message;
$header = "youssifwaleed30@gmail.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $header);
}
header("location:contact.html");
?>
<!--  -->
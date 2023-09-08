<?php
session_start();
$errorMSG = "";

$name    = $_POST["name"];
$email   = $_POST["email"];
$message = $_POST["message"];

// CSRF token check
if(empty($_SESSION["csrfToken"]) || ($_SESSION["csrfToken"] !== $_POST["csrfToken"])) {
    $errorMSG .= "Invalid Token ";
}

// NAME
if (empty($name)) {
    $errorMSG .= "Name is required ";
}

// EMAIL
if (empty($email)) {
    $errorMSG .= "Email is required ";
}

// MESSAGE
if (empty($message)) {
    $errorMSG .= "Message is required ";
}

// change email with your email
$emailTo = "hellothemetags@gmail.com";
$subject = "Hostlar:: New Message Received from contact";

// prepare email body text
$emailBody = "";
$emailBody .= "Name: ";
$emailBody .= $name;
$emailBody .= "\n";
$emailBody .= "Email: ";
$emailBody .= $email;
$emailBody .= "\n";
$emailBody .= "Message: ";
$emailBody .= $message;
$emailBody .= "\n";

// send email
if(empty($errorMSG)) {
    if (mail($emailTo, $subject, $emailBody, "From:".$email)){
        echo "success";
    }
} 
else{
    echo $errorMSG;
}

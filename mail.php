<?php

$recepient = "naninarendra1506@gmail.com";
$sitename = "My Portfolio";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $email \nText: $text";

$pagetitle = "New message from the \"$sitename\"";
if(mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient")) {
    echo "Mail sent successfully";
} else {
    echo "Error: " . error_get_last()['message'];
}

?>

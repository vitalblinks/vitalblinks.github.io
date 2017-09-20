<?php

if($_POST["submit"]) {
    $recipient="12345rockbell@gmail.com";
    $subject="Form Submission for Vitalblinks";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["fullname"];
    $message=$_POST["phone"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
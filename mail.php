<?php
$to = "rauniyarbind@gmail.com";
$subject = "Response from websites";
$message = "iam very thankful";
$headers = "From: rauniyarbind@gmail.com";


if(mail($to, $subject, $message, $headers)){
    echo "we have received your submittion";
}
else {
    "sorry, could not process submittion";
}
?>
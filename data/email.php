<?php
$to      = $_POST["to"];
$message = $_POST["message"];
$subject = $_POST["subject"];
$from    = $_POST["from"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: ' . $from . "\r\n";
mail($to, $subject, $message, $headers);
echo "Success (well we'll just say its successful)";
?>
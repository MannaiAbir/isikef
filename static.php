<?php
session_start();
$code = rand(1000, 9999); // Generate a random 4-digit code
$_SESSION['security_code'] = $code; // Store the code in a session variable
?>

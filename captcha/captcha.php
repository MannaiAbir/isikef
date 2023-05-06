<?php
session_start();
header('Content-Type: image/png');

$code = $_SESSION['security_code'];

$image = imagecreate(100, 50); // Create a new image
$bg_color = imagecolorallocate($image, 255, 255, 255); // Set the background color to white
$text_color = imagecolorallocate($image, 0, 0, 0); // Set the text color to black

// Draw the security code on the image
imagettftext($image, 20, 0, 10, 30, $text_color, 'arial.ttf', $code);

// Output the image to the browser
imagepng($image);
imagedestroy($image);
?>

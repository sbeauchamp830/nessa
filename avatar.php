<?php
// List your exact image filenames here
$images = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg');

// Pick a random image from the list
$randomImage = $images[array_rand($images)];

// Send a header to the browser telling it this IS a real JPEG image
header('Content-Type: image/jpeg');

// Read and output the image file directly
readfile($randomImage);
exit;
?>

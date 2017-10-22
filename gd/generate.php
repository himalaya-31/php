<?php
header('Content-type: image/jpeg');

$email = 'example@example.com';
$email_length = strlen($email);

$font_size = 4;

$image_height = Imagefontheight($font_size);
$image_width = Imagefontheight($font_size) * $email_length;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: #ffffff">
    text
  </body>
</html>

<?php
//include phpTextToImage class
require_once 'phpTextToImage.php';
//create img object
$img = new phpTextToImage;
//create image from text
$text = 'Welcome to Legend Blogs.\nConvert Text To Image In PHP.';
$img->createImage($text);

header("Content-Type: image/png");

imagepng($img->image);
imagedestroy($img->image);
?>

<?php
//include phpTextToImage class
require_once 'phpTextToImage.php';
//create img object
$img = new phpTextToImage;
//create image from text
$text = $_GET["text"];
$img->createImage($text);

header("Content-Type: image/png");

imagepng($img->image);
imagedestroy($img->image);
?>

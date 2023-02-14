<?php
//include phpTextToImage class
require_once 'phpTextToImage.php';
//create img object
$img = new phpTextToImage;
//create image from text
$text = 'Welcome to Legend Blogs.\nConvert Text To Image In PHP.';
$img->createImage($text);
//display image
$fileName = "legendblogs";
$img->saveAsPng($fileName);

header("Content-Type: image/png");
header("Content-Length: " . filesize($img));

$fp = fopen($img, 'rb');
fpassthru($fp);

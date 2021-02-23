<?php
$widtha =$_GET['width'];
$heighta =$_GET['height'];
$qualitya = $_GET['quality'];

// The file
$filename = $_GET['img'];

// Content type

$type = substr($filename,-3);

	if ($type == "png"){
	echo	header('Content-type: image/png');		
	}else if ($type == "jpg"){
	echo	header('Content-type: image/jpeg');	
	}else if ($type == "gif"){
	echo	header('Content-type: image/gif');		
	}else {return false ;}


// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $widtha;
$new_height = $heighta;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);

		if ($type == "png"){
			$image = imagecreatefrompng($filename);
		}else if ($type == "gif"){
			$image = imagecreatefromgif($filename); 
		}else {
			$image = imagecreatefromjpeg($filename); }
			
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, null, $qualitya);
?>
    view-source:

<?php 
$path =$_GET['imgpath'];
$save =$_GET['imgsave'];
$width =$_GET['width'];
$height =$_GET['height'];

function create_thumbnail($path, $save, $width, $height) {
	
	$info = getimagesize($path);	
	$siza = array($info[0], $info[1]);
	
	if ($info['mime'] == 'image/png'){
		$src = imagecreatefrompng($path);		
	}else if ($info['mime'] == 'image/jpeg'){
		$src = imagecreatefromjpeg($path);
	}else if ($info['mime'] == 'image/gif'){
		$src = imagecreatefromgif($path);
	}else {return false ;}
	
	$thumb = imagecreatetruecolor($widtha, $heighta);
	
}
?>
<?php
// The file
$filename = $_GET['img'];

// Content type
header('Content-type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = 130;
$new_height = 80;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, null, 100);
?>

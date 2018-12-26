<?php  
if(isset($_FILES['photothumb'])){
	$targetDir = '../../template/assets/images/';
$photo = $_FILES['photothumb'];
$photo_name_cache = $photo['tmp_name'];
$photo_name = $photo['name'];
if(move_uploaded_file($photo_name_cache,$targetDir.$photo_name)){
	$src = substr($targetDir,6);
	echo $src.$photo_name;
}
}
if(isset($_GET['img'])){
	$src = "../../template/assets/images/Capture.PNG";
	$img_r = imagecreatefrompng($src);
	$dst_r = ImageCreateTrueColor( $_GET['w'], $_GET['h'] );
	imagecopyresampled($dst_r, $img_r, 0, 0, $_GET['x'], $_GET['y'], $_GET['w'], $_GET['h'], $_GET['w'],$_GET['h']);
	header('Content-type: image/jpeg');
  	imagejpeg($dst_r);
	exit;
}
?>
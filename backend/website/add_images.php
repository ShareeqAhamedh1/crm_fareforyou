<?php

include 'conn.php';

$pack_id = $_REQUEST['id'] ;

$filePath='other_pack_images/';
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../../multi_images_package.php?id=$pack_id';

uploadImage('image_file',$filePath,$allowedList,$errorLocation);
$fileName = $GLOBALS['fileNameNew'];


$sqlAdd = "INSERT INTO tbl_images (pack_id,image) VALUES ('$pack_id','$fileName')";
$rsAdd = $connWeb->query($sqlAdd);



if($rsAdd > 0){
  header('location:../../multi_images_package.php?id='.$pack_id);
  exit();
}else{
  header('location:../../multi_images_package.php?id='.$pack_id);
  exit();
}


 ?>

<?php

include 'conn.php';

$pack_id = $_REQUEST['pack_id'] ;
$id =$_REQUEST['id'];

$img= getDataBack($connWeb,'tbl_images','im_id',$id,'image');
$path = 'other_pack_images/'.$img;
unlink($path);

$sqlAdd = "DELETE FROM tbl_images WHERE im_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);


if($rsAdd > 0){
  header('location:../../multi_images_package.php?id='.$pack_id);
  exit();
}else{
  header('location:../../multi_images_package.php?id='.$pack_id);
  exit();
}


 ?>

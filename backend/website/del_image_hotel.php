<?php

include 'conn.php';

$h_id = $_REQUEST['h_id'] ;
$id =$_REQUEST['id'];

$img= getDataBack($connWeb,'tbl_hotel_images','hi_id',$id,'hi_image');
$path = 'other_pack_images/'.$img;
unlink($path);

$sqlAdd = "DELETE FROM tbl_hotel_images WHERE hi_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);


if($rsAdd > 0){
  header('location:../../multi_images_package_hotel.php?id='.$h_id);
  exit();
}else{
  header('location:../../multi_images_package_hotel.php?id='.$h_id);
  exit();
}


 ?>

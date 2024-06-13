<?php

include 'conn.php';


$id =$_REQUEST['id'];

$sqlAdd = "DELETE FROM tbl_packages WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);

$sqlAdd = "DELETE FROM tbl_destinations WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);

$sqlAdd = "DELETE FROM tbl_extras WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);

$sqlAdd = "DELETE FROM tbl_hotels WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);

$sqlAdd = "DELETE FROM tbl_includes WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);

$sqlAdd = "DELETE FROM tbl_images WHERE pack_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);


if($rsAdd > 0){
  echo 200;

}else{
  echo 400;

}


 ?>

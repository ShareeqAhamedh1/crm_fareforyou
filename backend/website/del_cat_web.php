<?php

include 'conn.php';


$id =$_REQUEST['del_id'];

$sqlAdd = "DELETE FROM tbl_cat_of_packages WHERE cp_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);


if($rsAdd > 0){
  echo 200;

}else{
  echo 400;

}


 ?>

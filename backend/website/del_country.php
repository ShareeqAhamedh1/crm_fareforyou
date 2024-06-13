<?php

include 'conn.php';


$id =$_REQUEST['id'];

$sqlAdd = "DELETE FROM tbl_country WHERE country_id='$id'";
$rsAdd = $connWeb->query($sqlAdd);


if($rsAdd > 0){
  echo 200;

}else{
  echo 400;

}


 ?>

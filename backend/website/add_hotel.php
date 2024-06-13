<?php

include 'conn.php';


$hotel =$_REQUEST['hotel'];
$pack_id = $_SESSION['pack_insert_id'] ;


$sqlAdd = "INSERT INTO tbl_hotels (pack_id,hotel) VALUES ('$pack_id','$hotel')";
$rsAdd = $connWeb->query($sqlAdd);



if($rsAdd > 0){
  echo json_encode(array('status' => '200'));

}else{
  echo json_encode(array('status' => '400'));

}


 ?>

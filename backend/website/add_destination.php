<?php

include 'conn.php';


$destination =$_REQUEST['destination'];
$pack_id = $_SESSION['pack_insert_id'] ;

echo $pack_title;

$sqlAdd = "INSERT INTO tbl_destinations (pack_id,destination) VALUES ('$pack_id','$destination')";
$rsAdd = $connWeb->query($sqlAdd);



if($rsAdd > 0){
  echo json_encode(array('status' => '200'));

}else{
  echo json_encode(array('status' => '400'));

}


 ?>

<?php

include 'conn.php';


$include =$_REQUEST['include'];
$pack_id = $_SESSION['pack_insert_id'] ;

echo $pack_title;

$sqlAdd = "INSERT INTO tbl_includes (pack_id,include) VALUES ('$pack_id','$include')";
$rsAdd = $connWeb->query($sqlAdd);



if($rsAdd > 0){
  echo json_encode(array('status' => '200'));

}else{
  echo json_encode(array('status' => '400'));

}


 ?>

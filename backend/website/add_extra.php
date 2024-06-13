<?php

include 'conn.php';


$extra =$_REQUEST['extra'];
$pack_id = $_SESSION['pack_insert_id'] ;

echo $pack_title;

$sqlAdd = "INSERT INTO tbl_extras (pack_id,extra) VALUES ('$pack_id','$extra')";
$rsAdd = $connWeb->query($sqlAdd);



if($rsAdd > 0){
  echo json_encode(array('status' => '200'));

}else{
  echo json_encode(array('status' => '400'));

}


 ?>

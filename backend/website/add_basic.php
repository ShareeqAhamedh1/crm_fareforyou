<?php
include 'conn.php';


$pack_title =$_REQUEST['pack_title'];
$pack_price =$_REQUEST['pack_price'];
$pack_cat =$_REQUEST['pack_cat'];
$pack_duration =$_REQUEST['pack_duration'];
$pack_overview =$connWeb->real_escape_string($_REQUEST['pack_overview']);

$uploadDir = 'package_images/';
$uploadPath = $uploadDir . basename($_FILES['pack_image']['name']);

$imagePath = '';

if (move_uploaded_file($_FILES['pack_image']['tmp_name'], $uploadPath)) {
  $imagePath = $uploadPath;
  $sqlAdd = "INSERT INTO tbl_packages (pack_title,pack_overview,duration,price,image,pc_id) VALUES ('$pack_title','$pack_overview','$pack_duration','$pack_price','$imagePath','$pack_cat')";
  $rsAdd = $connWeb->query($sqlAdd);
  if($rsAdd > 0){
    $lastInsertedId = mysqli_insert_id($connWeb);
    $_SESSION['pack_insert_id'] = $lastInsertedId;
    echo 200;

  }else{
    echo 400;

  }
}else {
  $sqlAdd = "INSERT INTO tbl_packages (pack_title,pack_overview,duration,price,pc_id) VALUES ('$pack_title','$pack_overview','$pack_duration','$pack_price','$pack_cat')";
  $rsAdd = $connWeb->query($sqlAdd);
  if($rsAdd > 0){
    $lastInsertedId = mysqli_insert_id($connWeb);
    $_SESSION['pack_insert_id'] = $lastInsertedId;
    echo 200;

  }else{
    echo 400;

  }
}









 ?>

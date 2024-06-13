<?php
include 'conn.php';

$id = $_REQUEST['id'];
$flyFrom =$_REQUEST['flyFrom'];
$flyTo =$_REQUEST['flyTo'];
$priceFrom =$_REQUEST['priceFrom'];
$continent=$_REQUEST['continent'];
$country=$_REQUEST['country'];

$flight_image = $_FILES['flight_image']['tmp_name'];

if($flight_image == ""){
  $sql = "UPDATE tbl_flights SET fly_from='$flyFrom',
                                 fly_to='$flyTo',
                                 fly_price='$priceFrom',
                                 continent_id='$continent',
                                 country_id='$country' WHERE flight_id = '$id'";
}
else {
  $filePath = "flight_images/";
  $allowedList = array('jpg','jpeg','png','webp');
  $errorLocation = "../../add_flight.php";
  uploadImage("flight_image",$filePath,$allowedList,$errorLocation);
  $imagePath = $GLOBALS['fileNameNew'];

  $sql = "UPDATE tbl_flights SET fly_from='$flyFrom',
                                 fly_to='$flyTo',
                                 fly_price='$priceFrom',
                                 flight_image='$imagePath',
                                 continent_id='$continent',
                                 country_id='$country' WHERE flight_id = '$id'";
}

$rs = $connWeb->query($sql);

if($rs == 1){
  echo $sql;
}
else {
  echo $sql;
}











 ?>

<?php
include 'conn.php';


$flyFrom =$_REQUEST['flyFrom'];
$flyTo =$_REQUEST['flyTo'];
$priceFrom =$_REQUEST['priceFrom'];
$continent=$_REQUEST['continent'];
$class=$_REQUEST['alclass'];
$airline=$_REQUEST['airline'];
$country = $_REQUEST['country'];

  $sqlAdd = "INSERT INTO tbl_flights (fly_from,fly_to,fly_price,airline_id,class_id,continent_id,country_id) VALUES
  ('$flyFrom','$flyTo','$priceFrom','$airline','$class','$continent','$country')";
 
  $rsAdd = $connWeb->query($sqlAdd);
  if($rsAdd > 0){
    $_SESSION['flight_added'] = 'true';
    echo 200;

  }else{
    echo 400;
  }










 ?>

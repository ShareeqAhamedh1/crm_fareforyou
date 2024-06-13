<?php 
include 'conn.php';

$country_name=$_REQUEST['country_name'];
$continent=$_REQUEST['continent'];


$sqlAdd="INSERT INTO tbl_country (continent_id,country_name) VALUES ('$continent','$country_name')";
$rsAdd=$connWeb->query($sqlAdd);

if($rsAdd>0){
    $_SESSION['country_added']='true';
    echo 200;
}else{
    $_SESSION['country_not_added']='true';
    echo 400;
}


?>

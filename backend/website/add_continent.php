<?php 

include 'conn.php';
$continent_name=$_REQUEST['continent_name'];

$sqlAdd="INSERT INTO tbl_continent (continent_name) VALUES ('$continent_name')";
$rsAdd=$connWeb->query($sqlAdd);

if($rsAdd>0){
    $_SESSION['continent_added']='true';
    echo 200;
}else{
    $_SESSION['continent_not_added']='true';
    echo 400;
}

?>

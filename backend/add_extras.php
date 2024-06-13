<?php  include 'website/conn.php';

$id = $_SESSION['pack_insert_id'];

$extra=$_REQUEST['e_extra'];

$sql="INSERT INTO tbl_extras (extra,pack_id)
      VALUES ('$extra','$id')";
$rs=$connWeb->query($sql);

if($rs>0){
    echo 200;
    exit;
 }else{
    echo 300;
    exit;
 }
?>

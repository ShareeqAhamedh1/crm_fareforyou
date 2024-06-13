<?php  include 'website/conn.php';

$id = $_SESSION['pack_insert_id'];

$includes=$_REQUEST['e_includes'];

$sql="INSERT INTO tbl_includes (include,pack_id)
      VALUES ('$includes','$id')";
$rs=$connWeb->query($sql);

if($rs>0){
    echo 200;
    exit;
 }else{
    echo 300;
    exit;
 }
?>

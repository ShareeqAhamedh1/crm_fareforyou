<?php


include 'website/conn.php';

$id = $_REQUEST['del_id'];

$sql = "DELETE FROM tbl_airlines WHERE al_id ='$id'";
$rs = $connWeb->query($sql);

if($rs == 1){
    echo 200;
}
else{
    echo $sql;
}
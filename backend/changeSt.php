<?php

include 'website/conn.php';

$st = $_REQUEST['pst'];
$id = $_REQUEST['id'];


$sql = "UPDATE tbl_booking SET status='$st' WHERE b_id='$id'";
$rs = $conn->query($sql);

if($rs == 1){
  echo 200;
}
else {
  echo 300;
}

<?php

include 'website/conn.php';

$b_status = $_REQUEST['c_b_status'];
$b_id = $_REQUEST['c_b_id'];


$sql = "UPDATE tbl_booking SET b_status='$b_status' WHERE b_id='$b_id'";
$rs = $conn->query($sql);

if($rs == 1){
  echo 200;
}
else {
  echo 300;
}

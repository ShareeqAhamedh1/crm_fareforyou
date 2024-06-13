<?php

include 'website/conn.php';

$sel_bid = $_REQUEST['sel_bid'];
$sel_cid = $_REQUEST['sel_cid'];

$sqlUpdate = "UPDATE tbl_booking SET c_id='$sel_cid' WHERE b_id='$sel_bid' ";
$rsUpdate = $conn->query($sqlUpdate);

if($rsUpdate > 0){
 echo 200;
 exit();
}
else {
  echo 500;
  exit();
}

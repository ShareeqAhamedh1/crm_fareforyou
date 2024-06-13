<?php

include 'website/conn.php';

$cdata = $_REQUEST['cdata'];

$cid =0;

$sql = "SELECT * FROM tbl_booking WHERE b_id IN ($cdata)";
$rs = $conn->query($sql);

if($rs->num_rows > 0){
  $row = $rs->fetch_assoc();
  $cid = $row['c_id'];

  while($rowTest = $rs->fetch_assoc()){
    if($cid != $rowTest['c_id'] ){
      echo 500;
      break;
    }
  }
}
else {
  echo 200;
}

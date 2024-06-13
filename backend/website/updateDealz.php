<?php
include 'conn.php';

$status = $_REQUEST['status'];
$id = $_REQUEST['id'];

$sqlUpdate = "UPDATE tbl_flights SET f_dealz='$status' WHERE flight_id='$id'";
$rsUpdate = $connWeb->query($sqlUpdate);
if ($rsUpdate == 1) {
  echo 200;
}
else {
  echo 300;
}

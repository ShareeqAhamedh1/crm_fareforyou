<?php
  include 'website/conn.php';

  $id = $_REQUEST['vpId'];

  $sql = "DELETE FROM tbl_vendor_pay WHERE vp_id ='$id'";
  $rs = $conn->query($sql);

//   $sql = "DELETE FROM tbl_set_off_invoice WHERE cp_id ='$id'";
//   $rs = $conn->query($sql);

  echo 200;
  exit();

 ?>

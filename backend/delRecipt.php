<?php
  include 'website/conn.php';

  $id = $_REQUEST['cpId'];

  $sql = "DELETE FROM tbl_customer_pay WHERE cp_id ='$id'";
  $rs = $conn->query($sql);

  $sql = "DELETE FROM tbl_set_off_invoice WHERE cp_id ='$id'";
  $rs = $conn->query($sql);

  echo 200;
  exit();

 ?>

<?php
  include 'website/conn.php';

  $id = $_REQUEST['id'];

  $sql = "DELETE FROM tbl_payment_method WHERE pm_id ='$id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    header('location:../payment_method.php');
  }
  else {
    header('location:../payment_method.php?err');
  }

 ?>

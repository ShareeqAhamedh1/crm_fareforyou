<?php
  include 'website/conn.php';

  $v_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_vendor_det WHERE v_id ='$v_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

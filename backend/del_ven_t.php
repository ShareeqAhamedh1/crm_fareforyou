<?php
  include 'website/conn.php';

  $t_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_vendor_transfer WHERE t_id ='$t_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

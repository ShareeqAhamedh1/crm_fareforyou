<?php
  include 'website/conn.php';

  $f_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_vendor_flights WHERE f_id ='$f_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

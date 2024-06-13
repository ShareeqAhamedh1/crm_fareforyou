<?php
  include 'website/conn.php';

  $e_v_name = $_REQUEST['e_v_name'];

  $sql = "INSERT INTO tbl_vendor_leads (l_name)
          VALUES ('$e_v_name')";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

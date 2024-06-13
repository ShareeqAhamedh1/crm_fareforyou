<?php
  include 'website/conn.php';

  $e_v_name = $_REQUEST['e_v_name'];
  $e_v_overview = $_REQUEST['e_v_overview'];

  $sql = "INSERT INTO tbl_vendor_transfer (t_v_name,t_v_overview)
          VALUES ('$e_v_name','$e_v_overview')";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

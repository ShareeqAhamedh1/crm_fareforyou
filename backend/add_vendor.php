<?php
  include 'website/conn.php';

  $e_v_name = $_REQUEST['e_v_name'];
  $e_v_overview = $_REQUEST['e_v_overview'];

  $sql = "INSERT INTO tbl_vendor_det (v_name,v_desc)
          VALUES ('$e_v_name','$e_v_overview')";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

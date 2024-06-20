<?php
  include 'website/conn.php';

  $i_ids = $_REQUEST['bid'];

  $vid = $_REQUEST['c_id'];
  $vp_id = $_REQUEST['cp_id'];


  foreach ($i_ids as $i_id) {
    $sql = "INSERT INTO tbl_set_off_invoice_vendor (vp_id,v_id,b_id) VALUES ('$vp_id','$vid','$i_id')";
    $rs = $conn->query($sql);
  }

  echo $vid;
  exit();

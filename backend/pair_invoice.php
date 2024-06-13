<?php
  include 'website/conn.php';

  $i_ids = $_REQUEST['bid'];

  $cid = $_REQUEST['c_id'];
  $cp_id = $_REQUEST['cp_id'];


  foreach ($i_ids as $i_id) {
    $sql = "INSERT INTO tbl_set_off_invoice (cp_id,c_id,b_id) VALUES ('$cp_id','$cid','$i_id')";
    $rs = $conn->query($sql);
  }

  echo $cid;
  exit();

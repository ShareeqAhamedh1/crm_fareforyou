<?php
  include 'website/conn.php';

  $l_p_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_vendor_leads WHERE l_p_id ='$l_p_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

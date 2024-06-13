<?php
  include 'website/conn.php';

  $o_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_vendo_other WHERE o_id ='$o_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

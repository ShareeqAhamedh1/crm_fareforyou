<?php
  include 'website/conn.php';

  $del_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_extras WHERE e_id ='$del_id'";
  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
    exit();
  }
  else {
    echo 300;
    exit();
  }

 ?>

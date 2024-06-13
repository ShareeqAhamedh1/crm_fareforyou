<?php
  include 'website/conn.php';

  $tr_id = $_REQUEST['del_id'];

  $sql = "DELETE FROM tbl_tour WHERE tr_id ='$tr_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

<?php
  include 'website/conn.php';

   $b_id = $_SESSION['b_id'];

  $h_id = $_REQUEST['h_id'];


  


  $sql = "DELETE FROM tbl_hote_det WHERE h_id ='$h_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo 300;
  }

 ?>

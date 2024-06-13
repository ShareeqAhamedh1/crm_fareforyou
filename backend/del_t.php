<?php
  include 'website/conn.php';

   $b_id = $_SESSION['b_id'];

  $t_id = $_REQUEST['t_id'];


  


  $sql = "DELETE FROM tbl_transfer WHERE t_id ='$t_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo 300;
  }

 ?>

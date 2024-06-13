<?php
  include 'website/conn.php';

   $b_id = $_SESSION['b_id'];

  $fiid = $_REQUEST['fiid'];


  


  $sql = "DELETE FROM tbl_flights_itenery WHERE f_i_id  ='$fiid'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo 300;
  }

 ?>

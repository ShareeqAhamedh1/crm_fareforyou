<?php
  include 'website/conn.php';

   $b_id = $_SESSION['b_id'];

  $p_id = $_REQUEST['p_id'];
  $l_passenger = $_REQUEST['lp'];

  if($l_passenger == 1){
    $sqlLeadValidation = "SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id'";
    $rsLeadValidation =$conn->query($sqlLeadValidation);
    if($rsLeadValidation->num_rows > 1){
      echo 9001;
      exit();
    }
  }


  $sql = "DELETE FROM tbl_passenger_flight_bookings WHERE p_id ='$p_id'";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo 300;
  }

 ?>

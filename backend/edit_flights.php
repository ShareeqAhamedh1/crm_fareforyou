<?php
 include 'website/conn.php';

 $p_id= $_REQUEST['pid'];

 $b_id = $_SESSION['b_id'];


$v_id=$_REQUEST['e_vendor_name'];
 $f_c_f_name=$_REQUEST['e_c_f_name'];
 $f_c_l_name=$_REQUEST['e_c_l_name'];
 $f_c_ticket_number=$_REQUEST['e_c_ticket_number'];
 $b_ammount=$_REQUEST['e_b_ammount'];
 $s_ammount=$_REQUEST['e_s_ammount'];
//  $t_ammount=$_REQUEST['t_ammount'];
 $issued_date=$_REQUEST['e_t_date'];
//  $name=$_REQUEST['name'];


 $sqlFlights="UPDATE tbl_passenger_flight_bookings SET
                      v_id='$v_id',
                      p_f_name='$f_c_f_name',
                      p_l_name='$f_c_l_name',
                      e_ticket_no='$f_c_ticket_number',
                      buy_amount='$b_ammount',
                      sell_amount='$s_ammount',
                      issued_date='$issued_date' WHERE p_id='$p_id'";

 $rsFlights=$conn->query($sqlFlights);


 if ($rsFlights>0) {
      echo 200;
    exit();
 }else{
  echo $sqlFlights;
   exit();
 }
 ?>

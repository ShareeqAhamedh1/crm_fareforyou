<?php
 include 'website/conn.php';


 $v_id=$_REQUEST['e_vendor_name'];
 $e_fName_p=$_REQUEST['e_fName_p'];
  $e_lName_p=$_REQUEST['e_lName_p'];
 $f_c_ticket_number=$_REQUEST['e_c_ticket_number'];
 $b_ammount=$_REQUEST['e_b_ammount'];
 $s_ammount=$_REQUEST['e_s_ammount'];
//  $t_ammount=$_REQUEST['t_ammount'];
 $issued_date=$_REQUEST['e_t_date'];
//  $name=$_REQUEST['name'];
 $b_id=$_SESSION['b_id'];



 $sqlFlights="INSERT INTO tbl_passenger_flight_bookings (v_id,p_f_name,p_l_name,e_ticket_no,buy_amount,sell_amount,issued_date,b_id)
              VALUES ('$v_id','$e_fName_p','$e_lName_p','$f_c_ticket_number','$b_ammount','$s_ammount','$issued_date','$b_id')";

 $rsFlights=$conn->query($sqlFlights);


 if ($rsFlights>0) {
      echo 200;
   //  header('location:../invoice_details.php');
    exit();
 }else{
  echo $sqlFlights;
  //  header('location:../invoice_details.php');
   exit();
 }
 ?>

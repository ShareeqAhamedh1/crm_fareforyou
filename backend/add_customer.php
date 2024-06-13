<?php
 include 'website/conn.php';

 $us_id=$_REQUEST['user'];
 $t_pack=$_REQUEST['t_pack'];
 $b_date=$_REQUEST['b_date'];
 $leads = $_REQUEST['leads'];

 $u_id=$_SESSION['u_id'];


 $c_id = $_REQUEST['customer_id'];
 $pay_term = $_REQUEST['p_term'];

  $sqlBookingInfo="INSERT INTO tbl_booking (tour_id,c_id,booked_date_time,u_id,p_sta,l_p_id,pay_term,b_status) VALUES ('$t_pack','$c_id','$b_date','$us_id',2,'$leads','$pay_term',1)";
  $rsBookingInfo=$conn->query($sqlBookingInfo);

 $b_id = $conn->insert_id;

 if($rsBookingInfo == 1){
   $_SESSION['b_id'] = $b_id;
   $_SESSION['us_id']=$us_id;
   header('location:../invoice_details.php');
   exit();
 }
 else {
    header('location:../ninvoices.php');
    exit();
 }



 ?>

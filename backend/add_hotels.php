<?php  include 'website/conn.php';

$v_id=$_REQUEST['e_vendor_name'];
$c_hotel_name= $conn->real_escape_string($_REQUEST['e_c_hotel_name']) ;
$c_hotel_address= $conn->real_escape_string($_REQUEST['e_c_hotel_address']) ;

$check_in_date=$_REQUEST['e_check_in_date'];
$check_out_date=$_REQUEST['e_check_out_date'];
$c_room_type=$_REQUEST['e_c_room_type'];
$c_board_basis=$_REQUEST['e_c_board_basis'];
$b_ammount=$_REQUEST['e_b_ammount'];
$s_ammount=$_REQUEST['e_e_s_ammount'];
$free_c_deadline=$_REQUEST['e_free_c_deadline'];
$b_id=$_SESSION['b_id'];

$sqlHotel="INSERT INTO tbl_hote_det (v_id,h_name,check_in_date,check_out_date,room_type,board_basis,free_cancellation_date_deadline,buy_amount,sell_amount,hotel_address,b_id)
      VALUES ('$v_id ','$c_hotel_name','$check_in_date','$check_out_date','$c_room_type','$c_board_basis','$free_c_deadline','$b_ammount','$s_ammount','$c_hotel_address','$b_id')";

 $rsHotel=$conn->query($sqlHotel);

 if ($rsHotel>0) {
   echo 200;
   //  header('location:../invoice_details.php');
    exit();
 }else{
    echo 300;
    exit();
 }


?>

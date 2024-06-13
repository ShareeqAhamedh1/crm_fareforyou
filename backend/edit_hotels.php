<?php

include 'website/conn.php';

$h_id= $_REQUEST['hid'];



$v_id=$_REQUEST['e_vendor_name'];
$c_hotel_name=$_REQUEST['e_c_hotel_name'];
$check_in_date=$_REQUEST['e_check_in_date'];
$check_out_date=$_REQUEST['e_check_out_date'];
$c_room_type=$_REQUEST['e_c_room_type'];
$c_board_basis=$_REQUEST['e_c_board_basis'];
$b_ammount=$_REQUEST['e_b_ammount'];
$s_ammount=$_REQUEST['e_e_s_ammount'];
$free_c_deadline=$_REQUEST['e_free_c_deadline'];
$b_id=$_SESSION['b_id'];


$sqlHotel="UPDATE tbl_hote_det SET 
                    v_id='$v_id',
                     h_name='$c_hotel_name',
                     check_in_date='$check_in_date',
                     check_out_date='$check_out_date',
                     room_type='$c_room_type',
                     board_basis='$c_board_basis',
                     free_cancellation_date_deadline='$free_c_deadline',
                      buy_amount='$b_ammount',
                      sell_amount='$s_ammount' WHERE h_id='$h_id'";


$rsHotel=$conn->query($sqlHotel);


if ($rsHotel>0) {
     echo 200;
   exit();
}else{
 echo $sqlHotel;
  exit();
}
?>

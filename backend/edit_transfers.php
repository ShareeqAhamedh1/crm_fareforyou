<?php

include 'website/conn.php';

$t_id= $_REQUEST['tid'];


$v_id=$_REQUEST['e_vendor_name'];
$c_pick_up_point=$_REQUEST['e_c_pick_up_point'];
$c_dropoff=$_REQUEST['e_c_dropoff'];
$pick_up_date_time=$_REQUEST['e_pick_up_date_time'];
$drop_off_date_time=$_REQUEST['e_drop_off_date_time'];
$transfer_type=$_REQUEST['e_transfer_type'];
$n_pass=$_REQUEST['e_n_pass'];
$v_type=$_REQUEST['e_v_type'];
$tr_desc=$_REQUEST['e_tr_desc'];
$b_ammount=$_REQUEST['e_b_ammount'];
$s_ammount=$_REQUEST['e_s_ammount'];

$profit=$s_ammount-$b_ammount;
$b_id=$_SESSION['b_id'];


$sqlTransfer="UPDATE tbl_transfer SET 
                    v_id='$v_id',
                    pick_up_point='$c_pick_up_point',
                    drop_off='$c_dropoff',
                    pick_up_date_time='$pick_up_date_time',
                    drop_off_date_time='$drop_off_date_time',
                    transfer_type='$transfer_type',
                    no_of_passenger='$n_pass',
                    vehicle_type='$v_type',
                    description='$tr_desc',
                      buy_amount='$b_ammount',
                      sell_amount='$s_ammount' WHERE t_id='$t_id'";


$rsTransfer=$conn->query($sqlTransfer);


if ($rsTransfer>0) {
     echo 200;
   exit();
}else{
 echo $rsTransfer;
  exit();
}
?>

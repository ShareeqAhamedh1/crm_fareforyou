<?php  include 'website/conn.php';

$bid = $_SESSION['b_id'];

$v_id=$_REQUEST['e_vendor_name'];
$other_c_name=$_REQUEST['e_other_c_name'];
$other_charge_price=$_REQUEST['e_other_charge_price'];
$other_charge_sell_price=$_REQUEST['e_other_charge_sell_price'];

$sql="INSERT INTO tbl_other_charges (v_id,o_c_name,buy_price,sell_price,b_id)
      VALUES ('$v_id','$other_c_name','$other_charge_price','$other_charge_sell_price','$bid')";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
 }else{
    echo 300;
 }
?>

<?php

include 'website/conn.php';

$oc_id= $_REQUEST['oc_id'];


$v_id=$_REQUEST['e_vendor_name'];
$other_c_name=$_REQUEST['e_other_c_name'];
$other_charge_price=$_REQUEST['e_other_charge_price'];
$other_charge_sell_price=$_REQUEST['e_other_charge_sell_price'];
$b_id=$_SESSION['b_id'];


$sqlOtherCharges="UPDATE tbl_other_charges SET 
                    v_id='$v_id',
                    o_c_name='$other_c_name',
                    buy_price='$other_charge_price',
                    sell_price='$other_charge_sell_price' WHERE o_c_id ='$oc_id'";


$rsOtherCharges=$conn->query($sqlOtherCharges);


if ($rsOtherCharges>0) {
     echo 200;
   exit();
}else{
 echo $sqlOtherCharges;
  exit();
}
?>

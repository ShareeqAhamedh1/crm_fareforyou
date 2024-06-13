<?php

include 'website/conn.php';

$p_id= $_REQUEST['e_p_id'];


$p_date=$_REQUEST['e_p_date'];
$p_amount=$_REQUEST['e_p_amount'];

// $b_id=$_SESSION['b_id'];


$sqlPay="UPDATE tbl_payment_setup SET
                    ps_date='$p_date',
                    ps_amount='$p_amount'
                    WHERE ps_id  ='$p_id'";


$rsPay=$conn->query($sqlPay);


if ($rsPay>0) {
     echo 200;
   exit();
}else{
 echo 500;
  exit();
}
?>

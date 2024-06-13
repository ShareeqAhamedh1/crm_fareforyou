<?php  include 'website/conn.php';

$p_date=$_REQUEST['e_p_date'];
$p_amount=$_REQUEST['e_p_amount'];
$desc=$_REQUEST['e_desc'];
$e_pmethod_id=$_REQUEST['e_pmethod_id'];

$e_cp_id = $_REQUEST['e_cp_id'];



$sqlEditPay="UPDATE tbl_customer_pay SET pm_id='$e_pmethod_id',
                                    pi_amount='$p_amount',
                                    pi_date='$p_date',
                                    pi_description='$desc' WHERE cp_id='$e_cp_id'";
$rsEditPay=$conn->query($sqlEditPay);


if($rsEditPay == 1){
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}

?>

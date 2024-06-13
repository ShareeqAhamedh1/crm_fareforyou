<?php  include 'website/conn.php';

$p_date=$_REQUEST['e_p_date'];
$p_amount=$_REQUEST['e_p_amount'];
$desc=$_REQUEST['e_desc'];
$p_id=$_REQUEST['e_p_id'];
$bid = $_REQUEST['e_b_id'];
$e_pmethod_id=$_REQUEST['e_pmethod_id'];



$sqlAddPay="INSERT INTO tbl_paid_info (b_id,ps_id,pi_amount,pm_id,pi_date,pi_description) VALUES ('$bid','$p_id','$p_amount','$e_pmethod_id','$p_date','$desc')";
$rsAddPay=$conn->query($sqlAddPay);


if($rsAddPay > 0){
    echo 200;
    exit;
}else{
    echo 300;
    exit;
}

?>

<?php  include 'website/conn.php';

$p_date=$_REQUEST['e_p_date'];
$p_amount=$_REQUEST['e_p_amount'];
$desc=$_REQUEST['e_desc'];
$cid = $_REQUEST['e_cid'];
$e_pmethod_id=$_REQUEST['e_pmethod_id'];



$sqlAddPay="INSERT INTO tbl_customer_pay (c_id,pm_id,pi_amount,pi_date,pi_description) VALUES ('$cid','$e_pmethod_id','$p_amount','$p_date','$desc')";
$rsAddPay=$conn->query($sqlAddPay);

$_SESSION['cp_id'] = $conn->insert_id;

if($rsAddPay > 0){
    echo 200;
    exit;
}else{
    echo 300;
    exit;
}

?>

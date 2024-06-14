<?php  include 'website/conn.php';

$p_date=$_REQUEST['e_p_date'];
$p_amount=$_REQUEST['e_p_amount'];
$desc=$_REQUEST['e_desc'];
$vid = $_REQUEST['e_vid'];
$e_pmethod_id=$_REQUEST['e_pmethod_id'];



$sqlAddPay="INSERT INTO tbl_vendor_pay (v_id,pm_id,p_amount,pi_date,p_description) VALUES ('$vid','$e_pmethod_id','$p_amount','$p_date','$desc')";
$rsAddPay=$conn->query($sqlAddPay);

$_SESSION['vp_id'] = $conn->insert_id;

if($rsAddPay > 0){
    echo 200;
    exit;
}else{
    echo 300;
    exit;
}

?>

<?php  include 'website/conn.php';

$p_meth=$_REQUEST['p_meth'];
$p_desc=$_REQUEST['p_desc'];

$sql = "INSERT INTO tbl_payment_method(pm_type,pm_ref) VALUES('$p_meth','$p_desc')";
$rs=$conn->query($sql);

if($rs > 0){
  header('location:../payment_method.php');
}
else {
  header('location:../payment_method.php?err');
}

?>

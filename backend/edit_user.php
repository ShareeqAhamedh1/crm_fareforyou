<?php
 include 'website/conn.php';
$id = $_REQUEST['uid'];
$userName=$_REQUEST['user_name'];
$userPass=$_REQUEST['user_pass'];
$userType=$_REQUEST['user_type'];


$sql ="UPDATE tbl_users SET u_name='$userName',
                            u_pass='$userPass',
                            u_acc_level='$userType' WHERE u_id='$id'";

$rs=$conn->query($sql);

if($rs>0){
    header('location:../user.php');
    exit();
}else{
  header('location:../user.php');
  exit();
}

?>

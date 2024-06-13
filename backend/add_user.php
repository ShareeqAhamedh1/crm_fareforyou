<?php 
 include 'website/conn.php';



$userName=$_REQUEST['user_name'];
$userPass=$_REQUEST['user_pass'];
$userType=$_REQUEST['user_type'];


$sql ="INSERT INTO tbl_users (u_name,u_pass,u_acc_level) VALUES ('$userName','$userPass','$userType')";

$rs=$conn->query($sql);

if($rs>0){
    header('location:../user.php');
    exit();
}else{
   echo 300;
}

?>
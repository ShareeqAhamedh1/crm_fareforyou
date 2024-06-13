<?php
 include 'website/conn.php';
 

 
 $uid=$_REQUEST['uid'];

 $user_c_pass=$_REQUEST['user_c_pass'];
 $user_n_pass=$_REQUEST['user_n_pass'];


$sqlGetPass = "SELECT * FROM tbl_users WHERE u_id ='$uid'";
$rsGetPass = $conn->query($sqlGetPass);

if ($rsGetPass->num_rows == 1) {
 $rowGetPass = $rsGetPass->fetch_assoc();

 if ($rowGetPass['u_pass'] == $user_c_pass) {
   
     $sqlUpdatePass = "UPDATE tbl_users SET u_pass='$user_n_pass' WHERE u_id='$uid'";
     $rsUpdatePass = $conn->query($sqlUpdatePass);

     if ($rsUpdatePass > 0) {
         
        header('location:website/logout.php');
            exit();
     }else{
        echo 300;
     }
   }else{
     $_SESSION['er_pass'] = true;
    header('location:../profile.php');
    exit();
   }
 }

 ?>
<?php
  include 'conn.php';

  $userName = $_REQUEST['username'];
  $uPassword = $_REQUEST['password'];

  $sql = "SELECT * FROM tbl_users WHERE u_name='$userName' AND u_pass='$uPassword'";
  $rs = $conn->query($sql);



  if($rs->num_rows == 1){
  
    $rowUser = $rs->fetch_assoc();

    $_SESSION['u_id'] = $rowUser['u_id'];
    $_SESSION['u_type'] = $rowUser['u_acc_level'];

    header('location:../../index.php');
    exit();
  }
  else {
    $_SESSION['error'] = true;
    header('location:../../login.php');
    exit();
  }
 ?>

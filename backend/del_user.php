<?php
  include 'website/conn.php';

  $uid = $_REQUEST['id'];

  $sql = "DELETE FROM tbl_users WHERE u_id ='$uid'";
  $rs = $conn->query($sql);

  if($rs > 0){
    header('location:../user.php');
    exit();
  }
  else {
    header('location:../user.php');
    exit();
  }

 ?>

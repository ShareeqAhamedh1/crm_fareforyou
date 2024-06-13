<?php
include 'conn.php';
session_destroy();

$uid=$_SESSION['u_id'];


header('location:../../index.php');
exit();
 ?>

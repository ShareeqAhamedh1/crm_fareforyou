<?php
 include 'website/conn.php';
 $bid=$_SESSION['b_id'];
 $month = $_REQUEST['months'];

 for ($i=1; $i <=$month ; $i++) {
   $date = $_REQUEST['date'.$i];
   $amount = $_REQUEST['amount'.$i];

   $sql ="INSERT INTO tbl_payment_setup (ps_date,ps_amount,b_id) VALUES ('$date','$amount','$bid')";
   $rs = $conn->query($sql);
 }

$sqlUpdate = "UPDATE tbl_booking SET p_sta='4' WHERE b_id='$bid'";
$rsUpdate = $conn->query($sqlUpdate);

 header('location:../payment_setup.php?b_id='.$bid);
 exit();

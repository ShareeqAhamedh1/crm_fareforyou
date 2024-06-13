<?php

include 'website/conn.php';

$e_leads = $_REQUEST['e_leads'];
$e_user = $_REQUEST['e_user'];
$e_p_term = $_REQUEST['e_p_term'];

$bid = $_REQUEST['e_bid'];

$sqlUpdate = "UPDATE tbl_booking SET  u_id='$e_user',
                                l_p_id='$e_leads',
                                pay_term='$e_p_term' WHERE b_id='$bid'";

$rs = $conn->query($sqlUpdate);

if($rs == 1){
  echo 200;
}
else {
  echo 500;
}

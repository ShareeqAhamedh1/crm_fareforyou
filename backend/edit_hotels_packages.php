<?php

include 'website/conn.php';

$h_id= $_REQUEST['h_id'];


$h_name=$conn->real_escape_string($_REQUEST['e_h_name']);
$h_desc=$_REQUEST['e_h_desc'];
$h_l_link=$_REQUEST['e_h_l_link'];
$h_o_link=$conn->real_escape_string($_REQUEST['e_h_o_link']);
$h_rating=$_REQUEST['e_h_rating'];




$sqlHotel="UPDATE tbl_hotels SET 
                    hotel='$h_name',
                    description='$h_desc',
                    h_location_link='$h_l_link',
                    h_other_links='$h_o_link',
                    h_rating='$h_rating' WHERE h_id ='$h_id'";


$rsHotel=$connWeb->query($sqlHotel);


if ($rsHotel>0) {
     echo 200;
   exit();
}else{
 echo $sqlHotel;
  exit();
}
?>
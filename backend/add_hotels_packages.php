<?php  include 'website/conn.php';

$id = $_SESSION['pack_insert_id'];

$h_desc= $conn->real_escape_string($_REQUEST['e_h_desc']) ;
$h_name=$_REQUEST['e_h_name'];
$h_l_link=$_REQUEST['e_h_l_link'];
$h_o_link=$conn->real_escape_string($_REQUEST['e_h_o_link']);
$h_rating=$_REQUEST['e_h_rating'];


$sql="INSERT INTO tbl_hotels (hotel,description,pack_id,h_location_link,h_other_links,h_rating)
      VALUES ('$h_name','$h_desc','$id','$h_l_link','$h_o_link','$h_rating')";
$rs=$connWeb->query($sql);

if($rs>0){
    echo 200;
    exit;
 }else{
    echo 300;
    exit;
 }
?>

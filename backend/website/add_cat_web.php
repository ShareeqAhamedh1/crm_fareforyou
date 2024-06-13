<?php 

include 'conn.php';
$add_p_cat_name=$_REQUEST['add_p_cat_name'];
$pack_id =$_SESSION['pack_insert_id'];

$sqlAdd="INSERT INTO tbl_cat_of_packages (pack_id,pc_id) VALUES ('$pack_id','$add_p_cat_name')";
$rsAdd=$connWeb->query($sqlAdd);

if($rsAdd>0){
    echo 200;
}else{
    echo $sqlAdd;
}

?>

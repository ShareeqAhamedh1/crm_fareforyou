<?php

include 'website/conn.php';

$e_id= $_REQUEST['e_e_id'];


$extra=$_REQUEST['e_extra'];




$sqlExtra="UPDATE tbl_extras SET 
                    extra='$extra' WHERE e_id ='$e_id'";


$rsExtra=$connWeb->query($sqlExtra);


if ($rsExtra>0) {
     echo 200;
   exit();
}else{
 echo $sqlExtra;
  exit();
}
?>
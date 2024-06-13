<?php

include 'website/conn.php';

$i_id= $_REQUEST['e_i_id'];


$include=$_REQUEST['e_include'];




$sqlInclude="UPDATE tbl_includes SET 
                    include='$include' WHERE i_id ='$i_id'";


$rsInclude=$connWeb->query($sqlInclude);


if ($rsInclude>0) {
     echo 200;
   exit();
}else{
 echo $sqlInclude;
  exit();
}
?>
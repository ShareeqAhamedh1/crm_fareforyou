<?php
  include 'website/conn.php';

  $pc_id = $_REQUEST['pc_id'];
  $e_c_name = $_REQUEST['e_c_name'];


  if(isset($_FILES['icon_cat'])){
      $fileName="icon_cat";
      $filePath="../cat_images/";
      $allowedList=array('png','jpg','jpeg');
      $errorLocation ="../index.php";
      uploadImage($fileName,$filePath,$allowedList,$errorLocation);
      $img_name = $GLOBALS['fileNameNew'];

      $sql = "UPDATE tbl_package_cat SET pc_name='$e_c_name',pc_icon='$img_name' WHERE pc_id = '$pc_id'";
  }
  else {
    $sql = "UPDATE tbl_package_cat SET pc_name='$e_c_name' WHERE pc_id = '$pc_id'";
  }

  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

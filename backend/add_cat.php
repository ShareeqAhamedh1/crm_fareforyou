<?php
  include 'website/conn.php';

  $e_c_name = $_REQUEST['e_c_name'];
  $img_name = "";



  if(isset($_FILES['icon_cat'])){
      $fileName="icon_cat";
      $filePath="../cat_images/";
      $allowedList=array('png','jpg','jpeg');
      $errorLocation ="../index.php";
      uploadImage($fileName,$filePath,$allowedList,$errorLocation);
      $img_name = $GLOBALS['fileNameNew'];
  }


  $sql = "INSERT INTO tbl_package_cat (pc_name,pc_icon)
          VALUES ('$e_c_name','$img_name')";
  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

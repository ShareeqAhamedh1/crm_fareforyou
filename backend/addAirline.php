<?php
  include 'website/conn.php';

  $al_code = $_REQUEST['al_code'];
  $al_name = $_REQUEST['al_name'];
  $al_country = $_REQUEST['al_country'];

  $fileName="al_image";
  $filePath="website/airline_images/";
  $allowedList=array('png','jpg','jpeg','webp');
  $errorLocation ='../index.php';


    
  uploadImage($fileName,$filePath,$allowedList,$errorLocation);
  $imageFile = $GLOBALS['fileNameNew'];
  
  $sql = "INSERT INTO tbl_airlines (al_code,al_name,al_country,al_image)
          VALUES ('$al_code','$al_name','$al_country','$imageFile')";
  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

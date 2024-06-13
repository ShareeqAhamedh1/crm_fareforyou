<?php
  include 'website/conn.php';

  $id = $_REQUEST['al_id'];
  $al_code = $_REQUEST['al_code'];
  $al_name = $_REQUEST['al_name'];
  $al_country = $_REQUEST['al_country'];

  $img = $_FILES['al_image']['tmp_name'];

  if($img == ""){  
    $sql = "UPDATE tbl_airlines SET al_code='$al_code',
                                    al_name='$al_name',
                                    al_country='$al_country' WHERE al_id='$id'";
  }
  else{
    $fileName="al_image";
    $filePath="website/airline_images/";
    $allowedList=array('png','jpg','jpeg','webp');
    $errorLocation ='../index.php';

    uploadImage($fileName,$filePath,$allowedList,$errorLocation);
    $imageFile = $GLOBALS['fileNameNew'];

    $sql = "UPDATE tbl_airlines SET al_code='$al_code',
    al_name='$al_name',
    al_country='$al_country',al_image='$imageFile' WHERE al_id='$id'";
  }

  
  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

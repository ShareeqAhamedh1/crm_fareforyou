<?php
  include 'website/conn.php';

  $pc_id = $_REQUEST['del_id'];
  $icon = $_REQUEST['icon'];

  if($icon != ""){
    unlink('../cat_images/'.$icon);
  }
  $sql = "DELETE FROM tbl_package_cat WHERE pc_id ='$pc_id'";
  $rs = $connWeb->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

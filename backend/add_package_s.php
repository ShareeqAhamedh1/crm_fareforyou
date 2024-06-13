<?php
  include 'website/conn.php';

  $e_pack_title = $_REQUEST['e_pack_title'];
  $e_pack_duration = $_REQUEST['e_pack_duration'];
  $e_pack_overview = $_REQUEST['e_pack_overview'];

  $sql = "INSERT INTO tbl_tour (tr_title,tr_description,tr_duration)
          VALUES ('$e_pack_title','$e_pack_overview','$e_pack_duration')";
  $rs = $conn->query($sql);

  if($rs > 0){
    echo 200;
  }
  else {
    echo $sql;
  }

 ?>

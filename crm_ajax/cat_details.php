<?php include '../backend/website/conn.php';
  $pc_id = $_REQUEST['pc_id'];

  $sqlPc ="SELECT * FROM tbl_package_cat WHERE pc_id='$pc_id'";
  $rsPc = $connWeb->query($sqlPc);

  if($rsPc->num_rows > 0){
    $rowPc = $rsPc->fetch_assoc();
  }
?>

<input type="hidden" id="pc_id_edit" name="" value="<?= $pc_id ?>">
<div class="form-group">
  <label>Category Name</label>
  <input type="text" class="form-control" id="c_name_edit" name="" value="<?= $rowPc['pc_name'] ?>">
</div>
<div class="form-group">
  <label for="">Icon</label>
  <input type="file" id="icon_cat_edit" name="icon_cat" class="form-control" value="">
</div>
<hr>
<div class="reset-button">
   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
   <a onClick="editCat()" class="btn btn-warning"> Change</a>
</div>

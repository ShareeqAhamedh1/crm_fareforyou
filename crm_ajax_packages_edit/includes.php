<?php include '../backend/website/conn.php'; 
$i_id = $_REQUEST['i_id'];
$sqlPass = "SELECT * FROM tbl_includes WHERE i_id='$i_id'";
$rsPass =$connWeb->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}
?>

  <h5>Includes</h5>
  <hr>
      <div class="form-group">
      <input type="hidden" name="" id="i_id" value="<?= $i_id ?>">
         <label>Include</label>
         <input type="text" class="form-control"
         id="e_include" name="e_include" placeholder="Description Name" value="<?= $rowPass['include'] ?>" required>
      </div>
    
<div class="button">
<button class="btn green_btn" onclick="editIncludes()">Edit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

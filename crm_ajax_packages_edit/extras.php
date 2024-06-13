<?php include '../backend/website/conn.php'; 
$e_id = $_REQUEST['e_id'];
$sqlPass = "SELECT * FROM tbl_extras WHERE e_id='$e_id'";
$rsPass =$connWeb->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}
?>

  <h5>Includes</h5>
  <hr>
      <div class="form-group">
      <input type="hidden" name="" id="e_id" value="<?= $e_id ?>">
         <label>Include</label>
         <input type="text" class="form-control"
         id="e_extra" name="e_extra" placeholder="Description Name" value="<?= $rowPass['extra'] ?>" required>
      </div>
    
<div class="button">
<button class="btn green_btn" onclick="editExtras()">Edit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

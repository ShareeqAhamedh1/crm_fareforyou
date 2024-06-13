<?php include '../backend/website/conn.php'; 

$o_c_id = $_REQUEST['o_c_id'];
$sqlPass = "SELECT * FROM tbl_other_charges WHERE o_c_id='$o_c_id'";
$rsPass =$conn->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}
?>

  <h5>Other Charges</h5>
  <hr>

  <div class="form-group">
         <label>Vendors</label>
         <select class="form-control" id="ed_vendor_name" name="vendor_name">
            <?php
            $sqlvendor = "SELECT * FROM tbl_vendo_other";
            $rsvendor = $conn->query($sqlvendor);
            if($rsvendor->num_rows > 0){
               while($rowvendor = $rsvendor->fetch_assoc()){
            ?>
            <option value="<?= $rowvendor['o_id'] ?>"><?= $rowvendor['o_v_name'] ?></option>
         <?php } } ?>
         </select>
    </div>
      <div class="form-group">
        <input type="hidden" name="" id="o_c_id" value="<?= $o_c_id ?>">
         <label>Description</label>
         <input type="text" class="form-control" id="ed_other_c_name" name="other_c_name" placeholder="Description Name" value="<?= $rowPass['o_c_name'] ?>" required>
      </div>
      <div class="form-group">
         <label>Buy Price</label>
         <input type="text" class="form-control" id="ed_other_charge_price" name="other_charge_price" value="<?= $rowPass['buy_price'] ?>" required>
      </div>
      <div class="form-group">
         <label>Sell Price</label>
         <input type="text" class="form-control" id="ed_other_charge_sell_price" name="other_charge_sell_price" value="<?= $rowPass['sell_price'] ?>" required>
      </div>


<div class="button">
<button class="btn green_btn" onclick="editOtherCharge()">Edit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

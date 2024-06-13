<?php include '../backend/website/conn.php'; ?>

  <h5>Other Services</h5>
  <hr>
      <div class="form-group">
         <label>Description</label>
         <input type="text" class="form-control"
         id="other_c_name" name="other_c_name" placeholder="Description Name" required>
      </div>
      <div class="form-group">
         <label>Vendors</label>
         <select class="form-control" id="vendor_name" name="vendor_name">
            <?php
            $sqlvendor = "SELECT * FROM tbl_vendor_det";
            $rsvendor = $conn->query($sqlvendor);
            if($rsvendor->num_rows > 0){
               while($rowvendor = $rsvendor->fetch_assoc()){
            ?>
            <option value="<?= $rowvendor['v_id'] ?>"><?= $rowvendor['v_name'] ?></option>
         <?php } } ?>
         </select>
    </div>

      <div class="form-group">
         <label>Buy Price</label>
         <input type="text" class="form-control"
         id="other_charge_price" name="other_charge_price" required>
      </div>

      <div class="form-group">
         <label>Sell Price</label>
         <input type="text" class="form-control"
         id="other_charge_sell_price" name="other_charge_sell_price" required>
      </div>

<div class="button">
<button class="btn green_btn" onclick="addOtherCharge()">Add</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

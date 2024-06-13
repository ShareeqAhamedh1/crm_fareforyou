<?php include '../backend/website/conn.php'; ?>
  <h5>Other Charges</h5>
  <hr>
  <div class="row">
    <div class="col-4">
      <div class="form-group">
         <label>Description</label>
         <input type="text" class="form-control" id="other_c_name" placeholder="Description Name" required>
      </div>
      <div class="form-group">
         <label>Price</label>
         <input type="text" class="form-control" id="other_charge_price" required>
      </div>
      <button type="button" class="btn btn-warning" onclick="add_other_charges()" name="button">Add</button> <br><br>
    </div>
    <div class="col-8" id="other_charge_details">

    </div>
  </div>

<div class="button">
   <a class="btn green_btn">Genrate Invoice</a>
</div>

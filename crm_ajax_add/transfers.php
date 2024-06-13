<?php include '../backend/website/conn.php';


$b_id=$_SESSION['b_id'];?>


  <h5>Transfer Details</h5>
  <hr>
<div class="row">
  <div class="col-lg-6">
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
       <label>Pick Up Point</label>
       <input type="text" class="form-control" id="c_pick_up_point" name="c_pick_up_point" placeholder="Pick up point" required>
    </div>
    <div class="form-group">
       <label>Drop off</label>
       <input type="text" class="form-control" id="c_dropoff" name="c_dropoff"  placeholder="Drop Off" required>
    </div>
    <div class="form-group">
       <label>Pick up Date & time</label>
       <input type="datetime-local" class="form-control"  id="pick_up_date_time" name="pick_up_date_time"  required>
    </div>
    <div class="form-group">
       <label>Drop off Date & time</label>
       <input type="datetime-local" class="form-control" id="drop_off_date_time" name="drop_off_date_time"  required>
    </div>
    <div class="form-group">
       <label>Transfer Type</label>
       <input type="text" class="form-control" id="transfer_type" placeholder="trsnfer type" name="transfer_type"  required>
    </div>
    <div class="form-group">
       <label>Number of passengers</label>
       <input type="text" class="form-control" id="n_pass" placeholder="Passengers count" name="n_pass"  required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
       <label>Vehicle Type </label>
       <input type="text" class="form-control" id="v_type" name="v_type"  required>
    </div>
    <div class="form-group">
       <label>Description </label>
       <textarea id="tr_desc" class="form-control"  id="tr_desc" name="tr_desc" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
       <label>Buy Amount </label>
       <input type="text" class="form-control" id="b_ammount" name="b_ammount"  required>
    </div>
    <div class="form-group">
       <label>Sell Amount </label>
       <input type="text" class="form-control" id="s_ammount" name="s_ammount"  required>
    </div>

  </div>
  </div>

<div class="button">
   <button  class="btn green_btn" onclick="addTransfer()">Add</button>
   <!-- <a class="btn green_btn">Add</a> -->
</div>

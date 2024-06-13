<?php include '../backend/website/conn.php'; 

$tid = $_REQUEST['t_id'];
$sqlPass = "SELECT * FROM tbl_transfer WHERE t_id='$tid'";
$rsPass =$conn->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}

?>


  <h5>Transfer Details</h5>
  <hr>
<div class="row">
  <div class="col-lg-6">
    <input type="hidden" id="tid" name="" value="<?= $tid ?>">
    <div class="form-group">
          <label>Vendors</label>
          <select class="form-control" id="ed_vendor_name" name="vendor_name">
            <?php
              $sqlvendor = "SELECT * FROM tbl_vendor_transfer";
              $rsvendor = $conn->query($sqlvendor);
              if($rsvendor->num_rows > 0){
                while($rowvendor = $rsvendor->fetch_assoc()){
              ?>
            <option value="<?= $rowvendor['t_id'] ?>"><?= $rowvendor['t_v_name'] ?></option>
          <?php } } ?>
          </select>
      </div>
    <div class="form-group">
       <label>Pick Up Point</label>
       <input type="text" class="form-control" id="ed_c_pick_up_point" name="c_pick_up_point" value="<?= $rowPass['pick_up_point'] ?>" placeholder="Pick up point" required>
    </div>
    <div class="form-group">
       <label>Drop off</label>
       <input type="text" class="form-control" id="ed_c_dropoff" name="c_dropoff" value="<?= $rowPass['drop_off'] ?>" placeholder="Drop Off" required>
    </div>
    <div class="form-group">
       <label>Pick up Date & time</label>
       <input type="datetime-local" class="form-control"  id="ed_pick_up_date_time" name="pick_up_date_time" value="<?= $rowPass['pick_up_date_time'] ?>" required>
    </div>
    <div class="form-group">
       <label>Drop off Date & time</label>
       <input type="datetime-local" class="form-control" id="ed_drop_off_date_time" name="drop_off_date_time" value="<?= $rowPass['drop_off_date_time'] ?>" required>
    </div>
    <div class="form-group">
       <label>Transfer Type</label>
       <input type="text" class="form-control" id="ed_transfer_type" placeholder="trsnfer type" name="transfer_type" value="<?= $rowPass['transfer_type'] ?>" required>
    </div>
    <div class="form-group">
       <label>Number of passengers</label>
       <input type="text" class="form-control" id="ed_n_pass" placeholder="Passengers count" name="n_pass" value="<?= $rowPass['no_of_passenger'] ?>" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
       <label>Vehicle Type </label>
       <input type="text" class="form-control" id="ed_v_type" name="v_type" value="<?= $rowPass['vehicle_type'] ?>" required>
    </div>
    <div class="form-group">
       <label>Description </label>
       <textarea class="form-control"  id="ed_tr_desc" name="tr_desc"  rows="8" cols="80" value="<?= $rowPass['description'] ?>"></textarea>
    </div>
    <div class="form-group">
       <label>Buy Amount </label>
       <input type="text" class="form-control" id="ed_b_ammount" name="b_ammount" value="<?= $rowPass['buy_amount'] ?>" required>
    </div>
    <div class="form-group">
       <label>Sell Amount </label>
       <input type="text" class="form-control" id="ed_s_ammount" name="s_ammount" value="<?= $rowPass['sell_amount'] ?>" required>
    </div>

  </div>
  </div>

<div class="button">
   <button  class="btn green_btn" onclick="editTransfers()">Edit</button>
   <!-- <a class="btn green_btn">Add</a> -->
</div>


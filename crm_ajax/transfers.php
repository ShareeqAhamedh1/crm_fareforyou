<?php include '../backend/website/conn.php'; ?>
  <h5>Transfer Details</h5>
  <hr>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
       <label>Pick Up Point</label>
       <input type="text" class="form-control" id="c_pick_up_point" placeholder="Pick up point" required>
    </div>
    <div class="form-group">
       <label>Drop off</label>
       <input type="text" class="form-control" id="c_dropoff" placeholder="Drop Off" required>
    </div>
    <div class="form-group">
       <label>Pick up Date & time</label>
       <input type="datetime-local" class="form-control" id="pick_up_date_time" required>
    </div>
    <div class="form-group">
       <label>Drop off Date & time</label>
       <input type="datetime-local" class="form-control" id="drop_off_date_time" required>
    </div>
    <div class="form-group">
       <label>Transfer Type</label>
       <input type="text" class="form-control" id="transfer_type" placeholder="trsnfer type" required>
    </div>
    <div class="form-group">
       <label>Number of passengers</label>
       <input type="text" class="form-control" id="n_pass" placeholder="Passengers count" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
       <label>Vehicle Type </label>
       <input type="text" class="form-control" id="v_type" required>
    </div>
    <div class="form-group">
       <label>Description </label>
       <textarea id="tr_desc" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
       <label>Buy Amount </label>
       <input type="text" class="form-control" id="b_ammount" required>
    </div>
    <div class="form-group">
       <label>Sell Amount </label>
       <input type="text" class="form-control" id="s_ammount" required>
    </div>

  </div>
  </div>

<div class="button">
   <a class="btn green_btn">Next</a>
</div>

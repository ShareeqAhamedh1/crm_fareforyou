<?php include '../backend/website/conn.php'; ?>

<?php
  $pid = $_REQUEST['p_id'];
  $sqlPass = "SELECT * FROM tbl_passenger_flight_bookings WHERE p_id='$pid'";
  $rsPass =$conn->query($sqlPass);
  if($rsPass->num_rows == 1){
    $rowPass = $rsPass->fetch_assoc();
  }

 ?>

<h5>Edit Flight Details</h5>
  <hr>
<div class="row">

  <div class="col-12">
    <div class="row">
      <input type="hidden" id="pid" name="" value="<?= $pid ?>">
      <div class="col-6">
        <div class="form-group">
           <label>First Name</label>
           <input type="text" class="form-control" id="ed_f_c_f_name" name="f_c_f_name" value="<?= $rowPass['p_f_name'] ?>" placeholder="First Name" required>
        </div>
        <div class="form-group">
           <label>Last Name</label>
           <input type="text" class="form-control" id="ed_f_c_l_name" name="f_c_l_name" value="<?= $rowPass['p_l_name'] ?>" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <label>Vendors</label>
          <select class="form-control" id="ed_vendor_name" name="vendor_name">
            <?php
              $sqlvendor = "SELECT * FROM tbl_vendor_flights";
              $rsvendor = $conn->query($sqlvendor);
              if($rsvendor->num_rows > 0){
                while($rowvendor = $rsvendor->fetch_assoc()){
              ?>
            <option value="<?= $rowvendor['f_id'] ?>"><?= $rowvendor['f_v_name'] ?></option>
          <?php } } ?>
          </select>
      </div>
      </div> <!-- First set of info -->
      <div class="col-6">
        <div class="form-group">
           <label>E-ticket number</label>
           <input type="text" class="form-control" id="ed_f_c_ticket_number" value="<?= $rowPass['e_ticket_no'] ?>" name="f_c_ticket_number"  placeholder="000123456789" required>
        </div>
        <div class="form-group">
           <label>Buy Amount </label>
           <input type="text" class="form-control" id="ed_b_ammount" value="<?= $rowPass['buy_amount'] ?>" name="b_ammount"  required>
        </div>
        <div class="form-group">
           <label>Sell Amount </label>
           <input type="text" class="form-control" id="ed_s_ammount" value="<?= $rowPass['sell_amount'] ?>" name="s_ammount"  required>
        </div>
        <div class="form-group">
           <label>Ticket Issue Date </label>
           <input type="date" class="form-control" id="ed_t_date" value="<?= $rowPass['issued_date'] ?>" name="t_date"  required>
        </div>
      </div>
    </div>


    <div class="button">

    <button class="btn green_btn"  onclick="editFlights()">Edit</button>
       <!-- <a href="#" class="btn green_btn">Add</a> -->
    </div>
 <br>
  </div>
</div>
<hr>

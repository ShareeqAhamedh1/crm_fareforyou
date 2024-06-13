<?php include '../backend/website/conn.php';

// $fiid = $_REQUEST['f_i_id'];
// $sqlPass = "SELECT * FROM tbl_flights_itenery WHERE f_i_id ='$fiid'";
// $rsPass =$conn->query($sqlPass);
// if($rsPass->num_rows == 1){
//   $rowPass = $rsPass->fetch_assoc();
// }

?>


  <h5>Transfer Details</h5>
  <hr>
  <div class="row">
      <div class="col-lg-3">
          <div class="form-group">
              <label for="airline_code">Airline</label>
              <select class="form-control" name="airline" id="airline_code">
                  <?php
                  $sqlAirline = "SELECT * FROM tbl_airlines";
                  $rsAirline = $connWeb->query($sqlAirline);
                  if ($rsAirline->num_rows > 0) {
                      while ($rowAirline = $rsAirline->fetch_assoc()) {
                          ?>
                          <option value="<?= $rowAirline['al_id'] ?>"><?= $rowAirline['al_name'] ?></option>
                      <?php }
                  } ?>
              </select>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="form-group">
              <label for="flight_no">Flight No</label>
              <input type="text" class="form-control" id="flight_no" name="flight_no" placeholder="" required>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="form-group">
              <label for="depart_from">Depart From</label>
              <input type="text" class="form-control" id="depart_from" name="depart_from" placeholder="Ex: London..." required>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="form-group">
              <label for="depar_date">Departure Date</label>
              <input type="datetime-local" class="form-control" id="depar_date" name="depar_date" required>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-3">
          <div class="form-group">
              <label for="arrive_to">Arrive To</label>
              <input type="text" class="form-control" id="arrive_to" placeholder="Ex: Colombo" name="arrive_to" required>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="form-group">
              <label for="arrive_time">Arrive Time</label>
              <input type="datetime-local" class="form-control" id="arrive_time" name="arrive_time" required>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="form-group">
              <label for="duration">Duration</label>
              <input type="text" class="form-control" id="duration" placeholder="In hours" name="duration" required>
          </div>
      </div>
  </div>


<div class="button">
   <button  class="btn green_btn" onclick="addItenry()">Add</button>
   <!-- <a class="btn green_btn">Add</a> -->
</div>

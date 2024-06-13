<?php include '../backend/website/conn.php'; 

$fiid = $_REQUEST['f_i_id'];
$sqlPass = "SELECT * FROM tbl_flights_itenery WHERE f_i_id ='$fiid'";
$rsPass =$conn->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}

?>


  <h5>Transfer Details</h5>
  <hr>
<div class="row">
  <div class="col-lg-12">
    <input type="hidden" id="fiid" name="" value="<?= $fiid ?>">
    <div class="form-group">
       <label>Flight No</label>
       <input type="text" class="form-control" id="flight_no" name="flight_no" value="<?= $rowPass['flight_no'] ?>"  placeholder="Pick up point" required>
    </div>
    <div class="form-group">
       <label>	Depart From</label>
       <input type="text" class="form-control" id="depart_from" name="depart_from"  value="<?= $rowPass['depart_from'] ?>"  placeholder="Drop Off" required>
    </div>
    <div class="form-group">
       <label>Departure Date</label>
       <input type="datetime-local" class="form-control"  id="depar_date" name="depar_date"   value="<?= $rowPass['depart_time'] ?>" required>
    </div>
    
    <div class="form-group">
       <label>	Arrive To</label>
       <input type="text" class="form-control" id="arrive_to" placeholder="Arrive to" name="arrive_to"  value="<?= $rowPass['at_airport'] ?>"  required>
    </div>
    <div class="form-group">
       <label>Arrive Time</label>
       <input type="datetime-local" class="form-control" id="arrive_time" name="arrive_time"  value="<?= $rowPass['arrive_time'] ?>" required>
    </div>
    <div class="form-group">
       <label>Duration</label>
       <input type="text" class="form-control" id="duration" placeholder="In hours" name="duration"  value="<?= $rowPass['duration'] ?>" required>
    </div>
  </div>
 
  </div>

<div class="button">
   <button  class="btn green_btn" onclick="editPnr()">Edit</button>
   <!-- <a class="btn green_btn">Add</a> -->
</div>


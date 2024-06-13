<?php include '../backend/website/conn.php';
$b_id = $_SESSION['b_id'];
?>

  <h5>Hotel Details</h5>
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
       <label>Hotel Name</label>
       <input type="text" class="form-control" id="c_hotel_name" name="c_hotel_name" placeholder="Hotel Name" required>
    </div>
    <div class="form-group">
       <label>Check In Date</label>
       <input type="datetime-local" class="form-control" id="check_in_date" name="check_in_date" required>
    </div>
    <div class="form-group">
       <label>Check Out Date</label>
       <input type="datetime-local" class="form-control" id="check_out_date" name="check_out_date" required>
    </div>
    <div class="form-group">
       <label>Room Type</label>
       <input type="text" class="form-control" id="c_room_type" name="c_room_type" placeholder="Room Type" required>
    </div>
    <div class="form-group">
       <label>Board Basis</label>
       <select class="form-control" id="c_board_basis" name="c_board_basis">
         <option value="1">Room only</option>
         <option value="2">Bed & Breakfast</option>
         <option value="3">Half Board</option>
         <option value="4">Full Board</option>
         <option value="5">All Inclusive</option>
         <option value="6">Premium All Inclusive</option>
         <option value="7">Ultra All-Inclusive</option>
       </select>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
       <label>Buy Amount </label>
       <input type="text" class="form-control" id="b_ammount" name="b_ammount" required>
    </div>
    <div class="form-group">
       <label>Sell Amount </label>
       <input type="text" class="form-control" id="s_ammount" name="s_ammount" required>
    </div>
    <div class="form-group">
       <label>Free Cancelation Date Deadline </label>
       <input type="date" class="form-control" id="free_c_deadline" name="free_c_deadline" required>
    </div>

  </div>
  </div>

<div class="button">
   <button  class="btn green_btn" onclick="addHotel()">Add</button>
   <!-- <a class="btn green_btn">Add</a> -->
</div>

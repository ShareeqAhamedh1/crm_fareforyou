<?php include '../backend/website/conn.php'; ?>
<h5>Customer Information</h5>
<hr>
<div class="form-group">
   <label>First Name</label>
   <input type="text" class="form-control" name="c_f_name" id="c_f_name" placeholder="First Name" required>
</div>
<div class="form-group">
   <label>Last Name</label>
   <input type="text" class="form-control" name="c_l_name" id="c_l_name" placeholder="Last Name" required>
</div>
<div class="form-group">
   <label>Email</label>
   <input type="email" class="form-control" name="c_email" id="c_email" placeholder="name@domain.com" required>
</div>
<div class="form-group">
   <label>Phone Number</label>
   <input type="text" class="form-control" name="c_phone" id="c_phone" placeholder="+123***********" required>
</div>
<div class="form-group">
   <label>Tour Packages</label>
   <select class="form-control" id="t_pack" name="t_pack">
     <?php
      $sqlTourPackage = "SELECT * FROM tbl_tour";
      $rsTourPackage = $conn->query($sqlTourPackage);
      if($rsTourPackage->num_rows > 0){
        while($rowTour = $rsTourPackage->fetch_assoc()){
      ?>
      <option value="<?= $rowTour['tr_id'] ?>"><?= $rowTour['tr_title'] ?></option>
     <?php } } ?>
   </select>
</div>
<div class="form-group">
   <label>Booked Date</label>
   <input type="date" class="form-control" id="b_date" name="b_date" required>
</div>

 <div class="button">
   <button type="submit" class="btn green_btn">Submit</button>
    <!-- <a href="backend/add_customer.php" class="btn green_btn">Next</a> -->
 </div>

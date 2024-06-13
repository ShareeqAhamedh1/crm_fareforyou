<?php include '../backend/website/conn.php'; ?>
<h5>Customer Information</h5>
<hr>
<form action="backend/add_customer.php" method="post" onsubmit="return validateCustomerSelect()">
  <div class="form-grop">
    <label for="">Selected Customer</label>
    <input type="text" name="" id="customer_selected" class="form-control" disabled>
  </div>
 <input type="hidden" id="customer_id" name="customer_id" value="">
<div class="form-group">
          <label>User</label>
          <select class="form-control" id="user" name="user" required>
            <option value="">Select Sales Person</option>
            <?php
              $sqlvendor = "SELECT * FROM tbl_users";
              $rsvendor = $conn->query($sqlvendor);
              if($rsvendor->num_rows > 0){
                while($rowvendor = $rsvendor->fetch_assoc()){
              ?>
            <option value="<?= $rowvendor['u_id'] ?>"><?= $rowvendor['u_name'] ?></option>
          <?php } } ?>
          </select>
      </div>
<div class="form-group">
   <label>Tour Packages</label>
   <select class="form-control" id="t_pack" name="t_pack" required>
     <option value="">Select Tour Package</option>
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
   <label>Leads</label>
   <select class="form-control" id="leads" name="leads" required>
     <option value="">Select lead</option>
     <?php
      $sqlLeads = "SELECT * FROM tbl_vendor_leads";
      $rsLeads = $conn->query($sqlLeads);
      if($rsLeads->num_rows > 0){
        while($rowLeads = $rsLeads->fetch_assoc()){
      ?>
      <option value="<?= $rowLeads['l_p_id'] ?>"><?= $rowLeads['l_name'] ?></option>
     <?php } } ?>
   </select>
</div>
<div class="form-group">
   <label>Booked Date</label>
   <input type="date" class="form-control" id="b_date" name="b_date" required>
</div>
<div class="form-group">
  <label for="">Payment Term</label>
  <select class="form-control" name="p_term" required>
    <option value="">Select Payment Term</option>
    <option value="0">Payment Plan</option>
    <option value="1">Fully Paid</option>
  </select>
</div>

 <div class="button">
   <button class="btn green_btn" onclick="addCustomerInfo()">Submit</button>
    <!-- <a href="backend/add_customer.php" class="btn green_btn">Next</a> -->
 </div>

 </form>

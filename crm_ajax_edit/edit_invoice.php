<?php include '../backend/website/conn.php'; ?>

<?php
  $b_id = $_REQUEST['b_id'];
  $c_id = $_REQUEST['c_id'];

  $sqlInv = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
  $rsInv =$conn->query($sqlInv);
  if($rsInv->num_rows == 1){
    $rowInv = $rsInv->fetch_assoc();
  }

 ?>
 <input type="hidden" id="bid" name="" value="<?= $b_id ?>">
 <input type="hidden" id="cid" name="" value="<?= $c_id ?>">
<div class="row">
  <div class="col-lg-6">

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
                <option value="<?= $rowLeads['l_p_id'] ?>" <?php if ($rowInv['l_p_id'] == $rowLeads['l_p_id']): ?>
                  selected
                <?php endif; ?> ><?= $rowLeads['l_name'] ?></option>
               <?php } } ?>
             </select>
          </div>
  </div>
  <div class="col-lg-6">
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
                <option value="<?= $rowvendor['u_id'] ?>" <?php if ($rowInv['u_id'] == $rowvendor['u_id']): ?>
                  selected
                <?php endif; ?>><?= $rowvendor['u_name'] ?></option>
              <?php } } ?>
              </select>
          </div>
    <div class="form-group">
      <label for="">Payment Term</label>
      <select class="form-control" name="p_term" id="p_term" required>
        <option value="">Select Payment Term</option>
        <option value="0" <?php if($rowInv['pay_term'] == 0){ echo "selected"; } ?> >Payment Plan</option>
        <option value="1" <?php if($rowInv['pay_term'] == 1){ echo "selected"; } ?>>Fully Paid</option>
      </select>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="button">
      <button class="btn green_btn"  onclick="editInvoice()">Edit</button>
    </div>
  </div>
</div>
<hr>

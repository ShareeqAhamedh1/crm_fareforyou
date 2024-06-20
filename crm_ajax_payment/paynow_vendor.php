<?php include '../backend/website/conn.php';
$v_id=$_REQUEST['c_id'];
?>



<h5>One Time Payment</h5>
<hr>
      <div class="form-group">
        <label for="">Selected Supplier</label>
        <input type="text"class="form-control" name="" value="<?= getDataBack($conn,'tbl_vendor_det','v_id',$v_id,'v_name') ?>" disabled>
      </div>
      <div class="form-group">
        <input type="hidden" name="" id="v_id" value="<?= $v_id ?>">
         <label>Date</label>
         <input type="date" class="form-control" id="p_date" name="p_date" value="" required>
      </div>
      <div class="form-group">
         <label>Amount</label>
         <input type="text" class="form-control" id="p_amount" name="p_amount" value="" required>
      </div>
      <div class="form-group">
         <label>Payment Source</label>
         <select class="form-control" name="" id="pmethod_id">
          <?php $sqlPaymentType ="SELECT * FROM tbl_payment_method";
            $rsPaymentMethod = $conn->query($sqlPaymentType);
            if($rsPaymentMethod->num_rows > 0){
              while($rowPm = $rsPaymentMethod->fetch_assoc()){
           ?>
           <option value="<?= $rowPm['pm_id'] ?>"><?= $rowPm['pm_type'] ?>(<?= $rowPm['pm_ref'] ?>)</option>
         <?php } } ?>
         </select>
      </div>
      <div class="form-group">
         <label>Reference</label>
         <input name="name" class="form-control" id="desc">
      </div>
      <span style="color:#808017;font-weight:bold;display:none;" id="warning-text"> Reference Required </span>



<div class="button">
<button class="btn green_btn" onclick="submitPayNowVendor()">Pair With Invoice</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

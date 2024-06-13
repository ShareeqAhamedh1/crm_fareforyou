<?php include '../backend/website/conn.php';
$c_id=$_REQUEST['c_id'];
?>

<button class="btn btn-secondary btn-sm" onclick="goBackCustomers()">< Go Back</button>
<hr>

<h5>One Time Payment</h5>
<hr>
      <div class="form-group">
        <label for="">Selected Customer</label>
        <input type="text"class="form-control" name="" value="<?= getDataBack($conn,'tbl_customer_info','c_id',$c_id,'c_f_name') ?>" disabled>
      </div>
      <div class="form-group">
        <input type="hidden" name="" id="c_id" value="<?= $c_id ?>">
         <label>Date</label>
         <input type="date" class="form-control" id="p_date" name="p_date" value="" required>
      </div>
      <div class="form-group">
         <label>Amount</label>
         <input type="text" class="form-control" id="p_amount" name="p_amount" value="" required>
      </div>
      <div class="form-group">
         <label>Payment Type</label>
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
<button class="btn green_btn" onclick="submitPayNow()">Pair With Invoice</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

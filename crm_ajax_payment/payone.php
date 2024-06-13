<?php include '../backend/website/conn.php';
$p_id=$_REQUEST['p_id'];
$e_b_id=$_REQUEST['e_b_id'];
?>

  <h5>One Time Payment</h5>
  <hr>
      <div class="form-group">
        <input type="hidden" name="" id="e_b_id" value="<?= $e_b_id ?>">
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
         <label>reference</label>
         <textarea name="name" class="form-control" id="desc" rows="4" cols="80"></textarea>
      </div>


<div class="button">
<button class="btn green_btn" onclick="submitPayNow()">Submit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

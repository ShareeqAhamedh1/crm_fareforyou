<?php include '../backend/website/conn.php';
$vp_id = $_REQUEST['vp_id'];
$sqlRecipt = "SELECT * FROM tbl_vendor_pay WHERE vp_id='$vp_id'";
$rsRecipt =$conn->query($sqlRecipt);
if($rsRecipt->num_rows == 1){
  $rowRecipt = $rsRecipt->fetch_assoc();
  $v_id = $rowRecipt['v_id'];
  $p_type =$rowRecipt['pm_id'];
}
?>
    <input type="hidden" id="vp_id" name="" value="<?= $vp_id ?>">
      <div class="form-group">
        <label for="">Selected Supplier</label>
        <input type="text"class="form-control" name="" value="<?= getDataBack($conn,'tbl_vendor_det','v_id',$v_id,'v_name') ?>" disabled>
      </div>
      <div class="form-group">
         <label>Date</label>
         <input type="date" class="form-control" id="p_date" name="p_date" value="<?= $rowRecipt['pi_date'] ?>" required>
      </div>
      <div class="form-group">
         <label>Amount</label>
         <input type="text" class="form-control" id="p_amount" name="p_amount" value="<?= $rowRecipt['p_amount'] ?>" required>
      </div>
      <div class="form-group">
         <label>Payment Type</label>
         <select class="form-control" name="" id="pmethod_id">
          <?php $sqlPaymentType ="SELECT * FROM tbl_payment_method";
            $rsPaymentMethod = $conn->query($sqlPaymentType);
            if($rsPaymentMethod->num_rows > 0){
              while($rowPm = $rsPaymentMethod->fetch_assoc()){
           ?>
           <option value="<?= $rowPm['pm_id'] ?>" <?php if($p_type == $rowPm['pm_id']){ echo "selected"; } ?>><?= $rowPm['pm_type'] ?>(<?= $rowPm['pm_ref'] ?>)</option>
         <?php } } ?>
         </select>
      </div>
      <div class="form-group">
         <label>Reference</label>
         <input name="name" class="form-control" id="desc" value="<?= $rowRecipt['pi_description'] ?>">
      </div>
      <span style="color:#808017;font-weight:bold;display:none;" id="warning-text"> Reference Required </span>



<div class="button">
<button class="btn green_btn" onclick="editPayNow()">Edit Invoice</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

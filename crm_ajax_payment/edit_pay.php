<?php include '../backend/website/conn.php'; 
$p_id=$_REQUEST['p_id'];

$sqlPay="SELECT * FROM tbl_payment_setup WHERE ps_id='$p_id'";
$rsPay=$conn->query($sqlPay);
if($rsPay->num_rows == 1){
    $rowPay = $rsPay->fetch_assoc();
  }
?>

  <h5>Other Charges</h5>
  <hr>

  
      <div class="form-group">
        <input type="hidden" name="" id="ed_p_id" value="<?= $p_id ?>">
         <label>Date</label>
         <input type="date" class="form-control" id="ed_p_date" name="ed_p_date" value="<?= $rowPay['ps_date'] ?>" required>
      </div>
      <div class="form-group">
         <label>Amount</label>
         <input type="text" class="form-control" id="ed_p_amount" name="ed_p_amount" value="<?= $rowPay['ps_amount'] ?>" required>
      </div>
      
     


<div class="button">
<button class="btn green_btn" onclick="submitEditNow()">Edit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

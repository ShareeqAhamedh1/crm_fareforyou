<?php include '../backend/website/conn.php'; ?>
<?php
  $months = $_REQUEST['tot_months'];
  $tot_amount = $_REQUEST['total_amount'];
  $tot_depAmount = $_REQUEST['tot_depAmount'];
  $tot_amount = $tot_amount - $tot_depAmount;
 ?>
<div class="row">
  <div class="col-3">
    <input type="date" class="form-control" name="" id="defaultDate" value=""><br>
    <button type="button" onclick="setupDates()" class="btn-secondary btn-sm" name="button">Setup Date</button>
    <br><br>
  </div>
  <div class="col-3">
     <input type="text" class="form-control" placeholder="amount" name="" id="defaultAmount" value=""><br>
     <button type="button" onclick="setupAmount()" class="btn-secondary btn-sm" name="button">Setup Amount</button>
    <br><br>
  </div>
  <div class="col-6">
    <form class="" onsubmit="return finalizeSetup()" action="backend/add_payment_method.php" method="post">
      <input type="hidden" name="months" value="<?= $months ?>">
      <div class="row">
        <div class="col-6">
          <label for="">Deposite Date</label>
          <input type="date" name="date<?= $i ?>" class="form-control" id="date<?= $i ?>" value="">
        </div>
        <div class="col-6">
          <label for="">Deposite Amount</label>
          <input type="text" class="form-control" name="deposite_amount" id="depAmountForm" value="<?= $tot_depAmount ?>"> <br>
        </div>
      </div>
    <?php for ($i=1; $i <= $months; $i++) { ?>
    <div class="row">
      <div class="col-6">
        <input type="date" name="date<?= $i ?>" class="form-control" id="date<?= $i ?>" value="">
      </div>
      <div class="col-6">
        <input type="number" min="0" name="amount<?= $i ?>" placeholder="amount" class="form-control" id="amount<?= $i ?>" value="0" onkeyup="getData()"> <br>
      </div>
    </div>
  <?php } ?>
  <button type="submit" class="btn btn-warning btn-sm" name="button">Complete The Setup</button>
    </form>
  </div>
</div>
<script type="text/javascript">
function distributeAmount(){

  var tmonths = <?= $months ?>;
  var totAmountToBe = <?= $tot_amount ?>;
  var perMonth = parseFloat(totAmountToBe) / tmonths;
  for (var i = 1; i <= tmonths; i++) {
    var amount =document.getElementById('amount'+i).value = Math.floor(perMonth);
  }
}
distributeAmount();
getData();
</script>

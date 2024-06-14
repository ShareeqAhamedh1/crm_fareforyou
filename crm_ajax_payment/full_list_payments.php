<?php
include '../backend/website/conn.php';

if(!empty($_REQUEST)){
  $c_ids=array();
  $skey = $_REQUEST['searchKey'];
  $fromDate = $_REQUEST['i_fromDate'];
  $toDate = $_REQUEST['i_toDate'];

  $sqlSearchCustomer = "SELECT * FROM tbl_vendor_det WHERE v_name LIKE '$skey%' OR v_id LIKE '$skey%'";
  $rsSearchCustomer = $conn->query($sqlSearchCustomer);

  if($rsSearchCustomer->num_rows > 0){
    while($rowSC = $rsSearchCustomer->fetch_assoc()){
      array_push($c_ids,$rowSC['v_id']);
    }
  }

  $c_ids_string = implode(",", $c_ids);

  if(empty($_REQUEST['i_fromDate']) || empty($_REQUEST['i_toDate'])){
    $sqlCus = "SELECT * FROM tbl_vendor_pay WHERE v_id IN($c_ids_string) ORDER BY `tbl_vendor_pay`.`vp_id` DESC";
  }
  else{
    $sqlCus = "SELECT * FROM tbl_vendor_pay WHERE v_id IN($c_ids_string) AND pi_date BETWEEN '$fromDate' AND '$toDate' ORDER BY `tbl_vendor_pay`.`vp_id` DESC";
  }

}
else{
  $sqlCus = "SELECT * FROM tbl_vendor_pay ORDER BY `tbl_vendor_pay`.`vp_id` DESC";
}
?>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>ID</th>
         <th>Customer</th>
         <th>Amount</th>
         <th>Date</th>
         <th>Payment Type</th>
         <th>Description</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php

     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
          $cid = $rowCus['v_id'];
          $paytypeid = $rowCus['pm_id'];
          $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
          $payRef = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_ref');
         
       
     ?>
     <tr>
       <td>#RCP 000<?= htmlspecialchars($rowCus['vp_id']) ?></td>
       <td> <?= getDataBack($conn,'tbl_vendor_det','v_id',$cid,'v_name') ?>  </td>
       <td>£ <?= number_format($rowCus['p_amount'], 2, '.', ',') ?></td>
       <td><?= htmlspecialchars($rowCus['pi_date']) ?></td>
       <td><?= $paytype ?>(<?= $payRef ?>)</td>
       
       <td><?= htmlspecialchars($rowCus['pi_description']) ?></td>
       <td> 
            <button type="button" onclick="delPayment(<?= $rowCus['vp_id'] ?>)" class="btn btn-danger btn-sm" name="button">Delete</button> |
            <button type="button" onclick="openEditPaymentModal(<?= $rowCus['vp_id'] ?>)" class="btn btn-warning btn-sm" name="button">Edit</button>
        </td>
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

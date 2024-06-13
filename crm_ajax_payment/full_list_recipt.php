<?php
include '../backend/website/conn.php';

if(!empty($_REQUEST)){
  $c_ids=array();
  $skey = $_REQUEST['searchKey'];
  $fromDate = $_REQUEST['i_fromDate'];
  $toDate = $_REQUEST['i_toDate'];

  $sqlSearchCustomer = "SELECT * FROM tbl_customer_info WHERE c_f_name LIKE '$skey%' OR c_l_name LIKE '$skey%' OR c_email LIKE '$skey%' OR c_phone_no LIKE '$skey%'";
  $rsSearchCustomer = $conn->query($sqlSearchCustomer);

  if($rsSearchCustomer->num_rows > 0){
    while($rowSC = $rsSearchCustomer->fetch_assoc()){
      array_push($c_ids,$rowSC['c_id']);
    }
  }

  $c_ids_string = implode(",", $c_ids);

  if(empty($_REQUEST['i_fromDate']) || empty($_REQUEST['i_toDate'])){
    $sqlCus = "SELECT * FROM tbl_customer_pay WHERE c_id IN($c_ids_string) ORDER BY `tbl_customer_pay`.`cp_id` DESC";
  }
  else{
    $sqlCus = "SELECT * FROM tbl_customer_pay WHERE c_id IN($c_ids_string) AND pi_date BETWEEN '$fromDate' AND '$toDate' ORDER BY `tbl_customer_pay`.`cp_id` DESC";
  }

}
else{
  $sqlCus = "SELECT * FROM tbl_customer_pay ORDER BY `tbl_customer_pay`.`cp_id` DESC";
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
         <th>Status</th>
         <th>Description</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php

     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
          $cid = $rowCus['c_id'];
          $paytypeid = $rowCus['pm_id'];
          $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
          $payRef = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_ref');
          $cpid = $rowCus['cp_id'];
          $sqlStatus ="SELECT * FROM tbl_set_off_invoice WHERE cp_id='$cpid'";
          $rsStatus = $conn->query($sqlStatus);
          $countStat =$rsStatus->num_rows;
          if($countStat > 0){
            $statRec = "Paired";
            $styleRec ="color:#09bd84;font-weight:bold;";
          }
          else{
            $statRec = "Not Paired";
            $styleRec ="color:grey;font-weight:bold;";
          }
     ?>
     <tr>
       <td>#RCP 000<?= htmlspecialchars($rowCus['cp_id']) ?></td>
       <td> <?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name') ?>  </td>
       <td>£ <?= number_format($rowCus['pi_amount'], 2, '.', ',') ?></td>
       <td><?= htmlspecialchars($rowCus['pi_date']) ?></td>
       <td><?= $paytype ?>(<?= $payRef ?>)</td>
       <td style="<?= $styleRec ?>"> <?= $statRec ?> </td>
       <td><?= htmlspecialchars($rowCus['pi_description']) ?></td>
       <td> <a href="recipt/paidinvoice.php?id=<?= $rowCus['cp_id'] ?>" target="_blank" class="btn btn-primary btn-sm">Download Payment Recipt</a> |
            <button type="button" onclick="delRecipt(<?= $rowCus['cp_id'] ?>)" class="btn btn-danger btn-sm" name="button">Delete</button> |
            <button type="button" onclick="openEditReciptModal(<?= $rowCus['cp_id'] ?>)" class="btn btn-warning btn-sm" name="button">Edit</button>
        </td>
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

<?php
include '../backend/website/conn.php';
$cid = $conn->real_escape_string(trim($_REQUEST['c_id']));
?>
<h4>Payment Details Of <?= getDataBack($conn,'tbl_vendor_det','v_id',$cid,'v_name') ?> </h4>
<hr>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>ID</th>
         <th>Amount</th>
         <th>Description</th>
         <th>Date</th>
         <th>Payment Type</th>
         <th>Status</th>
         <th>Action</th>
         <th>Pair</th>
      </tr>
   </thead>
   <tbody>
     <?php

     $sqlCus = "SELECT * FROM tbl_customer_pay
                WHERE c_id =$cid";
     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
          $paytypeid = $rowCus['pm_id'];
          $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
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
       <td>#RCP 001<?= htmlspecialchars($rowCus['cp_id']) ?></td>
       <td>£ <?= number_format($rowCus['pi_amount'], 2, '.', ',') ?></td>
       <td><?= htmlspecialchars($rowCus['pi_description']) ?></td>
       <td><?= htmlspecialchars($rowCus['pi_date']) ?></td>
       <td><?= $paytype ?></td>
       <td style="<?= $styleRec ?>"> <?= $statRec ?> </td>
       <td> <a href="recipt/paidinvoice.php?id=<?= $rowCus['cp_id'] ?>" target="_blank" class="btn btn-warning btn-sm">Download Payment Recipt</a> </td>
       <td>
         <?php if($countStat > 0){ ?>
           <a class="btn btn-primary btn-sm"  style="color:#fff;">Paired</a>

         <?php }else{ ?>
           <a href="invoice_pair.php?cid=<?= $rowCus['c_id'] ?>&cp_id=<?= $rowCus['cp_id'] ?>" class="btn btn-primary btn-sm">Pair With Invoice</a>
         <?php } ?>
        </td>
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

<?php
include '../backend/website/conn.php';
$cid = $conn->real_escape_string(trim($_REQUEST['c_id']));
?>
<h4>Payment Details Of <?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name') ?> </h4>
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
            $stat=0;
            $styleRec ="color:#09bd84;font-weight:bold;";
          }
          else{
            $statRec = "Not Paired";
            $stat=1;
            $styleRec ="color:grey;font-weight:bold;";
          }
     ?>
     <tr>
       <td>#RCP 000<?= htmlspecialchars($rowCus['cp_id']) ?></td>
       <td>£ <?= number_format($rowCus['pi_amount'], 2, '.', ',') ?></td>
       <td><?= htmlspecialchars($rowCus['pi_description']) ?></td>
       <td><?= htmlspecialchars($rowCus['pi_date']) ?></td>
       <td><?= $paytype ?></td>
       <td style="<?= $styleRec ?>"> <?= $statRec ?> </td>
       <td> <a href="recipt/paidinvoice.php?id=<?= $rowCus['cp_id'] ?>" target="_blank" class="btn btn-warning btn-sm">Download Payment Recipt</a> </td>
         <td>
         <?php if ($stat==1) {
            
            ?>
            <a href="#" onclick="pairPaymnet(<?= $rowCus['cp_id'] ?>,<?= $cid ?>)"  class="btn btn-info btn-sm">Pair Payment</a>
            <?php
          } ?>
         </td>
     
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

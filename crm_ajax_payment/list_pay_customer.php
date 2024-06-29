<?php
include '../backend/website/conn.php';
$cid = $conn->real_escape_string(trim($_REQUEST['c_id']));
?>
<h4>Payment Details Of <?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name') ?> </h4>
<hr>
<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead class="back_table_color">
        <tr class="info">
           <th>ID</th>
           <th>Amount</th>
           <th>Description</th>
           <th>Date</th>
           <th>Payment Type</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       <?php

       $sqlCus = "SELECT * FROM tbl_payments_to_customer
                  WHERE c_id =$cid";
       $rsCus = $conn->query($sqlCus);
       if($rsCus->num_rows > 0){
          while($rowCus = $rsCus->fetch_assoc()){
            $paytypeid = $rowCus['pm_id'];
            $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
            $pc_id = $rowCus['pc_id'];

       ?>
       <tr>
         <td>#PTC 000<?= htmlspecialchars($rowCus['pc_id']) ?></td>
         <td>£ <?= number_format($rowCus['pc_amount'], 2, '.', ',') ?></td>
         <td><?= htmlspecialchars($rowCus['pc_description']) ?></td>
         <td><?= htmlspecialchars($rowCus['pc_date']) ?></td>
         <td><?= $paytype ?></td>
         <td> <a href="recipt/payment_recipt.php?id=<?= $rowCus['pc_id'] ?>" target="_blank" class="btn btn-warning btn-sm">Download Payment Recipt</a> </td>
       </tr>
     <?php
          }
       }
     ?>
     </tbody>
  </table>
</div>

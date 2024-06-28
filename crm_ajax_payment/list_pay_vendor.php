<?php
include '../backend/website/conn.php';
$vid = $conn->real_escape_string(trim($_REQUEST['c_id']));
?>
<button type="button" class="btn btn-secondary btn-sm" onclick="goBackVendor()" name="button"> < Search New Supplier</button>
<hr>
<h4>Payment Details Of <?= getDataBack($conn,'tbl_vendor_det','v_id',$vid,'v_name') ?> </h4>
<hr>
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

     $sqlCus = "SELECT * FROM tbl_vendor_pay
                WHERE v_id =$vid";
     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
          $paytypeid = $rowCus['pm_id'];
          $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
          $vpid = $rowCus['vp_id'];
          $sqlStatus ="SELECT * FROM tbl_set_off_invoice WHERE cp_id='$vpid'";
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
       <td>#SUP 00<?= htmlspecialchars($rowCus['vp_id']) ?></td>
       <td>£ <?= number_format($rowCus['p_amount'], 2, '.', ',') ?></td>
       <td><?= htmlspecialchars($rowCus['pi_description']) ?></td>
       <td><?= htmlspecialchars($rowCus['pi_date']) ?></td>
       <td><?= $paytype ?></td>

       <td><button type="button" onclick="delSup(<?= $rowCus['vp_id'] ?>,<?= $vid ?>)" class="btn btn-danger btn-sm" name="button">Delete</button> </td>

     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

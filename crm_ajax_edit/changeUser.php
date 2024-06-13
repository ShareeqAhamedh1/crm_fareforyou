<?php
  include '../backend/website/conn.php';
  $bid = $_REQUEST['c_bid'];
 ?>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Customer Name</th>
         <th>Phone Number</th>
         <th>Email</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php
     $skey = $conn->real_escape_string($_REQUEST['c_s_key']);
     $sqlCus = "SELECT * FROM tbl_customer_info
                WHERE c_f_name LIKE '%$skey%'
                OR c_l_name LIKE '%$skey%'
                OR c_email LIKE '%$skey%'
                OR c_phone_no LIKE '%$skey%'";
     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
          $customerId = $rowCus['c_id'];
     ?>
     <tr>
       <td><?= htmlspecialchars($rowCus['c_f_name'] . " " . $rowCus['c_l_name']) ?></td>
       <td><?= htmlspecialchars($rowCus['c_email']) ?></td>
       <td><?= htmlspecialchars($rowCus['c_phone_no']) ?></td>
       <td>
         <button type="button"
         onclick="changeCustomer(<?= $bid ?>,<?= $customerId ?>)"
         class="btn btn-warning btn-sm"> Change </button>
       </td>
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>

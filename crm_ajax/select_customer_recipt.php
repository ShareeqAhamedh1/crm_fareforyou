<?php
include '../backend/website/conn.php';
$skey = $conn->real_escape_string(trim($_REQUEST['s_key']));
?>
<h4>Customers List</h4>
<hr>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="">Search Customer</label>
      <input type="text" class="form-control" name="" id="skey" value="" autofocus>
      <hr>
      <button type="button" class="btn btn-warning" name="button" onclick="loadCustoemrs()">Search</button>
    </div>
  </div>
</div>
<?php if ($skey != ""): ?>
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

     $sqlCus = "SELECT * FROM tbl_customer_info
                WHERE c_f_name LIKE '%$skey%'
                OR c_l_name LIKE '%$skey%'
                OR c_email LIKE '%$skey%'
                OR c_phone_no LIKE '%$skey%'";
     $rsCus = $conn->query($sqlCus);
     if($rsCus->num_rows > 0){
        while($rowCus = $rsCus->fetch_assoc()){
     ?>
     <tr>
       <td><?= htmlspecialchars($rowCus['c_f_name'] . " " . $rowCus['c_l_name']) ?></td>
       <td><?= htmlspecialchars($rowCus['c_email']) ?></td>
       <td><?= htmlspecialchars($rowCus['c_phone_no']) ?></td>
       <td>
         <button type="button"
         onclick="issueRecipt(<?= $rowCus['c_id'] ?>)"
         class="btn btn-warning btn-sm"> Issue Recipt </button>
       </td>
     </tr>
   <?php
        }
     }
   ?>
   </tbody>
</table>


<?php endif; ?>

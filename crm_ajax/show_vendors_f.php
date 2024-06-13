<?php include '../backend/website/conn.php'; ?>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Vendor</th>
         <th>Overview</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php
      $sqlvendor = "SELECT * FROM tbl_vendor_flights";
      $rsvendor = $conn->query($sqlvendor);
      if($rsvendor->num_rows > 0){
        while($rowvendor = $rsvendor->fetch_assoc()){
      ?>
     <tr>
       <td><?= $rowvendor['f_v_name'] ?></td>
       <td><?= $rowvendor['f_v_overview'] ?></td>
       <td>
         <button type="button"
         onclick="delVenDetails(<?= $rowvendor['f_id'] ?>)"
         class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button>
       </td>
     </tr>
   <?php } } ?>
   </tbody>
</table>

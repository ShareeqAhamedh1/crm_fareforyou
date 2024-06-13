<?php include '../backend/website/conn.php'; ?>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Category</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php
      $sqlCat = "SELECT * FROM tbl_package_cat";
      $rsCat = $connWeb->query($sqlCat);
      if($rsCat->num_rows > 0){
        while($rowCat = $rsCat->fetch_assoc()){
          $icon = $rowCat['pc_icon'];
      ?>
     <tr>
       <td><?= $rowCat['pc_name'] ?></td>
       <td>
         <button type="button"
         onclick="editCatDetails(<?= $rowCat['pc_id'] ?>)"
         class="btn btn-warning btn-sm" ><i class="fa fa-pencil"></i> </button>
         <button type="button"
         onclick="delCatDetails(<?= $rowCat['pc_id'] ?>,'<?= $icon ?>')"
         class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button>
       </td>
     </tr>
   <?php } } ?>
   </tbody>
</table>

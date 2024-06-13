<?php include '../backend/website/conn.php'; ?>
<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Package Title</th>
         <th>Duration</th>
         <th>Package Overview</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
     <?php
      $sqlTourPackage = "SELECT * FROM tbl_tour";
      $rsTourPackage = $conn->query($sqlTourPackage);
      if($rsTourPackage->num_rows > 0){
        while($rowTour = $rsTourPackage->fetch_assoc()){
      ?>
     <tr>
       <td><?= $rowTour['tr_title'] ?></td>
       <td><?= $rowTour['tr_duration'] ?> Nights</td>
       <td><?= $rowTour['tr_description'] ?></td>
       <td>
         <button type="button"
         onclick="delPackageDetails(<?= $rowTour['tr_id'] ?>)" 
         class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button>
       </td>
     </tr>
   <?php } } ?>
   </tbody>
</table>

<?php
include '../backend/website/conn.php';
 ?>

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">

         <th>Destinations</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
     <?php
      $pack_id = $_SESSION['pack_insert_id'];

      $sql = "SELECT * FROM tbl_destinations WHERE pack_id='$pack_id'";
      $rs = $connWeb->query($sql);

      if ($rs->num_rows > 0) {
          while ($row = $rs->fetch_assoc()) {
              $destination = $row['destination'];
              $id = $row['d_id']; ?>
      <tr>

         <td><?= $destination ?></td>
         <td>
            <!-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button> -->
            <button onclick="setRowId(<?= $id ?>, 'destination')" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
         </td>
      </tr>
      <?php
          }}
       ?>
   </tbody>
</table>

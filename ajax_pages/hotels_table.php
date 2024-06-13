<?php
include '../backend/website/conn.php';
 ?>

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">

         <th>Hotels</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
     <?php
      $pack_id = $_SESSION['pack_insert_id'];

      $sql = "SELECT * FROM tbl_hotels WHERE pack_id='$pack_id'";
      $rs = $connWeb->query($sql);

      if ($rs->num_rows > 0) {
          while ($row = $rs->fetch_assoc()) {
              $include = $row['hotel'];
              $id = $row['h_id']; ?>
      <tr>

         <td><?= $include ?></td>
         <td>
            <!-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button> -->
            <button onclick="setRowId(<?= $id ?>, 'hotel')" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
         </td>
      </tr>
      <?php
          }}
       ?>
   </tbody>
</table>

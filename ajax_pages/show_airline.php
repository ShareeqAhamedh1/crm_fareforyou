<?php include '../backend/website/conn.php'; ?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">

         <th>Airline Name</th>
         <th>Airline Code</th>
         <th>Airline Country</th>
         <th>Action</th>

      </tr>
   </thead>
   <tbody>
     <?php
     $sql="SELECT * FROM tbl_airlines";
     $rs=$connWeb->query($sql);

     if($rs->num_rows>0){
      while($rows=$rs->fetch_assoc()){
          $id=$rows['al_id'];

     ?>


      <tr>

         <td><?= $rows['al_name'] ?></td>
         <td><?= $rows['al_code'] ?></td>
         <td><?= $rows['al_country'] ?></td>
         <td>
            <button type="button" class="btn btn-add btn-sm" onclick="showAirlineEdit(<?= $id ?>)"><i class="fa fa-pencil"></i></button>
        <button type="button" onclick="deleteAirline(<?= $id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
            <i class="fa fa-trash-o"></i> 
        </button>
         </td>
      </tr>
     <?php  }
     } ?>
   </tbody>
</table>
</div>
</div>
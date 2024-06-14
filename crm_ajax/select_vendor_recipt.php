<?php
include '../backend/website/conn.php';
$skey = $conn->real_escape_string(trim($_REQUEST['s_key']));
?>
<h4>Supplier List</h4>
<hr>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="">Search Supplier</label>
      <input type="text" class="form-control" name="" id="skey" value="" autofocus>
      <hr>
      <button type="button" class="btn btn-warning" name="button" onclick="loadVendors()">Search</button>
    </div>
  </div>
</div>
<?php if ($skey != ""): ?>
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead class="back_table_color">
        <tr class="info">
           <th>Vendor Name</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       <?php
         $sql ="SELECT * FROM tbl_vendor_det WHERE v_name LIKE '%$skey%'";
         $rs =$conn->query($sql);

         if($rs->num_rows > 0){
           while($row = $rs->fetch_assoc()){
        ?>
       <tr>
         <td><?= htmlspecialchars($row['v_name']) ?></td>
         <td>
           <button type="button"
           onclick="issueReciptVendors(<?= $row['v_id'] ?>)"
           class="btn btn-warning btn-sm"> Pay Now </button>
         </td>
       </tr>
     <?php } } ?>
     </tbody>
  </table>


<?php endif; ?>

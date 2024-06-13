<?php include("layouts/header.php"); ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Packages</h1>
                  <small>Package List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">

                               <div class="card-body">
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="btn-group d-flex" role="group">
                                          <div class="buttonexport" id="buttonlist">
                                             <a class="btn btn-add" href="add_packages.php"> <i class="fa fa-plus"></i> Add Packages
                                             </a>
                                          </div>
                                       </div>

                                       <div class="table-responsive">

                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>Title</th>
                                                   <th>Price</th>
                                                   <th>Duration</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                $sql = "SELECT * FROM tbl_packages ORDER BY `tbl_packages`.`pack_id` DESC";
                                                $rs = $connWeb->query($sql);

                                                if ($rs->num_rows > 0) {
                                                    while ($row = $rs->fetch_assoc()) {
                                                        $pack_title = $row['pack_title'];
                                                        $price = $row['price'];
                                                        $duration = $row['duration'];
                                                        $image = $row['image'];
                                                        $id =  $row['pack_id'] ?>
                                                <tr>
                                                   <td><?= $pack_title ?></td>
                                                   <td><?= $price ?></td>
                                                   <td><?= $duration ?></td>
                                                   <td>
                                                      <!-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button> -->
                                                      <button type="button" onclick="setRowId(<?= $id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                      <a href="multi_images_package.php?id=<?= $id ?>" class="btn btn-warning btn-sm"> Add more images</a>
                                                      <a href="package_list_details.php?id=<?= $id ?>" class="btn btn-info btn-sm"> Add/View Details</a>
                                                   </td>
                                                </tr>
                                                <?php }} ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </div>
                       </div>
               </div>

               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Record</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                       <div class="row">
                                             <div class="col-md-12 form-group user-form-group">
                                                <label class="control-label">Delete Record</label>
                                                <div class="float-right">
                                                  <input type="hidden" id="deleteRowId">
                                                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                                   <button type="button" onclick="deleteRow()" data-dismiss="modal" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         <script type="text/javascript">

         function setRowId(rowId) {
            document.getElementById('deleteRowId').value = rowId;
            console.log(rowId);
         }

         function deleteRow() {

             var rowId = document.getElementById('deleteRowId').value;
           url = 'backend/website/del_package.php';

           $.ajax({
               type: 'GET',
               url: url, // Replace with the actual URL to process the form
               data: { id: rowId}, // Pass the input value as data
               success: function(response) {
                   if (response == 200) {
                     location.reload();
                   }else{
                     console.log(response)
                   }
               }
            })


           // Close the modal
           $('#delModal').modal('hide');
         }

         </script>
         <?php include("layouts/footer.php"); ?>

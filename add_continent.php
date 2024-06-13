<?php include("layouts/header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Continent</h1>
                  <small>Add Continent</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-header all_card_btn">
                             <div class="card-title custom_title">
                              <!-- <a class="btn btn-add" href="pack_list.php"><i class="fa fa-list"></i> >Add deal packages </a> -->

                              <?php
                                 if(isset($_SESSION['continent_added'])){
                                    echo '<small>Continent Successfully added</small>';
                                    unset($_SESSION['continent_added']);
                                 }
                              ?>
                              <?php
                                 if(isset($_SESSION['continent_not_added'])){
                                    echo '<small>Error adding Continent</small>';
                                    unset($_SESSION['continent_not_added']);
                                 }
                              ?>
                             </div>
                         </div>
                         <div id="info">
                           <div class="card-body">
                                <div class="form-group">
                                   <label>Continent Name</label>
                                   <input id="continent_name" type="text" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="reset-button">
                                   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                   <a onClick="submitContinent()" class="btn btn-success"> Save</a>
                                </div>
                           </div>
                        </div>
                     </div>
                 </div>
               </div>
                              </section>
            <!-- /.content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">

                               <div class="card-body">
                              
                                       <div class="table-responsive">

                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Continent Name</th>
                                                   <th>Action</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                               $sql="SELECT * FROM tbl_continent";
                                               $rs=$connWeb->query($sql);

                                               if($rs->num_rows>0){
                                                while($rows=$rs->fetch_assoc()){
                                                    $id=$rows['continent_id'];

                                               ?>


                                                <tr>

                                                   <td><?= $rows['continent_name'] ?></td>

                                                   <td>
                                                      <!-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button> -->
                                                      <button type="button" onclick="setRowId(<?= $id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                               <?php  }
                                               } ?>
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
         </div>



<?php include("layouts/footer.php"); ?>


<script type="text/javascript">

function submitContinent() {
    var continent_name = $('#continent_name').val();

    $.ajax({
        type: 'POST',
        url: 'backend/website/add_continent.php',
        data: { continent_name: continent_name },
        success: function(resp) {
            if (resp == 200) {

                location.reload();
            } else {
                console.log(resp);

                location.reload();
            }
        }
    });
}

function setRowId(rowId) {
            document.getElementById('deleteRowId').value = rowId;
            console.log(rowId);
         }

         function deleteRow() {

             var rowId = document.getElementById('deleteRowId').value;
           url = 'backend/website/del_continent.php';

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

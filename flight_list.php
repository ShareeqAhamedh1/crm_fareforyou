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
                  <h1>Flights</h1>
                  <small>Flight List</small>
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
                                             <a class="btn btn-add" href="add_flight.php"> <i class="fa fa-plus"></i> Add Flights
                                             </a>
                                          </div>
                                       </div>
                                       <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="table-responsive">

                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>Image</th>
                                                   <th>Fly From</th>
                                                   <th>Fly To</th>
                                                   <th>Price From</th>
                                                   <th>Continent</th>
                                                   <th>Country</th>
                                                   <th>Class</th>
                                                   <th>Deal Status</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                $sql = "SELECT * FROM tbl_flights";
                                                $rs = $connWeb->query($sql);

                                                if ($rs->num_rows > 0) {
                                                    while ($row = $rs->fetch_assoc()) {
                                                        $from = $row['fly_from'];
                                                        $fly_to = $row['fly_to'];
                                                        $fly_price = $row['fly_price'];
                                                        $id =  $row['flight_id'] ;
                                                        $country_id= $row['country_id'];
                                                        $continent_id=$row['continent_id'];
                                                        $f_dealz = $row['f_dealz'];
                                                        $al_id = $row['airline_id'];
                                                        $classId = $row['class_id'];
                                                        $classText="blank";
                                                        if($classId == 1){
                                                          $classText="Economy";
                                                        }
                                                        else if($classId == 2){
                                                          $classText="Premium Economy";
                                                        }
                                                        else if($classId == 3){
                                                          $classText="Business";
                                                        }
                                                        else if($classId == 4){
                                                          $classText="First Class";
                                                        }

                                                        $alimageName=getDataBack($connWeb,'tbl_airlines','al_id',$al_id,'al_image');

                                                        $sqlCountry = "SELECT * FROM tbl_country WHERE country_id LIKE '$country_id' ";
                                                        $rsCountry = $connWeb->query($sqlCountry);
                                                        $rowCountry = $rsCountry->fetch_assoc();

                                                        $sqlContinenty = "SELECT * FROM tbl_continent WHERE continent_id LIKE '$continent_id' ";
                                                        $rsContinenty = $connWeb->query($sqlContinenty);
                                                        $rowContinenty = $rsContinenty->fetch_assoc();

                                                        ?>


                                                <tr>
                                                   <td><img src="backend/website/airline_images/<?= $alimageName ?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                   <td><?= $from ?></td>
                                                   <td><?= $fly_to ?></td>
                                                   <td><?= $fly_price ?></td>
                                                   <td><?= $rowContinenty['continent_name'] ?></td>
                                                   <td><?= $rowCountry['country_name']  ?></td>
                                                   <td><?= $classText ?></td>
                                                   <td>
                                                      <select class="form-control" name="" onchange="updateDealz(this.value,<?= $id ?>)">
                                                        <option value="0" <?php if($f_dealz == 0){ echo "selected"; } ?>>No Dealz</option>
                                                        <option value="1" <?php if($f_dealz == 1){ echo "selected"; } ?>>Dealz</option>
                                                      </select>
                                                    </td>
                                                   <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="loadFlightData(<?= $id ?>)" data-toggle="modal" data-target="#editFlight"><i class="fa fa-pencil"></i></button>
                                                      <button type="button" onclick="setRowId(<?= $id ?>)" class="btn btn-danger btn-sm"
                                                        data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
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

               <!-- Delete Flight -->
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

               <div class="modal fade" id="editFlight"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Flight Record</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" id="loadFlightData">

                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         <script type="text/javascript">

         function loadFlightData(id){
           $('#loadFlightData').load('crm_ajax_flight_edit/edit_details.php',{
             fid:id
           });
         }

         function setRowId(rowId) {
            document.getElementById('deleteRowId').value = rowId;
            console.log(rowId);
         }

         function updateDealz(st,fid){
           $.ajax({
            url:'backend/website/updateDealz.php',
            method:'POST',
            data:{
              status:st,
              id:fid
            },
            success:function(resp){
              console.log(resp);
            }
           });
         }

         function deleteRow() {

             var rowId = document.getElementById('deleteRowId').value;
           url = 'backend/website/del_flight.php';

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

         function editFlights(){

           var id = $('#id').val();
           var flyFrom = $('#flyFrom').val();
           var flyTo = $('#flyTo').val();
           var priceFrom = $('#priceFrom').val();
           var imageFile = $('#flight_image')[0].files[0];
           var country=$('#country').val();
           var continent=$('#continent').val();

           var formData = new FormData();

           formData.append('id', id);
           formData.append('flyFrom', flyFrom);
           formData.append('flyTo', flyTo);
           formData.append('priceFrom', priceFrom);
           formData.append('flight_image', imageFile);
           formData.append('continent', continent);
           formData.append('country', country);

                  $.ajax({
                      type: 'POST',
                      url: 'backend/website/edit_flights.php', // Replace with the actual URL to process the form
                      data: formData,
                      contentType: false,
                      processData: false,// Pass the input value as data
                      success: function(response) {
                          if (response == 200) {
                            // console.log(response);
                            location.reload();
                          }else{
                            // console.log(response);
                            location.reload();
                          }
                      }
                   })
       	}

         </script>
         <?php include("layouts/footer.php"); ?>

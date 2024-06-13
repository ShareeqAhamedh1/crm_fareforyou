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
                  <h1>Add Flight</h1>
                  <small>Add Flight</small>
               </div>
            </section>
            <!-- Main content -->
            <div class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-header all_card_btn">
                             <div class="card-title custom_title">
                              <!-- <a class="btn btn-add" href="pack_list.php"><i class="fa fa-list"></i> >Add deal packages </a> -->
                              <?php
                                  if (isset($_SESSION['flight_added'])) {
                                      echo '<small>FLight Successfully added</small>';
                                      unset($_SESSION['flight_added']);
                                  }
                              ?>
                              <?php
                                  if (isset($_SESSION['flight_not_added'])) {
                                      echo '<small>Error adding flight details</small>';
                                      unset($_SESSION['flight_not_added']);
                                  }
                              ?>
                             </div>
                         </div>
                         <div id="info">
                           <div class="card-body">
                                <div class="form-group">
                                   <label>Fly From</label>
                                   <input id="flyFrom" type="text" class="form-control" placeholder="Ex:Dubai To" required>
                                </div>
                                <div class="form-group">
                                   <label>Fly To</label>
                                   <input id="flyTo" type="text" class="form-control" placeholder="Ex:London" required>
                                </div>
                                <div class="form-group">
                                   <label>Price From</label>
                                   <input id="priceFrom" type="text" class="form-control" placeholder="Ex:200" required>
                                </div>
                                <div class="form-group">
                                   <label>Continent</label>
                                   <select id="continent" class="form-control" name="continent">
                                        <option value="0">Select a Continent</option>
                                        <?php
                                          $sql="SELECT * FROM tbl_continent";
                                          $rs=$connWeb->query($sql);

                                          if($rs->num_rows>0){
                                             while($rows=$rs->fetch_assoc()){
                                                ?>

                                                <option value=<?= $rows['continent_id'] ?> > <?= $rows['continent_name'] ?></option>
                                                <?php
                                             }
                                          }
                                        ?>
                                        </select>
                                 </div>
                                <div class="form-group">
                                   <label>Country</label>
                                   <select id="country" class="form-control" name="country">
                                        <option value="0">Select a Country</option>
                                        <?php
                                        $sqlCountry = "SELECT * FROM tbl_country";
                                        $rsCountry=$connWeb->query($sqlCountry);

                                        if($rsCountry->num_rows>0){
                                          while($rowsCountry=$rsCountry->fetch_assoc()){
                                             ?>

                                          <option value=<?= $rowsCountry['country_id'] ?>><?= $rowsCountry['country_name'] ?></option>
                                             <?php
                                          }
                                        }
                                        ?>
                                      </select>
                                 </div>
                                 <div class="form-group">
                                   <label>Class</label>
                                   <select name="alclass" id="alclass" class="form-control">
                                        <option value="1">Economy</option>
                                        <option value="2">Premium Economy</option>
                                        <option value="3">Business</option>
                                        <option value="4">First Class</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <label>Airline</label>
                                   <select name="airline" id="airline" class="form-control">
                                        <?php
                                            $sqlAl = "SELECT * FROM tbl_airlines";
                                            $rsAl = $connWeb->query($sqlAl);
                                            if($rsAl->num_rows > 0){
                                                while($rowAl = $rsAl->fetch_assoc()){
                                        ?>
                                        <option value="<?= $rowAl['al_id'] ?>"><?= $rowAl['al_name'] ?></option>
                                        <?php } } ?>
                                   </select>
                                </div>
                                <div class="reset-button">
                                   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                   <a onClick="submitFlight()" class="btn btn-success"> Save</a>
                                </div>
                           </div>
                        </div>
                     </div>
                 </div>
               </div>
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         <!-- delete modal-content -->
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
                                            <input type="hidden" id="deleteRowType">
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
 <?php include("layouts/footer.php"); ?>

 <script type="text/javascript">


function submitFlight() {
    var flyFrom = $('#flyFrom').val();
    var flyTo = $('#flyTo').val();
    var priceFrom = $('#priceFrom').val();
    var airline = $('#airline').val();
    var country = $('#country').val();
    var continent = $('#continent').val();
    var alclass = $('#alclass').val();

    // Validation
    if (!flyFrom || !flyTo || !priceFrom || !airline || !country || !continent || !alclass) {
        // If any of the fields are empty, show an error message and return
        swal({
            title: "Error!",
            text: "Please fill in all fields.",
            icon: "error",
            button: "OK",
        });
        return;
    }

    var formData = new FormData();

    formData.append('flyFrom', flyFrom);
    formData.append('flyTo', flyTo);
    formData.append('priceFrom', priceFrom);
    formData.append('airline', airline);
    formData.append('continent', continent);
    formData.append('country', country);
    formData.append('alclass', alclass);

    $.ajax({
        type: 'POST',
        url: 'backend/website/add_flight.php', // Replace with the actual URL to process the form
        data: formData,
        contentType: false,
        processData: false, // Pass the input value as data
        success: function(response) {
            if (response == 200) {
                location.reload();
            } else {
                console.log(response);
                // Handle error response here if needed
                location.reload();
            }
        }
    });
}





 </script>

<?php include("layouts/header.php"); ?>
<div id="loading-overlay">
  <div class="spinner"></div>
</div>
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
                                   <label>Airline Code</label>
                                   <input id="al_code" type="text" class="form-control" placeholder="Ex:EK" required>
                                </div>
                                <div class="form-group">
                                   <label>Airline Name</label>
                                   <input id="al_name" type="text" class="form-control" placeholder="Ex:Emirates" required>
                                </div>                                
                                <div class="form-group">
                                   <label>Airline Country</label>
                                   <input id="al_country" type="text" class="form-control" placeholder="Ex:America" required>
                                </div>
                                <div class="form-group">
                                   <label>Airline Image</label>
                                   <input id="al_image" type="file" class="form-control" required>
                                   <small>Size: 200 X 300</small>
                                </div>
                                
                                <div class="reset-button">
                                   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                   <a onClick="addAirline()" class="btn btn-success"> Add</a>
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

                               <div class="card-body" id="show_airline">
                              
                                </div>
                       </div>
               </div>

            </section>
         </div>

         <div class="modal fade" id="showEditAirline"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body" id="loadAirline">
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

<?php include("layouts/footer.php"); ?>
<script>

function showAirlineEdit(id){
    $('#showEditAirline').modal('show');
    $('#loadAirline').load('crm_ajax_flight_edit/airline_edit.php',{
        a_id:id
    });
}

$('#show_airline').load('ajax_pages/show_airline.php');
function addAirline() {
    var al_code = document.getElementById('al_code').value;
    var al_name = document.getElementById('al_name').value;
    var al_country = document.getElementById('al_country').value;
    var al_image = document.getElementById('al_image').files[0]; // Get the file object

    // Validation
    if (!al_code || !al_name || !al_country || !al_image) {
        swal({
            title: "Error!",
            text: "Please fill in all fields and select an image.",
            icon: "error",
            button: "OK",
        });
        return; // Exit the function if validation fails
    }

    var formData = new FormData(); // Create FormData object
    formData.append('al_code', al_code); // Append other form data
    formData.append('al_name', al_name);
    formData.append('al_country', al_country);
    formData.append('al_image', al_image, al_image.name); // Append the image file

    // Display loading overlay
    var overlay = document.createElement('div');
    overlay.classList.add('loading-overlay');
    document.body.appendChild(overlay);

    // Display confirmation dialog
    swal({
        title: "Are you sure?",
        text: "You want to add this airline?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willAdd) => {
        if (willAdd) {
            // If user confirms, proceed with AJAX request
            $.ajax({
                url: 'backend/addAirline.php', // Specify the URL to which you want to send the data
                method: 'POST',
                data: formData, // Pass FormData object as data
                contentType: false, // Set contentType to false, FormData will automatically set it
                processData: false, // Set processData to false, FormData will automatically process it
                success: function(resp){
                    $('#show_airline').load('ajax_pages/show_airline.php');
                    // Remove loading overlay after upload is complete
                    document.body.removeChild(overlay);
                    // Clear all input fields
                    document.getElementById('al_code').value = '';
                    document.getElementById('al_name').value = '';
                    document.getElementById('al_country').value = '';
                    document.getElementById('al_image').value = '';
                }
            });
        } else {
            // If user cancels, remove loading overlay and do nothing
            document.body.removeChild(overlay);
            swal("Action canceled!", {
                icon: "info",
            });
        }
    });
}

function deleteAirline(id) {
    swal({
        title: "Are you sure?",
        text: "You want to Delete airline?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: 'backend/delAirline.php',
                method: 'POST',
                data: {
                    del_id: id
                },
                success: function(resp) {
                    if (resp == 200) {
                        swal("Airline removed!", {
                            icon: "info",
                        })
                        .then(() => {
                            $('#show_airline').load('ajax_pages/show_airline.php');
                        });
                    }
                    else{
                        console.log(resp);
                    }
                }
            });
        } else {
            // If user cancels, do nothing
            swal("Action canceled!", {
                icon: "info",
            });
        }
    });
}


function editAirline() {
    var id = document.getElementById('e_id').value;
    var al_code = document.getElementById('e_al_code').value;
    var al_name = document.getElementById('e_al_name').value;
    var al_country = document.getElementById('e_al_country').value;
    var al_image = document.getElementById('e_al_image').files[0]; // Get the file object

    // Validation for required fields
    if (!al_code || !al_name || !al_country) {
        swal({
            title: "Error!",
            text: "Please fill in all required fields.",
            icon: "error",
            button: "OK",
        });
        return; // Exit the function if validation fails
    }

    var formData = new FormData(); // Create FormData object
    formData.append('al_id', id);
    formData.append('al_code', al_code); // Append other form data
    formData.append('al_name', al_name);
    formData.append('al_country', al_country);

    // If an image is selected, append it to the form data
    if (al_image) {
        formData.append('al_image', al_image, al_image.name);
    }

    // Display loading overlay
    var overlay = document.createElement('div');
    overlay.classList.add('loading-overlay');
    document.body.appendChild(overlay);

    // Display confirmation dialog
    swal({
        title: "Are you sure?",
        text: "You want to Edit this airline?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willAdd) => {
        if (willAdd) {
            // If user confirms, proceed with AJAX request
            $.ajax({
                url: 'backend/editAirline.php', // Specify the URL to which you want to send the data
                method: 'POST',
                data: formData, // Pass FormData object as data
                contentType: false, // Set contentType to false, FormData will automatically set it
                processData: false, // Set processData to false, FormData will automatically process it
                success: function(resp) {
                    $('#showEditAirline').modal('hide');
                    $('#show_airline').load('ajax_pages/show_airline.php');
                    // Remove loading overlay after upload is complete
                    document.body.removeChild(overlay);
                }
            });
        } else {
            // If user cancels, remove loading overlay and do nothing
            document.body.removeChild(overlay);
            swal("Action canceled!", {
                icon: "info",
            });
        }
    });
}




</script>


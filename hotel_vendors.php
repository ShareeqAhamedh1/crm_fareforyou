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
                  <h1>Add Packages</h1>
                  <small>Add deal packages</small>
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
                                  if (isset($_SESSION['pack_insert_id'])) {
                                      echo '<small>Package Successfully added</small>';
                                      unset($_SESSION['pack_insert_id']);
                                  }
                              ?>
                             </div>
                         </div>
                         <div id="info">

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

  $('#info').load('ajax_pages/add_packs.php');

  function submitPack(){

    var pack_title = $('#pack_title').val();
    var pack_price = $('#pack_price').val();
    var pack_duration = $('#pack_duration').val();
    var pack_overview = $('#pack_overview').val();
    var imageFile = $('#pack_image')[0].files[0];

    var formData = new FormData();

    formData.append('pack_title', pack_title);
    formData.append('pack_price', pack_price);
    formData.append('pack_duration', pack_duration);
    formData.append('pack_overview', pack_overview);
    formData.append('pack_image', imageFile);

           $.ajax({
               type: 'POST',
               url: 'backend/website/add_basic.php', // Replace with the actual URL to process the form
               data: formData,
               contentType: false,
               processData: false,// Pass the input value as data
               success: function(response) {
                   if (response == 200) {
                     $('#info').load('ajax_pages/add_includes.php');
                   }else{
                     console.log(response)
                   }
               }
            })
	}

  function setRowId(rowId,type) {
     document.getElementById('deleteRowId').value = rowId;
     document.getElementById('deleteRowType').value = type;
     console.log(rowId);
     console.log(type);
  }

  function deleteRow() {

    var rowId = document.getElementById('deleteRowId').value;
    var type = document.getElementById('deleteRowType').value;
    var url ='';
    var load='';
    if(type=="include"){
      loadfile = 'ajax_pages/add_includes.php'
      url = 'backend/website/del_include.php';
    }else if (type=="hotel") {
      loadfile = 'ajax_pages/add_hotels.php'
      url = 'backend/website/del_hotel.php';
    }else if (type=="extra") {
      loadfile = 'ajax_pages/add_extras.php'
      url = 'backend/website/del_extra.php';
    }else if (type=="destination") {
      loadfile = 'ajax_pages/add_destinations.php'
      url = 'backend/website/del_destination.php';
    }

    $.ajax({
        type: 'GET',
        url: url, // Replace with the actual URL to process the form
        data: { id: rowId}, // Pass the input value as data
        success: function(response) {
            if (response == 200) {
              $('#info').load(loadfile);
              $('#delModal').modal('hide');
            }else{
              console.log(response)
            }
        }
     })


    // Close the modal
    $('#delModal').modal('hide');
  }

 </script>

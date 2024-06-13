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
                  <h1>Add Packages Category</h1>
               </div>
            </section>
            <!-- Main content -->
            <div class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-6">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-body">
                              <div class="form-group">
                                 <label>Category Name</label>
                                 <input id="c_name" type="text" class="form-control" placeholder="Title" required>
                              </div>
                              <div class="form-group">
                                <label for="">Icon</label>
                                <input type="file" id="icon_cat" name="icon_cat" class="form-control" value="">
                              </div>

                              <div class="reset-button">
                                 <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                 <a onClick="addCat()" class="btn btn-success"> Add</a>
                              </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6" id="show_cat">

                 </div>
               </div>
            </div>
            <!-- /.content --><br><br><br>
         </div>
         <!-- /.content-wrapper -->
         <div class="modal fade" id="showCatDetails"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body" id="loadCatDetails">
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
 <?php include("layouts/footer.php"); ?>

 <script type="text/javascript">

    function editCatDetails(id){
      $('#showCatDetails').modal('show');
      $('#loadCatDetails').load('crm_ajax/cat_details.php',{ pc_id:id });
    }

    function editCat(){
      var pc_id_edit = document.getElementById('pc_id_edit').value;
      var c_name = document.getElementById('c_name_edit').value;
      var icon_cat = document.getElementById('icon_cat_edit').files[0]; // Get the file

      var formData = new FormData(); // Create FormData object
      formData.append('pc_id', pc_id_edit); // Append form data
      formData.append('e_c_name', c_name); // Append form data
      formData.append('icon_cat', icon_cat); // Append file

      $.ajax({
        url:'backend/edit_cat.php',
        method:'POST',
        data: formData, // Use FormData object
        contentType: false, // Disable contentType
        processData: false, // Disable processData
        success:function(resp){
            if(resp == 200){
              $('#show_cat').load('crm_ajax/show_cat.php');
              alert('Successfully Changed');
            }
            else {
              console.log(resp);
            }
        }
      });
    }

    $('#show_cat').load('crm_ajax/show_cat.php');
    //add package
    function addCat(){
      var c_name = document.getElementById('c_name').value;
      var icon_cat = document.getElementById('icon_cat').files[0]; // Get the file

      var formData = new FormData(); // Create FormData object
      formData.append('e_c_name', c_name); // Append form data
      formData.append('icon_cat', icon_cat); // Append file

      $.ajax({
        url:'backend/add_cat.php',
        method:'POST',
        data: formData, // Use FormData object
        contentType: false, // Disable contentType
        processData: false, // Disable processData
        success:function(resp){
            if(resp == 200){
              document.getElementById('c_name').value = "";
              $('#show_cat').load('crm_ajax/show_cat.php');
              alert('Successfully Added');
            }
            else {
              console.log(resp);
            }
        }
      });
    }
    //end of add package

    // --------------------------------------
    // delete package
    function delCatDetails(id,img){
      if(confirm('Are you sure you want  to delete the package category?')){
        $.ajax({
          url:'backend/del_cat.php',
          method:'POST',
          data:{
            del_id:id,
            icon:img
          },
          success:function(resp){
              if(resp == 200){
                $('#show_cat').load('crm_ajax/show_cat.php');
                alert('Successfully Deleted');
              }
              else {
                console.log(resp);
              }
          }
        });
      }
    }
 </script>

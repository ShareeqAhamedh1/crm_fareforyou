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
                  <h1>Add Flights Vendors</h1>
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
                                 <label>Vendor Name</label>
                                 <input id="v_name" type="text" class="form-control" placeholder="Title" required>
                              </div>
                              <div class="form-group">
                                 <label>Vendor Description</label>
                                 <textarea id="v_overview" class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="reset-button">
                                 <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                 <a onClick="addVendor()" class="btn btn-success"> Add</a>
                              </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6" id="show_vendors">

                 </div>
               </div>
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

 <?php include("layouts/footer.php"); ?>

 <script type="text/javascript">
    $('#show_vendors').load('crm_ajax/show_vendors_f.php');
    //add package
    function addVendor(){
      var v_name = document.getElementById('v_name').value;
      var v_overview = document.getElementById('v_overview').value;

      $.ajax({
        url:'backend/add_vendor_f.php',
        method:'POST',
        data:{
          e_v_name:v_name,
          e_v_overview:v_overview
        },
        success:function(resp){
            if(resp == 200){
              document.getElementById('v_name').value = "";
              document.getElementById('v_overview').value="";
              $('#show_vendors').load('crm_ajax/show_vendors_f.php');
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
    function delVenDetails(id){
      if(confirm('Are you sure you want  to delete the package?')){
        $.ajax({
          url:'backend/del_ven_f.php',
          method:'POST',
          data:{
            del_id:id
          },
          success:function(resp){
              if(resp == 200){
                $('#show_vendors').load('crm_ajax/show_vendors_f.php');
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

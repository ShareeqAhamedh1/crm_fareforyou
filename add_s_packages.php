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
                  <div class="col-sm-6">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-body">
                              <div class="form-group">
                                 <label>Package title</label>
                                 <input id="pack_title" type="text" class="form-control" placeholder="Title" required>
                              </div>
                              <div class="form-group">
                                 <label>Duration</label>
                                 <input id="pack_duration" type="text" class="form-control" placeholder="Duration" required>
                              </div>
                              <div class="form-group">
                                 <label>Package Overview</label>
                                 <textarea id="pack_overview" class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="reset-button">
                                 <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                 <a onClick="submitPack()" class="btn btn-success"> Add</a>
                              </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6" id="show_t_pack">

                 </div>
               </div>
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

 <?php include("layouts/footer.php"); ?>

 <script type="text/javascript">
    $('#show_t_pack').load('crm_ajax/show_tour_pack.php');
    //add package
    function submitPack(){
      var pack_title = document.getElementById('pack_title').value;
      var pack_duration = document.getElementById('pack_duration').value;
      var pack_overview = document.getElementById('pack_overview').value;

      $.ajax({
        url:'backend/add_package_s.php',
        method:'POST',
        data:{
          e_pack_title:pack_title,
          e_pack_duration:pack_duration,
          e_pack_overview:pack_overview
        },
        success:function(resp){
            if(resp == 200){
              document.getElementById('pack_title').value="";
              document.getElementById('pack_duration').value="";
              document.getElementById('pack_overview').value="";
              $('#show_t_pack').load('crm_ajax/show_tour_pack.php');
              swal("Added", "Tour Package Added To Database", "success");
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
    function delPackageDetails(id){
      if(confirm('Are you sure you want  to delete the package?')){
        $.ajax({
          url:'backend/del_package_s.php',
          method:'POST',
          data:{
            del_id:id
          },
          success:function(resp){
              if(resp == 200){
                $('#show_t_pack').load('crm_ajax/show_tour_pack.php');
              }
              else {
                console.log(resp);
              }
          }
        });
      }
    }
 </script>

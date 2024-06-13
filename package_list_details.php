<?php

include("layouts/header.php");

if (isset($_SESSION['pack_insert_id'])) {
       $id = $_SESSION['pack_insert_id'];
       if(isset($_REQUEST['id'])){
         if($_REQUEST['id'] != $_SESSION['pack_insert_id']){
            $_SESSION['pack_insert_id'] = $_REQUEST['id'];
           $id = $_SESSION['pack_insert_id'];
         }
       }
}
else{
    $_SESSION['pack_insert_id'] = $_REQUEST['id'];
  $id = $_SESSION['pack_insert_id'];
}

// if (isset($_SESSION['u_id'])) {
//    $u_id = $_SESSION['u_id'];
//    if(isset($_REQUEST['u_id'])){
//      if($_REQUEST['u_id'] != $_SESSION['u_id']){
//        $_SESSION['u_id'] = $_REQUEST['u_id'];
//        $u_id = $_SESSION['u_id'];
//      }
//    }
// }
// else{
// $_SESSION['u_id'] = $_REQUEST['u_id'];
// $u_id = $_SESSION['u_id'];
// }
?>
       <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Invoice Details of Inv 000<?= $id ?></h1>
                  <small>Invoice Data</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 card bg-primary">
                    <a href="#" onclick="include()">
                     <div class="card-body text-center">
                        <p class="card-text">Includes</p>
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="extra()">
                     <div class="card-body text-center">
                      <p class="card-text">Extra</p>
                     </div>
                     </a>
                  </div>

                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="hotel()">
                     <div class="card-body text-center">
                      <p class="card-text">Hotels</p>
                     </div>
                     </a>
                  </div>
                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="packCat()">
                     <div class="card-body text-center">
                      <p class="card-text">Categories</p>
                     </div>
                     </a>
                  </div>
               </div>

            </div>


            <div class="content" >
               <div class="row">
                 <div class="col-sm-4">
                    <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">

                    <div class="card-body" id="info_load_add_packages">

                   </div>

                    </div>
                 </div>
                 <!-- Add Data -->
                 <div class="col-sm-8">
                    <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">

                       <div class="card-body">

                             <div id="info_load_view_packages">

                             </div>

                       </div>
                    </div>
                 </div>
                 <!-- view data -->
               </div>
            </div>
            </section>

                  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-pencil m-r-5"></i> Edit Package</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           </div>
                        <div class="modal-body" id="load_edit_data">
                     </div>
                  </div>
                  <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
            </div>

            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>

     
         <script type="text/javascript">

        $('#info_load_add_packages').load('crm_ajax_packages/includes.php');
         $('#info_load_view_packages').load('crm_ajax_packages/view_includes.php');
         

         function addIncludes() {
                            var includes = document.getElementById('include').value;
                            $.ajax({
                                url: 'backend/add_includes.php',
                                method: 'POST',
                                data: {
                                    e_includes: includes
                                },
                                success: function(resp) {
                                    if (resp === '200') { 
                                        document.getElementById('include').value = ""; 
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_includes.php');
                                        $('#info_load_add_packages').load('crm_ajax_packages/includes.php');
                                        swal("Added", "Includes Added", "success");
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error here if necessary
                                    console.error(xhr, status, error);
                                }
                            });
                        }
                        function addCat() {
                            var p_cat_name = document.getElementById('p_cat_name').value;
                            $.ajax({
                                url: 'backend/website/add_cat_web.php',
                                method: 'POST',
                                data: {
                                    add_p_cat_name: p_cat_name
                                },
                                success: function(resp) {
                                    if (resp === '200') { 
                                        document.getElementById('p_cat_name').value = ""; 
                                        $('#info_load_view_packages').load('crm_ajax_packages/viewCat.php');
                                        swal("Added", "Categories Added", "success");
                                    }
                                    else{
                                        console.log(resp);
                                    }
                                }
                            });
                        }


                        function addExtras() {
                            var extra = document.getElementById('extra').value;
                            $.ajax({
                                url: 'backend/add_extras.php',
                                method: 'POST',
                                data: {
                                    e_extra: extra
                                },
                                success: function(resp) {
                                    if (resp === '200') { 
                                        document.getElementById('extra').value = ""; 
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_extras.php');
                                        $('#info_load_add_packages').load('crm_ajax_packages/extras.php');
                                        swal("Added", "Extras Added", "success");
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error here if necessary
                                    console.error(xhr, status, error);
                                }
                            });

                        }


                        function addHotels() {
                            var h_name = document.getElementById('h_name').value;
                            var h_desc = document.getElementById('h_desc').value;
                            var h_l_link = document.getElementById('h_l_link').value;
                            var h_o_link = document.getElementById('h_o_link').value;
                            var h_rating = document.getElementById('h_rating').value;
                            
                            $.ajax({
                                url: 'backend/add_hotels_packages.php',
                                method: 'POST',
                                data: {
                                    e_h_name: h_name,
                                    e_h_desc:h_desc,
                                    e_h_l_link:h_l_link,
                                    e_h_o_link:h_o_link,
                                    e_h_rating:h_rating
                                },
                                success: function(resp) {
                                    if (resp === '200') { 
                                        document.getElementById('h_name').value = ""; 
                                        document.getElementById('h_desc').value = ""; 
                                        document.getElementById('h_l_link').value = ""; 
                                        document.getElementById('h_o_link').value = ""; 
                                        document.getElementById('h_rating').value = ""; 
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_hotels.php');
                                        $('#info_load_add_packages').load('crm_ajax_packages/hotels.php');
                                        swal("Added", "Hotel Added", "success");
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error here if necessary
                                    console.error(xhr, status, error);
                                }
                            });
                        }

                        function delInclude(id){
                            if(confirm('Are you sure you want to delete Includes?')){
                                $.ajax({
                                url:'backend/del_includes.php',
                                method:'POST',
                                data:{
                                    del_id:id
                                },
                                success:function(resp){
                                    if(resp == 200){
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_includes.php');
                                    }
                                }
                                });
                            }
                            }

                            function delHotel(id){
                            if(confirm('Are you sure you want to delete hotel?')){
                                $.ajax({
                                url:'backend/del_hotels_packages.php',
                                method:'POST',
                                data:{
                                    del_id:id
                                },
                                success:function(resp){
                                    if(resp == 200){
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_hotels.php');
                                    }
                                }
                                });
                            }
                            }

                            function delExtra(id){
                            if(confirm('Are you sure you want to delete extras?')){
                                $.ajax({
                                url:'backend/del_extras.php',
                                method:'POST',
                                data:{
                                    del_id:id
                                },
                                success:function(resp){
                                    if(resp == 200){
                                        $('#info_load_view_packages').load('crm_ajax_packages/view_extras.php');
                                    }
                                }
                                });
                            }
                            }
                            function delCat(id){
                            if(confirm('Are you sure you want to delete categories?')){
                                $.ajax({
                                url:'backend/website/del_cat_web.php',
                                method:'POST',
                                data:{
                                    del_id:id
                                },
                                success:function(resp){
                                    if(resp == 200){
                                        $('#info_load_view_packages').load('crm_ajax_packages/viewCat.php');
                                    }
                                }
                                });
                            }
                            }
                            


                                function openIncludeEditModal(id){
                                    $('#editModal').modal('show');
                                    $('#load_edit_data').load('crm_ajax_packages_edit/includes.php',{ i_id:id });
                                    }

                                    function openExtraEditModal(id){
                                    $('#editModal').modal('show');
                                    $('#load_edit_data').load('crm_ajax_packages_edit/extras.php',{ e_id:id });
                                    }

                                    function openHotelEditModal(id){
                                    $('#editModal').modal('show');
                                    $('#load_edit_data').load('crm_ajax_packages_edit/hotels.php',{ h_id:id });
                                    }



                                function editIncludes(){
                                    var include = document.getElementById('e_include').value;
                                    var i_id =document.getElementById('i_id').value;
                                        $.ajax({
                                            url:'backend/edit_includes.php',
                                            method:'POST',
                                            data:{
                                                e_include:include,
                                                e_i_id:i_id

                                            },
                                            success:function(resp){
                                                if(resp == 200){
                                                    $('#info_load_view_packages').load('crm_ajax_packages/view_includes.php');
                                                     $('#info_load_add_packages').load('crm_ajax_packages/includes.php');
                                                $('#editModal').modal('hide');
                                                swal("Changed", "Includes Changed", "success");  }
                                                else {
                                                console.log(resp);
                                                }
                                            }
                                        });
                                    }

                                    function editExtras(){
                                    var extra = document.getElementById('e_extra').value;
                                    var e_id =document.getElementById('e_id').value;
                                        $.ajax({
                                            url:'backend/edit_extras.php',
                                            method:'POST',
                                            data:{
                                                e_extra:extra,
                                                e_e_id:e_id

                                            },
                                            success:function(resp){
                                                if(resp == 200){
                                                    $('#info_load_view_packages').load('crm_ajax_packages/view_extras.php');
                                            $('#info_load_add_packages').load('crm_ajax_packages/extras.php');
                                                $('#editModal').modal('hide');
                                                swal("Changed", "Extras Changed", "success");  }
                                                else {
                                                console.log(resp);
                                                }
                                            }
                                        });
                                    }

                                    function editHotel(){
                                    var h_desc = document.getElementById('e_h_desc').value;
                                    var h_name = document.getElementById('e_h_name').value;
                                    var h_id =document.getElementById('h_id').value;
                                    var h_l_link = document.getElementById('e_h_l_link').value;
                                    var h_o_link = document.getElementById('e_h_o_link').value;
                                    var h_rating =document.getElementById('e_h_rating').value;
                                    
                                        $.ajax({
                                            url:'backend/edit_hotels_packages.php',
                                            method:'POST',
                                            data:{
                                                e_h_desc:h_desc,
                                                e_h_name:h_name,
                                                h_id:h_id,
                                                e_h_l_link:h_l_link,
                                                e_h_o_link:h_o_link,
                                                e_h_rating:h_rating

                                            },
                                            success:function(resp){
                                                if(resp == 200){
                                                    $('#info_load_view_packages').load('crm_ajax_packages/view_hotels.php');
                                            $('#info_load_add_packages').load('crm_ajax_packages/hotels.php');
                                                $('#editModal').modal('hide');
                                                swal("Changed", "Hotel Changed", "success");  }
                                                else {
                                                console.log(resp);
                                                }
                                            }
                                        });
                                    }


                function include() {
                         $('#info_load_view_packages').load('crm_ajax_packages/view_includes.php');
                        $('#info_load_add_packages').load('crm_ajax_packages/includes.php');
                
                }

                function extra() {
                         $('#info_load_view_packages').load('crm_ajax_packages/view_extras.php');
                         $('#info_load_add_packages').load('crm_ajax_packages/extras.php');
                 }

                 function hotel() {
                         $('#info_load_view_packages').load('crm_ajax_packages/view_hotels.php');
                         $('#info_load_add_packages').load('crm_ajax_packages/hotels.php');
                 }
                 function packCat() {
                         $('#info_load_view_packages').load('crm_ajax_packages/viewCat.php');
                         $('#info_load_add_packages').load('crm_ajax_packages/addCat.php');
                 }
                 

            </script>
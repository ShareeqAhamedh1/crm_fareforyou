<?php

include("layouts/header.php");

if (isset($_SESSION['b_id'])) {
       $b_id = $_SESSION['b_id'];
       if(isset($_REQUEST['b_id'])){
         if($_REQUEST['b_id'] != $_SESSION['b_id']){
           $_SESSION['b_id'] = $_REQUEST['b_id'];
           $b_id = $_SESSION['b_id'];
         }
       }
}
else{
  $_SESSION['b_id'] = $_REQUEST['b_id'];
  $b_id = $_SESSION['b_id'];
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
  <input type="text" id="bid_home" value="<?= $b_id ?>">
       <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Invoice Details of Inv 000<?= $b_id ?></h1>
                  <small>Invoice Data</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 card bg-primary">
                    <a href="#" onclick="flights()">
                     <div class="card-body text-center">
                        <p class="card-text" style="color:#fff;">Flights</p>
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="hotels()">
                     <div class="card-body text-center">
                      <p class="card-text" style="color:#fff;">Hotels</p>
                     </div>
                     </a>
                  </div>

                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="tours()">
                     <div class="card-body text-center">
                      <p class="card-text" style="color:#fff;">Transfers</p>
                     </div>
                     </a>
                  </div>

                  <div class="col-lg-3 card bg-primary">
                     <a href="#" onclick="other()">
                     <div class="card-body text-center">
                      <p class="card-text" style="color:#fff;">Other Services</p>
                     </div>
                     </a>
                  </div>
               </div>

            </div>

            <div class="content" >
               <div class="row">
                 <div class="col-sm-12">
                    <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">

                    <div class="card-body" id="info_load">

                   </div>

                   <div class="container-fluid">
                     <div id="info_load_data">

                     </div>
                     <div id="flight_pnr">

                     </div>
                    <div id="save_draft_button">

                    </div>
                   </div>

                    </div>
                 </div>
                 <!-- Add Data -->

                 <!-- view data -->
               </div>
            </div>
            </section>

                  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-pencil m-r-5"></i> Edit</h3>
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

         <script type="text/javascript" src="assets/invoice.js?v=1.04">  </script>

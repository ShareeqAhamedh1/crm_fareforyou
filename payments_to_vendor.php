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
                  <h1>Add Hotel Vendors</h1>
               </div>
            </section>
            <!-- Main content -->
            <div class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-8">
                    <div class="table-responsive">
                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                             <thead class="back_table_color">
                                <tr class="info">
                                   <th>Vendors</th>
                                   <th>Flight Payments</th>
                                   <th>Hotel Payments</th>
                                   <th>Transfers Payments</th>
                                   <th>Other Service</th>
                                   <th>Balance to be paid</th>
                                   <th>Total Paid</th>
                                   <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                               <?php
                                $sql ="SELECT * FROM tbl_vendor_det";
                                $rs = $conn->query($sql);
                                if($rs->num_rows > 0){
                                  while($row = $rs->fetch_assoc()){
                                ?>
                                <tr>
                                  <td> <?= $row['v_name'] ?>  </td>
                                  <td></td>
                                </tr>
                              <?php } } ?>

                             </tbody>
                          </table>
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

 </script>

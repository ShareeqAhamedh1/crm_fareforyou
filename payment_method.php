<?php include("layouts/header.php");

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
                  <h1>Payment Method</h1>
                  <small>Manage Payment Method</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Invoices</h4>
                                   </div>
                               </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <form class="" action="backend/add_paymethod.php" method="post">
                                      <div class="form-group">
                                        <label for="">Payment Method</label>
                                        <input type="text" class="form-control" name="p_meth" value="">
                                      </div>
                                      <div class="form-group">
                                        <label for="">Bank</label>
                                        <div class="form-group">
                                          <input type="text" name="p_desc" class="form-control" >
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary" name="button">Add</button>
                                    </form>
                                  </div>

                                  <div class="col-lg-8">
                                    <div class="table-responsive">
                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>Payment Method</th>
                                                   <th>Description</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                $sql="SELECT * FROM tbl_payment_method";
                                                $rs=$conn->query($sql);
                                                if($rs->num_rows > 0){
                                                  while($rowPay = $rs->fetch_assoc()){
                                                ?>
                                               <tr>
                                                 <td><?= $rowPay['pm_type'] ?></td>
                                                 <td><?= $rowPay['pm_ref'] ?></td>
                                                 <td> <a href="backend/remove_ptype.php?id=<?= $rowPay['pm_id'] ?>" class="btn btn-danger btn-sm">Remove</a> </td>
                                               </tr>
                                             <?php } } ?>

                                             </tbody>
                                          </table>
                                       </div>
                                  </div>
                                </div>
                              </div>
                           </div>
                        </div>
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>


         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>

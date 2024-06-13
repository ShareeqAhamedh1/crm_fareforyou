<?php include("layouts/header.php"); ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-usd"></i>
               </div>
               <div class="header-title">
                  <h1>Income expense comparesion</h1>
                  <small>Income expense comparesion details</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 col-sm-12 col-md-12 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <div class="btn-group buttonexport d-flex" role="group">
                                          <h4>Income expense comparesion</h4>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-body card_card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Income details</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Expense details</a>
                                       </li>
                                    </ul>
                                    <!-- Tab panels -->
                                    <div class="tab-content mycontent" id="myTabContent">
                                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                             <table class="table table-bordered table-striped table-hover">
                                                   <thead class="back_table_color">
                                                      <tr class="info">
                                                         <th>Total Income</th>
                                                         <th>Total Income This Month</th>
                                                         <th>Total Income This Week</th>
                                                         <th>Total amount</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>$ 12,480.00</td>
                                                         <td>$ 2,41.00</td>
                                                         <td>$ 1,05.00</td>
                                                         <td>$ 9,658.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>$ 12,480.00</td>
                                                         <td>$ 2,41.00</td>
                                                         <td>$ 1,05.00</td>
                                                         <td>$ 9,658.00</td>
                                                      </tr>
                                                   </tbody>
                                                   <tfoot>
                                                      <tr>
                                                         <th>Total $ 12,480.00</th>
                                                         <th>Total $ 564.00</th>
                                                         <th>Total $ 054.00</th>
                                                         <th>Total $ 8541.00</th>
                                                      </tr>
                                                   </tfoot>
                                                </table>
                                          </div>
                                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                             <table class="table table-bordered table-striped table-hover">
                                                   <thead class="back_table_color">
                                                      <tr class="info">
                                                         <th>Total expense</th>
                                                         <th>Total expense This Month</th>
                                                         <th>Total expense This Week</th>
                                                         <th>Total amount</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>$ 12,480.00</td>
                                                         <td>$ 2,41.00</td>
                                                         <td>$ 1,05.00</td>
                                                         <td>$ 9,658.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>$ 12,480.00</td>
                                                         <td>$ 2,41.00</td>
                                                         <td>$ 1,05.00</td>
                                                         <td>$ 9,658.00</td>
                                                      </tr>
                                                   </tbody>
                                                   <tfoot>
                                                      <tr>
                                                         <th>Total $ 12,94.00</th>
                                                         <th>Total $ 784.00</th>
                                                         <th>Total $ 954.00</th>
                                                         <th>Total $ 741.00</th>
                                                      </tr>
                                                </table>
                                          </div>
                                        </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </section>
               </div>
            <!-- /.content -->
         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>
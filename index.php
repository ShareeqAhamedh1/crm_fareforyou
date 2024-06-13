<?php include("layouts/header.php"); ?>

         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>CRM Admin Dashboard</h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class=" col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">0</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Client</h3>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?= $_SESSION['u_id'] ?></span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Admin</h3>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number">0</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Expenses</h3>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">4</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Running Campaign</h3>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-6 pinpin">
                      <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                          <div class="card-header">
                              <div class="card-title custom_title">
                                 <h4>Campaigns Running</h4>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="work-touchpoint">
                                 <div class="work-touchpoint-date">
                                    <span class="day">17th</span>
                                    <span class="month">Jan</span>
                                 </div>
                              </div>
                              <div class="detailswork">
                                 <span class="label-custom label label-default float-right">Meta</span>
                                 <a href="#" title="headings">Disney Land Paris</a> <br>
                                 <p>Running</p>
                              </div>

                           </div>
                      </div>
                  </div>
                  <div class="col-lg-6 pinpin">
                      <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                          <div class="card-header">
                              <div class="card-title custom_title">
                                    <h4>Notice Board</h4>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="Workslist">
                                 <div class="worklistdate">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Notice</th>
                                             <th>Published By</th>
                                             <th>Date Added</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="info1">
                                             <td>Matthew Trained</td>
                                             <td>IT TEAM</td>
                                             <td>20th Feb 2024</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                      </div>
                  </div>
              </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
        <?php include 'layouts/footer.php'; ?>

<?php include 'layouts/header.php';
  $uid = $_SESSION['u_id'];
?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
               <div class="header-title">
                  <h1>Profile</h1>
                  <small>Your Informations</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="card">
                        <div class="card-header custom_profile_head justify-content-center text-center">
                           <div class="card-header-headshot">
                                 <img src="assets/dist/img/avatar3.png"  class="rounded-circle" alt="">
                           </div>
                        </div>
                        <?php $utype = getDataBack($conn,'tbl_users','u_id',$uid,'u_acc_level'); ?>
                        <div class="card-content">
                           <div class="card-content-member text-center">
                              <h4 class="mt-0"><?= getDataBack($conn,'tbl_users','u_id',$uid,'u_name') ?></h4>
                              <p class="mt-0"><?= userType($utype) ?></p>
                           </div>
                        </div>
                        <div class="footer">
                           <div class="card-footer-stats">
                              <div>
                                 <p>Leads Handled:</p>
                                 <i class="fa fa-users"></i><span> 0</span>
                              </div>
                              <div>
                                 <p>MESSAGES:</p>
                                 <i class="fa fa-inbox"></i><span> 0</span>
                              </div>
                              <div>
                                 <p>Last online</p>
                                 <span class="stats-small">Just Now</span>
                              </div>
                           </div>
                           <div class="card-footer-message">
                              <h4><i class="fa fa-comments"></i> Message me</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                    <form class="form-horizontal" action="backend/edit_user_pass.php" method="POST">
                       <div class="row">
                        <input type="hidden" name="uid" value="<?= $uid ?>" id="">
                         <div class="col-md-6 form-group">
                            <label class="control-label">Current Password</label>
                            <input type="password" placeholder="Password" class="form-control" name="user_c_pass">
                   
                                 <?php if(isset($_SESSION['er_pass'])){ ?>
                                    <div class="alert-danger col-md-6">
                                    <p >Invalid Password</p>
                                    </div>
                                 <?php unset($_SESSION['er_pass']); } ?>
 
                         </div>
                          <!-- Text input-->
                          <div class="col-md-6 form-group">
                             <label class="control-label">Password</label>
                             <input type="password" placeholder="Password" class="form-control" name="user_n_pass">
                          </div>
                          <div class="col-md-12 form-group user-form-group">
                             <button type="submit" class="btn btn-add btn-sm">Update</button>
                          </div>
                       </div>
                    </form>
                  </div>

               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include 'layouts/footer.php'; ?>

         
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
                  <h1>Add Customer</h1>
                  <small>Customer list</small>
               </div>
            </section>
            <!-- Main content -->
            <div class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-header all_card_btn">
                             <div class="card-title custom_title">
                              <a class="btn btn-add" href="clist.php"><i class="fa fa-list"></i> Customer List </a>  
                             </div>
                         </div>
                         <div class="card-body">
                           <form class="col-sm-6">
                              <div class="form-group">
                                 <label>First Name</label>
                                 <input type="text" class="form-control" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" placeholder="Enter last Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Mobile</label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile" required>
                              </div>
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="old_picture">
                              </div>
                              <div class="form-group">
                                 <label>Bank details</label>
                                 <input type="text" class="form-control" placeholder="Enter Bank details" required>
                              </div>
                              <div class="form-group">
                                 <label>Passport</label>
                                 <input type="text" class="form-control" placeholder="Enter Passport details" required>
                              </div>
                              <div class="form-group">
                                 <label>Facebook Id</label>
                                 <input type="text" class="form-control" placeholder="Enter Facebook details" required>
                              </div>
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <input id='minMaxExample' type="text" class="form-control" placeholder="Enter Date...">
                              </div>
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Customer type</label>
                                 <select class="form-control">
                                    <option>vendor</option>
                                    <option>vip</option>
                                    <option>regular</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Sex</label><br>
                                 <label class="radio-inline"> <input name="sex" value="1" checked="checked" type="radio"> Male</label> 
                                 <label class="radio-inline"> <input name="sex" value="0" type="radio"> Female</label>
                              </div>
                              <div class="form-check">
                                 <label>Status</label><br>
                                 <label class="radio-inline">
                                 <input type="radio" name="status" value="1" checked="checked"> Active</label>
                                 <label class="radio-inline"><input type="radio" name="status" value="0" > Inctive</label>
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning"> Reset</a>
                                 <a href="#" class="btn btn-success"> Save</a>
                              </div>
                           </form>
                        </div>
                     </div>
                 </div>
               </div>
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>
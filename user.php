<?php include("layouts/header.php"); ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-user-plus"></i>
               </div>
               <div class="header-title">
                  <h1>Users</h1>
                  <small>List of User</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard" id="lobicard-custom-control" data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>User Details</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="btn-group d-flex" role="group">
                                          <div class="buttonexport">
                                             <a href="#" class="btn btn-add" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i> Add Users</a>
                                          </div>
                                       </div>

                                       <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="table-responsive">
                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>User Name</th>
                                                   <th>Type</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                   $sqlUser="SELECT * FROM tbl_users";
                                                   $rsUser=$conn->query($sqlUser);

                                                   if($rsUser->num_rows>0){
                                                      while ($rowsUser=$rsUser->fetch_assoc()) {
                                                         # code...
                                                         // if ($rowsUser['u_acc_level']==1 ) {
                                                         //    $rowsUser['u_acc_level']="Super Admin";
                                                         // }elseif($rowsUser['u_acc_level']==2 ) {
                                                         //    $rowsUser['u_acc_level']="Admin";
                                                         // }elseif($rowsUser['u_acc_level']==3 ) {
                                                         //    $rowsUser['u_acc_level']="Co Admin";
                                                         // }elseif($rowsUser['u_acc_level']==4 ) {
                                                         //    $rowsUser['u_acc_level']="Staff";
                                                         // }else{
                                                         //    $rowsUser['u_acc_level']="null";
                                                         // }
                                                         ?>

                                                <tr>
                                                   <td><?= $rowsUser['u_name'] ?></td>
                                                   <td><span class="label-custom label label-default" ><?=  userType($rowsUser['u_acc_level']) ?></span>
                                                   </td>

                                                   <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="openUserEditModal(<?= $rowsUser['u_id'] ?>)"><i class="fa fa-pencil"></i></button>
                                                      <a href="backend/del_user.php?id=<?= $rowsUser['u_id'] ?>" onclick="return confirm('Are you sure you want to delete <?= $rowsUser['u_name'] ?>?')" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </a>
                                                   </td>
                                                </tr>
                                                <?php
                                                      }
                                                   }
                                                ?>

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </div>
                       </div>
               </div>
               <!-- /.modal -->
               <!-- Modal -->
               <!-- edit_modal -->
               <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-pencil m-r-5"></i> Edit</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" id="load_user_edit_modal">

                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- end of edit user -->
               <!-- User Modal1 -->
               <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-plus m-r-5"></i> Add new User</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="backend/add_user.php" method="POST">
                                    <div class="row">
                                        <!-- Text input-->
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">User Name</label>
                                          <input type="text" placeholder="User Name" class="form-control" name="user_name">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Password</label>
                                          <input type="password" placeholder="Password" class="form-control" name="user_pass">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Type</label>
                                          <select name="user_type" class="form-control">
                                             <option value="01">Super Admin</option>
                                             <option value="02">Admin</option>
                                             <option value="03">Co Admin</option>
                                             <option value="04">Staff</option>
                                          </select>
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="submit" class="btn btn-add btn-sm">Add</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->
               <!-- delete user Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete User</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete User</label>
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>
         <script type="text/javascript">
           function openUserEditModal(id){
             $('#editUser').modal('show');
             $('#load_user_edit_modal').load('crm_ajax_edit/user_edit.php',{
               uid:id
             });
           }
         </script>

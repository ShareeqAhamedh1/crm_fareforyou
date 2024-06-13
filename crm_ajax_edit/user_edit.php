<?php include '../backend/website/conn.php'; ?>
<?php
  $uid =$_REQUEST['uid'];
  $sqlUserData = "SELECT * FROM tbl_users WHERE u_id='$uid'";
  $rsUserData = $conn->query($sqlUserData);
  if($rsUserData->num_rows > 0){
    $rowData = $rsUserData->fetch_assoc();
  }
 ?>
<form class="form-horizontal" action="backend/edit_user.php" method="POST">
   <div class="row">
       <!-- Text input-->
      <!-- Text input-->
      <input type="hidden"  name="uid" value="<?= $uid ?>">
      <div class="col-md-6 form-group">
         <label class="control-label">User Name</label>
         <input type="text" placeholder="User Name" class="form-control" value="<?= $rowData['u_name'] ?>" name="user_name">
      </div>
      <!-- Text input-->
      <div class="col-md-6 form-group">
         <label class="control-label">Password</label>
         <input type="password" placeholder="Password" class="form-control" value="<?= $rowData['u_pass'] ?>" name="user_pass">
      </div>
      <div class="col-md-6 form-group">
         <label class="control-label">Type</label>
         <select name="user_type" class="form-control">
            <option value="01" <?php if($rowData['u_acc_level'] == 1){ echo "selected"; } ?>>Super Admin</option>
            <option value="02" <?php if($rowData['u_acc_level'] == 2){ echo "selected"; } ?>>Admin</option>
            <option value="03" <?php if($rowData['u_acc_level'] == 3){ echo "selected"; } ?>>Co Admin</option>
            <option value="04" <?php if($rowData['u_acc_level'] == 4){ echo "selected"; } ?>>Staff</option>
         </select>
      </div>
      <div class="col-md-12 form-group user-form-group">
         <div class="float-right">
            <button type="submit" class="btn btn-add btn-sm">Update</button>
         </div>
      </div>
   </div>
</form>

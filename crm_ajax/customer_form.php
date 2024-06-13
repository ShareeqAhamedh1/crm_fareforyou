<?php include '../backend/website/conn.php'; ?>
<h5>Customer Information</h5>
<hr>
<form action="backend/add_customer.php" method="post" class="col-lg-6 col-md-12 col-sm-12 col-12" >
<div class="form-group">
   <label>First Name</label>
   <input type="text" class="form-control" name="c_f_name" id="c_f_name" placeholder="First Name" required>
</div>
<div class="form-group">
   <label>Last Name</label>
   <input type="text" class="form-control" name="c_l_name" id="c_l_name" placeholder="Last Name" required>
</div>
<div class="form-group">
   <label>Email</label>
   <input type="email" class="form-control" name="c_email" id="c_email" placeholder="name@domain.com" required>
</div>
<div class="form-group">
   <label>Phone Number</label>
   <input type="text" class="form-control" name="c_phone" id="c_phone" placeholder="+123***********" required>
</div>

 <div class="button">
   <button class="btn green_btn" onclick="addCustomer()">Submit</button>
    <!-- <a href="backend/add_customer.php" class="btn green_btn">Next</a> -->
 </div>

 </form>

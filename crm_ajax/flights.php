<?php include '../backend/website/conn.php'; ?>
  <h5>Flight Details</h5>
  <hr>
<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-10">
        <textarea name="name" class="form-control" id="pnr_code" rows="8"></textarea>
      </div>
      <div class="col-2 text-center">
        <div onclick="convert_pnr()" style="cursor:pointer;border-radius:10px;background:green;color:#fff;padding:10px 10px 10px 10px;text-align:center;">
          Convert & Add
        </div>
      </div>
    </div>
    <hr>
    <div id="pnr_results">

    </div>
    <hr>
  </div>

  <div class="col-12">
    <h4>Lead Passenger</h4>
    <hr>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
           <label>First Name</label>
           <input type="text" class="form-control" id="f_c_f_name" name="f_c_f_name" placeholder="First Name" required>
        </div>
        <div class="form-group">
           <label>Last Name</label>
           <input type="text" class="form-control" id="f_c_l_name" name="f_c_l_name"  placeholder="Last Name" required>
        </div>
        <div class="form-group">
           <label>Email</label>
           <input type="email" class="form-control" id="f_c_email" name="f_c_email"  placeholder="name@domain.com" required>
        </div>
        <div class="form-group">
           <label>Phone Number</label>
           <input type="text" class="form-control" id="f_c_phone" name="f_c_phone"  placeholder="+123***********" required>
        </div>
      </div> <!-- First set of info -->
      <div class="col-6">
        <div class="form-group">
           <label>E-ticket number</label>
           <input type="text" class="form-control" id="f_c_ticket_number" name="f_c_ticket_number"  placeholder="000123456789" required>
        </div>
        <div class="form-group">
           <label>Buy Amount </label>
           <input type="text" class="form-control" id="b_ammount" name="b_ammount"  required>
        </div>
        <div class="form-group">
           <label>Sell Amount </label>
           <input type="text" class="form-control" id="s_ammount" name="s_ammount"  required>
        </div>
        <div class="form-group">
           <label>Ticket Issue Date </label>
           <input type="date" class="form-control" id="t_ammount" name="t_ammount"  required>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>

<div class="button">

   <a href="backend/add_flights.php" method="POST" class="btn green_btn">Next</a>
</div>

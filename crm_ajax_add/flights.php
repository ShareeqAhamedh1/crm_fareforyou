<?php include '../backend/website/conn.php'; ?>

<?php
  $b_id = $_SESSION['b_id'];
  $sqlCustomerInfo = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
  $rsCustomerInfo = $conn->query($sqlCustomerInfo);
  if($rsCustomerInfo->num_rows > 0){
    $rowInfo = $rsCustomerInfo->fetch_assoc();
    $c_id = $rowInfo['c_id'];
    $pay_term = $rowInfo['pay_term'];
  }


  $sqlCustomer = "SELECT * FROM tbl_customer_info WHERE c_id='$c_id'";
  $rsCustomer = $conn->query($sqlCustomer);
  if($rsCustomer->num_rows > 0){
    $rowCus = $rsCustomer->fetch_assoc();
  }

  $leadAdded =0;
  $sqlLeadValidation = "SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id' AND lead_passenger='1'";
  $rsLeadValidation =$conn->query($sqlLeadValidation);
  if($rsLeadValidation->num_rows == 1){
    $leadAdded = 1;
  }

 ?>
<div class="row">

  <div class="col-12">
    <h4>Passenger Details</h4>
    <hr>
    <div class="row">
  <div class="col-12">
    <div class="form-group d-inline-block">
      <label for="">Title</label>
      <select class="form-control" id="title" name="">
        <option value="Mr.">Mr.</option>
        <option value="Miss.">Miss.</option>
        <option value="Mrs.">Mrs.</option>
      </select>
    </div>
    <div class="form-group d-inline-block">
      <label for="">First Name</label>
      <input type="text" id="fName_p" class="form-control" name="" value="">
    </div>
    <div class="form-group d-inline-block">
      <label for="">Last Name</label>
      <input type="text" id="lName_p" class="form-control" name="" value="">
    </div>
    <div class="form-group d-inline-block">
      <label>Vendors</label>
      <select class="form-control" id="vendor_name" name="vendor_name">
        <option value=""></option>
        <?php
        $sqlvendor = "SELECT * FROM tbl_vendor_flights";
        $rsvendor = $conn->query($sqlvendor);
        if ($rsvendor->num_rows > 0) {
          while ($rowvendor = $rsvendor->fetch_assoc()) {
        ?>
            <option value="<?= $rowvendor['f_id'] ?>"><?= $rowvendor['f_v_name'] ?></option>
        <?php }
        } ?>
      </select>
    </div>
    <div class="form-group d-inline-block">
      <label>E-ticket number <?php if ($pay_term == 1) : ?> <span style="color:red;">*</span> <?php endif; ?></label>
      <div class="input-group">
          <input type="text" style="width: 50px;" id="f_c_ticket_code" name="f_c_ticket_code" maxlength="3" pattern="[0-9]{3}" title="Enter 3-digit code" placeholder="000" required>
          &nbsp;<input type="text" class="form-control" id="f_c_ticket_number" name="f_c_ticket_number" pattern="[0-9]{9}" title="Enter 9-digit ticket number" required>
      </div>

    </div>
    <div class="form-group d-inline-block">
      <label>Buy Amount <span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="b_ammount" name="b_ammount" required>
    </div>
    <div class="form-group d-inline-block">
      <label>Sell Amount <span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="s_ammount" name="s_ammount" required>
    </div>
    <div class="form-group d-inline-block">
      <label>Ticket Issue Date <?php if ($pay_term == 1) : ?> <span style="color:red;">*</span> <?php endif; ?></label>
      <input type="date" class="form-control" id="t_date" name="t_date" required>
    </div>
    <div class="form-group d-inline-block">
      <button class="btn green_btn"  onclick="addFlights(<?= $pay_term ?>)">Add</button>
    </div>

  </div>
</div>

  </div>

</div>

<script type="text/javascript">
   $(document).ready(function() {
     $('#passengerSelect').load('crm_data/passengers.php');
     // Initialize Select2 for the select dropdown
     $('#passengerSelect').select2();

   });

   function openAddPassenger(){
     $('#addPassengerModal').modal('show');
   }
   function addPassenger() {
     var firstName = document.getElementById("fName_p").value;
     var lastName = document.getElementById("lName_p").value;
     var email = document.getElementById("email_p").value;
     var phone = document.getElementById("phone_p").value;

     var data = {
         firstName: firstName,
         lastName: lastName,
         email: email,
         phone: phone
     };

     // Perform AJAX request
     var xhr = new XMLHttpRequest();
     xhr.open("POST", "backend/add_passenger.php", true);
     xhr.setRequestHeader("Content-Type", "application/json");
     xhr.onreadystatechange = function () {
         if (xhr.readyState === 4 && xhr.status === 200) {
             if(xhr.responseText == 200){
               swal({
                   title: 'New Passenger Added',
                   icon: 'success'
               });

               document.getElementById("fName_p").value = "";
                document.getElementById("lName_p").value = "";
                document.getElementById("email_p").value = "";
                document.getElementById("phone_p").value = "";
                $('#addPassengerModal').modal('hide');
                $('#passengerSelect').load('crm_data/passengers.php');
             }
             else if (xhr.responseText == 400) {
               swal({
                   title: 'Added Customer Already Exist',
                   icon: 'warning'
               });
             }
             else {
               swal({
                   title: 'Something Went Wrong',
                   icon: 'danger'
               });
             }
         }
     };
     xhr.send(JSON.stringify(data));
 }
</script>

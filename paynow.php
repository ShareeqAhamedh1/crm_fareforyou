<?php include("layouts/header.php");
  $b_id = $_REQUEST['b_id'];
  $_SESSION['b_id'] = $_REQUEST['b_id'];
  $sqlBooking = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
  $rsBooking = $conn->query($sqlBooking);
  if($rsBooking->num_rows > 0){
    $rowBooking = $rsBooking->fetch_assoc();
    $pay_st = $rowBooking['p_sta'];
  }
?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
                  <h1>Payment Settings</h1>
                  <small>Payment List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Recipts management</h4>
                                   </div>
                               </div> <br>
                               <div class="card-body">

                               <a href="#" class="btn btn-warning" onclick="openModelPayNow()">Issue Recipt</a> <hr>

                               <div class="container-fluid">
                                   <h4>Paid Informations</h4>
                                   <hr>
                                   <div id="load_payment_setup_coll">
                                   </div>
                                </div>
                               </div>
                           </div>
                        </div>
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- Empty Modal -->
                <div class="modal fade" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-money m-r-5"></i> Issue Recipt</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                        <div class="modal-body" id="load_data">
                    </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- /.content-wrapper -->
         <input type="hidden" name="" id="tot_amount" value="<?= $totalSale ?>">
         <input type="hidden" name="" id="setupedAmount" value="<?= $totalSale ?>">
         <?php include("layouts/footer.php"); ?>
         <script type="text/javascript">

          $('#load_payment_setup_coll').load('crm_ajax_payment/setup_payment.php',{ b_id:<?= $b_id ?> });

            function openModelPayNow(){
              $('#load_modal').modal('show');
              $('#load_data').load('crm_ajax_payment/paynow.php',{e_b_id:<?= $b_id ?> });
            }

            function openModelEdit(id){
              $('#load_modal').modal('show');
              $('#load_data').load('crm_ajax_payment/edit_pay.php',{p_id:id });
            }

            function submitEditNow(){

             var p_date=document.getElementById('ed_p_date').value;
             var p_amount=document.getElementById('ed_p_amount').value;
             var p_id=document.getElementById('ed_p_id').value;

             $.ajax({
                url:'backend/edit_payment.php',
                method:'POST',
                data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                 e_p_id:p_id

                },
                success:function(resp){
                    if(resp == 200){

                      // $('#load_payment_setup').load('crm_ajax_payment/paynow.php');
                     $('#load_modal').modal('hide');
                    swal("Changed", "edited", "success");  }
                    else {
                      console.log(resp);
                    }
                }
              });
           }

            function submitPayNow(){

              var p_date=document.getElementById('p_date').value;
              var p_amount=document.getElementById('p_amount').value;
              var desc=document.getElementById('desc').value;
              var b_id=document.getElementById('e_b_id').value;
              var pmethod_id=document.getElementById('pmethod_id').value;
              // var p_slip=document.getElementById('p_slip').value;
              // alert(p_slip);
              var errorMessage = '';

                        // Validate p_date
              if (!p_date) {
                  errorMessage += 'Payment date is required.\n';
              } else {
                  var datePattern = /^\d{4}-\d{2}-\d{2}$/; // Simple date pattern YYYY-MM-DD
                  if (!datePattern.test(p_date)) {
                      errorMessage += 'Invalid date format. Use YYYY-MM-DD.\n';
                  }
              }

              // Validate p_amount
              if (!p_amount) {
                  errorMessage += 'Payment amount is required.\n';
              } else if (isNaN(p_amount) || p_amount <= 0) {
                  errorMessage += 'Payment amount must be a positive number.\n';
              }

              // Validate b_id
              if (!b_id) {
                  errorMessage += 'Booking ID is required.\n';
              }

              // Validate pmethod_id
              if (!pmethod_id) {
                  errorMessage += 'Payment method ID is required.\n';
              }

              // Check if any validation errors occurred
              if (errorMessage) {
                  swal({
                      icon: 'error',
                      title: 'Validation Error',
                      text: errorMessage,
                  });
                  return false; // Prevent form submission
              }

              if(pmethod_id == 2){
                if(desc == ""){
                  document.getElementById('warning-text').style.display = "block";
                  return;
                }

              }
              if(p_date)

              $.ajax({
                 url:'backend/one_payment.php',
                 method:'POST',
                 data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                  e_desc:desc,
                  e_b_id:b_id,
                  e_pmethod_id:pmethod_id
                 },
                 success:function(resp){
                     if(resp == 200){
                      $('#load_payment_setup_coll').load('crm_ajax_payment/setup_payment.php',{ b_id:<?= $b_id ?> });
                      $('#load_modal').modal('hide');
                     swal("Changed", "Other Charges Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
            }

           function loadPaymentSetup(){
             var tmonths = document.getElementById('tot_months').value;
             var tot_amount = document.getElementById('tot_amount').value;
             $('#load_payment_setup').load('crm_ajax_payment/payment_setup.php',{
               tot_months:tmonths,
               total_amount:tot_amount
             });
           }
           function getData(){
             var setupedAmount =0;
             var tmonths = document.getElementById('tot_months').value;
             var amount =0;
             for (var i = 1; i <= tmonths; i++) {
               amount =document.getElementById('amount'+i).value;
               setupedAmount +=parseInt(amount);
             }
             document.getElementById('tot_setuped').innerHTML = "Payment Plan Total Amount: £ "+new Intl.NumberFormat('en-US', { minimumFractionDigits: 2 }).format(setupedAmount);
             document.getElementById('setupedAmount').value=setupedAmount;
           }
           function setupDates(){
             var defaultDate = document.getElementById('defaultDate').value;
             var tmonths = document.getElementById('tot_months').value;
             for (var i = 1; i <= tmonths; i++) {
               document.getElementById('date'+i).value = defaultDate;

               var dateObject = new Date(defaultDate);
               dateObject.setMonth(dateObject.getMonth() + 1);
               var newDate = dateObject.toISOString().split('T')[0];
               defaultDate = newDate;
             }
           }

           function setupAmount(){
             var defaultAmount = document.getElementById('defaultAmount').value;
             var tmonths = document.getElementById('tot_months').value;
             for (var i = 1; i <= tmonths; i++) {
               document.getElementById('amount'+i).value = defaultAmount;
             }
             getData();
           }
           function finalizeSetup(){
             var tot_amount = document.getElementById('tot_amount').value;
             var setupedAmount = document.getElementById('setupedAmount').value;
             if(tot_amount != setupedAmount){
               swal("Warning", "Payment setup & Total value mismatch", "warning");
               return false;
             }
           }

         </script>

<?php include("layouts/header.php");
  // $b_id = $_REQUEST['b_id'];

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
                  <h1>Quick Payments</h1>
                  <small>Payments List</small>
               </div>
            </section>



            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Payments management</h4>
                                   </div>
                               </div> <br>
                               <div class="card-body">

                                 <div class="row">
                                   <div class="col-lg-3">
                                     <div class="form-group">
                                       <label for="">Select Ledger</label>
                                       <select class="form-control" name="" onchange="selectLedger(this.value)">
                                         <option value="">Select Ledger</option>
                                         <option value="1">Customer Ledger</option>
                                         <option value="2">Supplier Ledger</option>
                                         <option value="3">General Ledger</option>
                                       </select>
                                     </div>
                                   </div>
                                 </div>

                                   <div id="loadCustomers">
                                   </div>
                                   <div class="row">
                                     <div class="col-lg-4"  id="payment_data">

                                     </div>
                                     <div class="col-lg-8"  id="payment_table">

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
            </div>
         </div>
         <!-- /.modal -->
         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>
         <script type="text/javascript">

            function goBackCustomers(){
                $('#payment_data').empty();
                $('#payment_table').empty();
                $('#loadCustomers').load('crm_ajax/select_customer_pay.php');
            }

            function goBackVendor(){
                $('#payment_data').empty();
                $('#payment_table').empty();
                $('#loadCustomers').load('crm_ajax/select_vendor_recipt.php');
            }

            function selectLedger(id){
              // alert(id);
              if(id == 1){
                $('#payment_data').empty();
                $('#payment_table').empty();
                $('#loadCustomers').load('crm_ajax/select_customer_pay.php');
              }
              else if (id == 2) {
                $('#payment_data').empty();
                $('#payment_table').empty();
                $('#loadCustomers').load('crm_ajax/select_vendor_recipt.php');
              }
            }

            function loadCustoemrs(){
              $('#payment_data').empty();
              $('#payment_table').empty();
              var skey = document.getElementById('skey').value;
              $('#loadCustomers').load('crm_ajax/select_customer_pay.php',{
                s_key:skey
              });
            }

            function loadVendors(){
              $('#payment_data').empty();
              $('#payment_table').empty();
              var skey = document.getElementById('skey').value;
              $('#loadCustomers').load('crm_ajax/select_vendor_recipt.php',{
                s_key:skey
              });
            }

            function payToCustomer(cid){
              $('#loadCustomers').empty();
              $('#payment_data').load('crm_ajax_payment/paynow_customer.php',{c_id:cid });
              $('#payment_table').load('crm_ajax_payment/list_pay_customer.php',{c_id:cid });
            }

            function issueReciptVendors(cid){
              $('#loadCustomers').empty();
              $('#payment_data').load('crm_ajax_payment/paynow_vendor.php',{c_id:cid });
              $('#payment_table').load('crm_ajax_payment/list_pay_vendor.php',{c_id:cid });
            }

            function submitPayNowVendor(){

               var p_date=document.getElementById('p_date').value;
              var p_amount=document.getElementById('p_amount').value;
              var desc=document.getElementById('desc').value;

              var pmethod_id=document.getElementById('pmethod_id').value;

              var vid=document.getElementById('v_id').value;

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

              $.ajax({
                 url:'backend/one_payment_vendor.php',
                 method:'POST',
                 data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                  e_desc:desc,
                  e_vid:vid,
                  e_pmethod_id:pmethod_id
                 },
                 success:function(resp){
                     if(resp == 200){
                       document.getElementById('p_date').value='';
                       document.getElementById('p_amount').value='';
                       document.getElementById('desc').value='';
                       document.getElementById('pmethod_id').value='';
                      $('#payment_table').load('crm_ajax_payment/list_pay_vendor.php',{c_id:vid });
                      swal({
                          icon: 'success',
                          title: 'Payment Success'
                      });
                   }
                     else {
                       console.log(resp);
                     }
                 }
               });
            }

            function submitPayToCustomer(){

              var p_date=document.getElementById('p_date').value;
              var p_amount=document.getElementById('p_amount').value;
              var desc=document.getElementById('desc').value;

              var pmethod_id=document.getElementById('pmethod_id').value;

              var cid=document.getElementById('c_id').value;

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


              $.ajax({
                 url:'backend/payToCustomer.php',
                 method:'POST',
                 data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                  e_desc:desc,
                  e_cid:cid,
                  e_pmethod_id:pmethod_id
                 },
                 success:function(resp){
                     if(resp == 200){
                       document.getElementById('p_date').value='';
                       document.getElementById('p_amount').value='';
                       document.getElementById('desc').value='';
                       document.getElementById('pmethod_id').value='';
                      $('#payment_table').load('crm_ajax_payment/list_pay_customer.php',{c_id:cid });
                     swal("Payment Success", "You have Successfully Paid To Customer", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
            }

            function delSup(vp_id,vid){
            if(confirm('Are you sure you want to remove #SUP 00'+vp_id)){
                $.ajax({
                  url:'backend/delSup.php',
                  method:'POST',
                  data:{
                    vpId:vp_id
                  },success:function(resp){
                    if(resp == 200){
                     $('#payment_table').load('crm_ajax_payment/list_pay_vendor.php',{c_id:vid });
                    }
                    else {
                      alert('Something Went Wrong');
                    }
                  }
                });
              }

          }





         </script>

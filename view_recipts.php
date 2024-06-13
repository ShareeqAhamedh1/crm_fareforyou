<?php include("layouts/header.php"); ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
                  <h1>View Recipts</h1>
                  <small>Recipts Table</small>
               </div>
            </section>
            <!-- Main content -->

            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Manage Recipts</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-lg-3">
                                     <label for="">Search Customer Or Recipt ID</label>
                                     <div class="form-group">
                                       <input type="text" class="form-control" id="skey" placeholder="Search By Customer" name="" value="">
                                     </div>
                                   </div>
                                   <div class="col-lg-2">
                                     <label for="">From Date</label>
                                     <div class="form-inline">
                                       <input type="date" class="form-control" id="fromDate" placeholder="Search By Customer" name="" value="">
                                     </div>
                                   </div>
                                   <div class="col-lg-2">
                                     <label for="">To Date</label>
                                     <div class="form-inline">
                                       <input type="date" class="form-control" id="toDate" placeholder="Search By Customer" name="" value="">
                                     </div>
                                   </div>
                                   <div class="col-lg-2">
                                     <div class="form-group">
                                       <label for="">&nbsp;</label> <br>
                                       <button type="button" class="btn btn-primary btn-sm" onclick="searchRecipt()" name="button">Apply Filters</button>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="card-body" id="loadCustomerRecipt">

                               </div>
                           </div>
                        </div>
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- Empty Modal -->
                <div class="modal fade" id="editReciptModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-money m-r-5"></i>Edit Recipt</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                        <div class="modal-body" id="loadEditReciptForm">

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
          $('#loadCustomerRecipt').load('crm_ajax_payment/full_list_recipt.php');

          function searchRecipt(){
            var skey = document.getElementById('skey').value;
            var fromDate = document.getElementById('fromDate').value;
            var toDate = document.getElementById('toDate').value;

            $('#loadCustomerRecipt').load('crm_ajax_payment/full_list_recipt.php',{
              searchKey:skey,
              i_fromDate:fromDate,
              i_toDate:toDate
            });

          }

          function openEditReciptModal(cpId){
            $('#editReciptModal').modal('show');
            $('#loadEditReciptForm').load('crm_ajax_payment/edit_recipt_form.php',{
              cp_id:cpId
            });
          }

          function delRecipt(cp_id){
            if(confirm('Are you sure you want to remove #RCP 000'+cp_id)){
                $.ajax({
                  url:'backend/delRecipt.php',
                  method:'POST',
                  data:{
                    cpId:cp_id
                  },success:function(resp){
                    if(resp == 200){
                      searchRecipt();
                    }
                    else {
                      alert('Something Went Wrong');
                    }
                  }
                });
              }

          }

          function editPayNow(){

            var p_date=document.getElementById('p_date').value;
            var p_amount=document.getElementById('p_amount').value;
            var desc=document.getElementById('desc').value;

            var pmethod_id=document.getElementById('pmethod_id').value;

            var cp_id=document.getElementById('cp_id').value;

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
               url:'backend/edit_cus_payment.php',
               method:'POST',
               data:{
                e_p_date:p_date,
                e_p_amount:p_amount,
                e_desc:desc,
                e_cp_id:cp_id,
                e_pmethod_id:pmethod_id
               },
               success:function(resp){
                   if(resp == 200){
                      $('#editReciptModal').modal('hide');
                      swal({
                          icon: 'success',
                          title: 'Edited',
                          text: 'Changes Made Successfully',
                      });
                      searchRecipt();
                    }
                   else {
                     console.log(resp);
                   }
               }
             });
          }
         </script>

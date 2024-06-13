<?php include("layouts/header.php");

 ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Invoices</h1>
                  <small>Invoices List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Invoices</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                 <div class="row">
                                     <div class="col-lg-3">
                                       <label for="">Search Key Invoice</label>
                                         <input type="text" id="search_key_invoice" class="form-control" placeholder="Search by ID, Name, Ticket..." value="">
                                     </div>
                                     <div class="col-lg-3">
                                        <label for="">From</label>
                                         <input type="date" id="date_from" class="form-control" placeholder="Date From">
                                     </div>
                                     <div class="col-lg-3">
                                        <label for="">To</label>
                                         <input type="date" id="date_to" class="form-control" placeholder="Date To">
                                     </div>
                                     <div class="col-lg-3">
                                       <label for="">Payment Plan</label>
                                         <select id="payment_plan" class="form-control">
                                             <option value="">All Payment Plans</option>
                                             <option value="1">One time Payment</option>
                                             <option value="0">Installment</option>
                                         </select>
                                     </div>
                                     <div class="col-lg-2">
                                       <br>
                                         <button type="button" class="btn btn-primary btn-sm" onclick="searchInvoice()">Search</button>
                                     </div>
                                 </div>
                             </div>
                               <div id="invoice_load_details">

                               </div>
                           </div>
                        </div>
               </div>
               <!-- customer Modal1 -->
               <div class="modal fade" id="updateInvoiceModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Update Invoices</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" id="loadEditInv">

                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- Customer Modal2 -->

               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>


         <!-- /.content-wrapper -->
         <?php include("layouts/footer.php"); ?>

         <div class="modal fade" id="editModals" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                           <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-money m-r-5"></i> Payment Summary</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           </div>
                        <div class="modal-body" id="load_edit_datas">
                     </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                             <div class="modal-content">
                                <div class="modal-header modal-header-primary">
                                   <h3><i class="fa fa-money m-r-5"></i> Change User</h3>
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                             <div class="modal-body" id="load_edit_datas">
                               <div class="row">
                                 <div class="col-lg-6">
                                   <input type="hidden" id="b_id" name="" value="">
                                   <label for="">Search Customer</label>
                                   <input style="width:300px;" type="text" id="s_key" class="form-control" name="" value="">
                                   <hr>
                                   <button type="button" class="btn btn-warning btn-sm" name="button" onclick="loadCustomer()">Search</button>
                                 </div>
                                 <div class="col-lg-6" id="loadEditSelectCustomer">

                                 </div>
                               </div>
                             </div>
                       </div>
                     </div>
                   </div>


         <script type="text/javascript">

         function changeUser(bid){
           document.getElementById('b_id').value =bid;
           $('#editUserModal').modal('show');
         }

         function loadCustomer(){
           var bid  = document.getElementById('b_id').value;
           var s_key  = document.getElementById('s_key').value;

           $('#loadEditSelectCustomer').load('crm_ajax_edit/changeUser.php',{
             c_bid:bid,
             c_s_key:s_key
           });
         }

         function openEditInvoice(bid,cid){
           $('#updateInvoiceModal').modal('show');
           $('#loadEditInv').load('crm_ajax_edit/edit_invoice.php',{
             b_id:bid,
             c_id:cid
           });
         }

            function openModelAmount(id){
                 $('#editModals').modal('show');
                 $('#load_edit_datas').load('crm_ajax_add/total_amount.php',{b_id:id});
            }

            function searchInvoice() {
              var key = document.getElementById('search_key_invoice').value;
              var dateFrom = document.getElementById('date_from').value;
              var dateTo = document.getElementById('date_to').value;
              var paymentPlan = document.getElementById('payment_plan').value;
              var status = document.getElementById('status').value;

              $('#invoice_load_details').load('crm_ajax_invoices/invoice.php', {
                  s_key: key,
                  date_from: dateFrom,
                  date_to: dateTo,
                  payment_plan: paymentPlan,
                  status: status
              });
          }

            function changeCustomer(bid,cid){
              if (confirm('Do you really want to change the customer to INV 000' + bid)) {
                $.ajax({
                  url: 'backend/changeUser.php',
                  method: 'POST',
                  data: {
                    sel_bid: bid,
                    sel_cid: cid
                  },
                  success: function(resp) {
                    if (resp == 200) {
                      searchInvoice();
                      alert('Customer Changed');
                      $('#editUserModal').modal('hide');
                    }
                  }
                });
              }
            }

            function changeInvStatus(st, id) {
              if (confirm('Do you really want to back INV 000' + id + ' to Void?')) {
                $.ajax({
                  url: 'backend/changeSt.php',
                  method: 'POST',
                  data: {
                    pst: st,
                    id: id
                  },
                  success: function(resp) {
                    if (resp == 200) {
                      searchInvoice();
                      alert('Your Invoice listed to void');
                    }
                  }
                });
              }
            }

            function editInvoice(){
              var leads = document.getElementById('leads').value;
              var user = document.getElementById('user').value;
              var p_term = document.getElementById('p_term').value;
              var bid = document.getElementById('bid').value;

              $.ajax({
                url: 'backend/editInvoice.php',
                method: 'POST',
                data: {
                  e_leads: leads,
                  e_user: user,
                  e_p_term:p_term,
                  e_bid:bid
                },
                success: function(resp) {
                  if (resp == 200) {
                    searchInvoice();
                    alert('Changes Made To The Invoice');
                    $('#updateInvoiceModal').modal('hide');
                  }
                  else {
                    console.log(resp);
                  }
                }
              });

            }

         </script>

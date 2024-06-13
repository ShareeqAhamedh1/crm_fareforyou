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
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <input type="text" id="search_key_invoice" class="form-control" placeholder="search" name="" value="">
                                    </div>
                                  </div>

                                  <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary btn-sm" name="button" onclick="searchInvoice()">Search</button>
                                  </div>
                                </div>
                              </div>
                               <div id="invoice_load_details">

                               </div>
                           </div>
                        </div>
               </div>
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Update Invoices</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <div class="row">
                                          <!-- Text input-->
                                          <div class="col-md-4 form-group">
                                             <label class="control-label">Account:</label>
                                             <input type="text" placeholder="Accounts" class="form-control">
                                          </div>
                                          <!-- Text input-->
                                          <div class="col-md-4 form-group">
                                             <label class="control-label">Amount</label>
                                             <input type="text" placeholder="Amount" class="form-control">
                                          </div>
                                          <!-- Text input-->
                                          <div class="col-md-4 form-group">
                                             <label class="control-label">Invoice Date</label>
                                             <input type="number" placeholder="Invoice Date" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Due Date</label>
                                             <input type="number" placeholder="Due Date" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">type</label>
                                             <input type="text" placeholder="type" class="form-control">
                                          </div>
                                          <div class="col-md-12 form-group user-form-group">
                                             <div class="pull-right">
                                                <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                <button type="submit" class="btn btn-add btn-sm">Save</button>
                                             </div>
                                          </div>

                                    </div>
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
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Invoices</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Invoices</label>
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


         <script type="text/javascript">

            $('#invoice_load_details').load('crm_ajax_invoices/void_invoices.php');

            function openModelAmount(id){
                 $('#editModals').modal('show');
                 $('#load_edit_datas').load('crm_ajax_add/total_amount.php',{b_id:id});
            }

            function searchInvoice(){
              var key = document.getElementById('search_key_invoice').value;

              $('#invoice_load_details').load('crm_ajax_invoices/void_invoices.php',{ s_key:key });
            }

            function changeInvStatus(st, id) {
              if (confirm('Do you really want to INV 000' + id + ' to Active?')) {
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
                    }
                  }
                });
              }
            }

         </script>

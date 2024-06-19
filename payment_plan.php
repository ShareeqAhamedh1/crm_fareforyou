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
                  <h1>Client Credit Summary Report</h1>
                  <small>Reports</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Client Credit summary Report</h4>
                                   </div>
                               </div>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                       <label for="">From</label>
                                        <input type="date" id="date_from" class="form-control" placeholder="Date From">
                                    </div>
                                    <div class="col-lg-3">
                                       <label for="">To</label>
                                        <input type="date" id="date_to" class="form-control" placeholder="Date To">
                                    </div>
                                    <div class="col-lg-4">
                                      <br>
                                        <button type="button" class="btn btn-primary btn-sm" onclick="searchInvoice()">Preview</button>
                                    </div>
                                </div>
                              </div>
                               <div id="invoice_load_details">

                               </div>
                           </div>
                        </div>
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
                              <h3><i class="fa fa-money m-r-5"></i> Invoice Summery</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           </div>
                        <div class="modal-body" id="load_edit_datas">
                     </div>
                  </div>
                </div>
              </div>


         <script type="text/javascript">
        //  function redirectToPayNow() {
        //   const checkedBids = Array.from(document.querySelectorAll('input[name="bid[]"]:checked'))
        //     .map(cb => cb.value);
        //
        //   if (checkedBids.length > 0) {
        //     $.ajax({
        //       url: 'backend/validateBid.php',
        //       method: 'POST',
        //       data: {
        //         cdata: checkedBids.join(',') // Send the comma-separated string directly
        //       },
        //       success: function(resp) {
        //         if (resp == 500) {
        //           alert('Selected invoices should be for the same customer');
        //         } else {
        //           // Construct and redirect within the success callback
        //           const url = 'paynow_multiple.php?bids=' + checkedBids.join(',');
        //           window.location.href = url;
        //         }
        //       },
        //       // Handle errors in the AJAX request
        //       error: function() {
        //         alert('An error occurred while validating invoices.');
        //       }
        //     });
        //   }
        // }


            function openModelAmount(id){
                 $('#editModals').modal('show');
                 $('#load_edit_datas').load('crm_ajax_add/total_amount.php',{b_id:id});
            }

            function searchInvoice(){
              var cdate_from = document.getElementById('date_from').value;
              var cdate_to = document.getElementById('date_to').value;

              $('#invoice_load_details').load('crm_ajax_invoices/invoice_setup.php',{
                date_from:cdate_from,
                date_to:cdate_to
              });
            }


         </script>

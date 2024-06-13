<?php include("layouts/header.php");
  // $b_id = $_REQUEST['b_id'];
  $cid = $_REQUEST['c_id'];
  if(isset($_SESSION['cp_id'])){
    $cp_id = $_SESSION['cp_id'];
  }
  else {
    $cp_id = $_REQUEST['cp_id'];
  }

  $inv_ids =array();

  $totAmountPaid=0;
  $sqlSetOff = "SELECT * FROM tbl_set_off_invoice WHERE c_id='$cid'";
  $rsSetOff = $conn->query($sqlSetOff);
  if($rsSetOff->num_rows > 0){
    while($rowSetOff = $rsSetOff->fetch_assoc()){
      $cp_id = $rowSetOff['cp_id'];
      $bid = $rowSetOff['b_id'];
      $totAmountPaid += getDataBack($conn,'tbl_customer_pay','cp_id',$cp_id,'pi_amount');
      array_push($inv_ids,$bid);
    }

  }
  $remainingPaid = $totAmountPaid;
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
                  <h1>Set Off Recipt</h1>
                  <small>Payment List</small>
               </div>
            </section>
            <!-- Main content -->
            <?php
              $amountPaid = getDataBack($conn,'tbl_customer_pay','cp_id',$cp_id,'pi_amount');
             ?>
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4><?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name') ?> Invoices</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-lg-3">
                                     <label for="">Search Customer</label>
                                     <div class="form-group">
                                       <input type="text" class="form-control" id="skey" placeholder="Search Customer" name="" value="">
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

                                  <hr>
                                 <form  action="backend/pair_invoice.php" method="post">
                                   <input type="hidden" name="c_id" value="<?= $cid ?>">
                                   <input type="hidden" name="cp_id" value="<?= $cp_id ?>">
                                 <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>Customer Name	</th>
                                                <th>Invoice Number</th>
                                                <th>Invoice Date</th>
                                                <th>Total Amount</th>
                                                <th>Invoice Date</th>
                                                <th>Payment Plan</th>
                                                <th>Invoice Value</th>
                                                <th>Total Paid</th>
                                                <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php


                                            $sqlBooking = "SELECT * FROM vw_booking_details WHERE c_id='$cid' ORDER BY `vw_booking_details`.`b_id` ASC";


                                            // Execute query
                                            $rsBooking = $conn->query($sqlBooking);

                                            if ($rsBooking->num_rows > 0) {
                                               while ($rowsBooking = $rsBooking->fetch_assoc()) {
                                                   $bid = $rowsBooking['b_id'];
                                                   $userName = $rowsBooking['user_name'];
                                                   $leadPlatform = $rowsBooking['lead_platform'];
                                                   $customerName = $rowsBooking['customer_name'];
                                                   $ticketNo = $rowsBooking['e_ticket_no'];
                                                   $dateonly = strtotime($rowsBooking['booked_date_time']);
                                                   $dateconverted = date('Y-m-d', $dateonly);

                                                   $flightsSale = $rowsBooking['flights_sale'];
                                                   $hotelSale = $rowsBooking['hotel_sale'];
                                                   $transfersSale = $rowsBooking['transfers_sale'];
                                                   $otherSale = $rowsBooking['other_sale'];

                                                   $totalSale = $flightsSale + $hotelSale + $transfersSale + $otherSale;
                                                   $psta = $rowsBooking['p_sta'];
                                                   $pay_term= getDataBack($conn,'tbl_booking','b_id',$bid,'pay_term');
                                                   if($pay_term ==0){
                                                     $invtext = "P-INV";
                                                     $paymentSys ="Payment Plan";
                                                   }
                                                   else {
                                                     $invtext = "INV";
                                                     $paymentSys ="Fully Paid";
                                                   }
                                                   $invoice_status_code= getDataBack($conn,'tbl_booking','b_id',$bid,'status');

                                                   $sqlPay ="SELECT SUM(pi_amount) AS amnt FROM  tbl_paid_info WHERE b_id='$bid'";
                                                   $rspay = $conn->query($sqlPay);

                                                   if($rspay->num_rows > 0){
                                                     $rowPayment = $rspay->fetch_assoc();
                                                   }

                                                   if ($remainingPaid >= $totalSale) {
                                                           $toBePaid = $totalSale;
                                                           $remainingPaid -= $totalSale;
                                                       } else {
                                                           $toBePaid = $remainingPaid;
                                                           $remainingPaid = 0;
                                                       }

                                        if($invoice_status_code == 0){
                                                   ?>

       <tr>
           <td> <input type="checkbox" name="bid[]" id="bid" value="<?= $rowsBooking['b_id'] ?>"> </td>
           <td><?= $invtext ?> 000<?= $rowsBooking['b_id'] ?></td>
           <td><?= $userName ?></td>
           <td><?= $leadPlatform ?></td>
           <td><?= $customerName ?> </td>
           <td><a style="cursor:pointer;color:blue;" onclick="openModelAmount(<?= $rowsBooking['b_id'] ?>)">£ <?= number_format($totalSale, 2, '.', ',')?></a></td>
           <td><?= $dateconverted ?></td>
           <td><?= $paymentSys ?></td>
           <td>£ <?= number_format($totalSale, 2, '.', ',') ?></td>
           <td>£ <?= number_format($toBePaid, 2, '.', ',')  ?></td>
           <td><span class="label-custom label label-default">Active</span></td>

       </tr>
     <?php } ?>
       <?php
   }
}
?>

                                          </tbody>
                                       </table>
                                       <hr>
                                       <button type="submit" class="btn btn-success" name="button">Save</button>
                                    </div>
                                    </form>
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






         </script>

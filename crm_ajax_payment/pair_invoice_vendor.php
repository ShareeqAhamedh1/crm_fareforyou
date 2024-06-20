<?php
include '../backend/website/conn.php';
$vid = $_REQUEST['v_id'];

if(isset($_SESSION['vp_id'])){
  $vp_id = $_SESSION['vp_id'];
}
else {
  $vp_id = $_REQUEST['vp_id'];
}

$inv_ids =array();

$totAmountPaid=0;
$sqlSetOff = "SELECT DISTINCT vp_id FROM tbl_set_off_invoice_vendor WHERE v_id='$vid'";
$rsSetOff = $conn->query($sqlSetOff);
if($rsSetOff->num_rows > 0){
  while($rowSetOff = $rsSetOff->fetch_assoc()){
    // $bid = $rowSetOff['b_id'];
    $cpId = $rowSetOff['cp_id'];
    $totAmountPaid += getDataBack($conn,'tbl_vendor_pay','vp_id',$cpId,'p_amount');
    // array_push($inv_ids,$bid);
  }

}
$remainingPaid = $totAmountPaid;

  $amountPaid = getDataBack($conn,'tbl_vendor_pay','vp_id',$vp_id,'p_amount');
 ?>
<section class="content">
   <div class="row">
         <div class="col-lg-12 pinpin">
               <div class="card lobicard"  data-sortable="true">
                   <div class="card-header">
                       <div class="card-title custom_title">
                           <h4><?= getDataBack($conn,'tbl_vendor_det','v_id',$vid,'v_name') ?> Invoices <?= $vp_id ?></h4>
                       </div>
                   </div>
                   <div class="card-body">

                     <h6>
                       <b>Recipt Id:</b> #RCP00<?= $vp_id ?> |
                       <b>Paid Amount</b>: £ <?= number_format($amountPaid, 2, '.', ',')  ?> |
                       <b>Paid Date</b>: <?= getDataBack($conn,'tbl_vendor_pay','vp_id',$cp_id,'pi_date') ?>
                     </h6> <hr>
                     <form id="pairInvoiceForm">
                       <input type="hidden" name="v_id" value="<?= $vid ?>">
                       <input type="hidden" name="vp_id" value="<?= $vp_id ?>">
                     <div class="table-responsive">
                           <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                              <thead class="back_table_color">
                                 <tr class="info">
                                    <th>Select</th>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Lead Platform</th>
                                    <th>Customer Name</th>
                                    <th>Total Outstanding</th>
                                    <th>Invoice Date</th>
                                    <th>Payment Plan</th>
                                    <th>Invoice Value</th>
                                    <th>Total Paid</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php


                                $sqlBooking = "SELECT * FROM vw_booking_details WHERE c_id='$vid' ORDER BY `vw_booking_details`.`b_id` ASC";


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
<td><a style="cursor:pointer;color:blue;" onclick="openModelAmount(<?= $rowsBooking['b_id'] ?>)">£ <?= number_format($totalSale-$toBePaid, 2, '.', ',')?></a></td>
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
                           <button type="button" class="btn btn-success" onclick="pairInvoiceVendor(<?= $vid ?>)" name="button">Save</button>
                        </div>
                        </form>
                   </div>
               </div>
            </div>
   </div>

</section>
<!-- /.content -->

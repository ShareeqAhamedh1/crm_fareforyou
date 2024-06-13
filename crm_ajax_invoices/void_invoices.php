<?php include '../backend/website/conn.php'; ?>

<div class="card-body">

                                 <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>#</th>
                                                <th>User</th>
                                                <th>Lead Platform</th>
                                                <th>Customer Name</th>
                                                <th>E-Ticket Number</th>
                                                <th>Total Amount</th>
                                                <th>Invoice Date</th>
                                                <th>Payment Plan</th>
                                                <th>Status</th>
                                                <th>Invoice/Details</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php

                                            if(isset($_REQUEST['s_key'])){
                                              $skey = $conn->real_escape_string($_REQUEST['s_key']);

$sqlBooking = "SELECT * FROM vw_booking_details
               WHERE
                   b_id LIKE '%$skey%' OR
                   user_name LIKE '%$skey%' OR
                   customer_name LIKE '%$skey%' OR
                   e_ticket_no LIKE '%$skey%'";
                                            }
                                            else {
                                              $sqlBooking = "SELECT * FROM vw_booking_details ORDER BY `vw_booking_details`.`b_id` DESC";
                                            }

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
                                                   $invoice_status_code= getDataBack($conn,'tbl_booking','b_id',$bid,'status');
                                                   if($invoice_status_code == 1){
                                                   ?>

       <tr>
           <td>INV 000<?= $rowsBooking['b_id'] ?></td>
           <td><?= $userName ?></td>
           <td><?= $leadPlatform ?></td>
           <td><?= $customerName ?> </td>
           <td><?= $ticketNo ?></td>
           <td><a style="cursor:pointer;color:blue;" onclick="openModelAmount(<?= $rowsBooking['b_id'] ?>)">£ <?= number_format($totalSale, 2, '.', ',')?></a></td>
           <td><?= $dateconverted ?></td>
           <td>One Time</td>
           <td> <a style="cursor:pointer;" onclick="changeInvStatus(0,<?= $rowsBooking['b_id'] ?>)"> <span class="label-secondary label label-default">VOIDED</span> </a> </td>

           <td>
               <a href="invoice/invoice.php?b_id=<?= $rowsBooking['b_id'] ?>"
                  class="btn btn-warning btn-sm">Download Invoice</a> |
               <a href="invoice_details.php?b_id=<?= $rowsBooking['b_id'] ?>"
                  class="btn btn-info btn-sm">Add/View Details</a> </td>
       </tr>
     <?php } ?>
       <?php
   }
}
?>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

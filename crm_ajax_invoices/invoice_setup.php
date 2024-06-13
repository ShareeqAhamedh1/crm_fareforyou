<?php include '../backend/website/conn.php'; ?>

<div class="card-body">

                                 <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>Invoice Number</th>
                                                <th>Customer Name</th>
                                                <th>Invoice Date</th>
                                                <th>Invoice Value</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $dateFrom = isset($_REQUEST['date_from']) ? $_REQUEST['date_from'] : '';
                                            $dateTo = isset($_REQUEST['date_to']) ? $_REQUEST['date_to'] : '';

                                            // Always include p_sta IN (2,4) condition
                                            $whereClause = ["p_sta IN (2,4)"];

                                            // $whereClause[] = "(c_id = '%$skey%')";

                                            if ($dateFrom && $dateTo) {
                                                $whereClause[] = "booked_date_time BETWEEN '$dateFrom' AND '$dateTo'";
                                            }
                                            // Add more filter conditions as needed (e.g., payment plan, status)

                                            // Construct SQL query
                                            $sqlBooking = "SELECT * FROM vw_booking_details";
                                            $sqlBooking .= " WHERE " . implode(" AND ", $whereClause); // Add WHERE only if needed
                                            $sqlBooking .= " ORDER BY `vw_booking_details`.`b_id` DESC";


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

                                                   $debt_amount =$totalSale;

                                        if($invoice_status_code == 0){
                                                   ?>

       <tr>
           <td><?= $invtext ?> 000<?= $rowsBooking['b_id'] ?></td>
           <td><?= $customerName ?> </td>
           <td><?= $dateconverted ?></td>
           <td><a style="cursor:pointer;color:blue;" onclick="openModelAmount(<?= $rowsBooking['b_id'] ?>)">£ <?= number_format($totalSale, 2, '.', ',')?></a></td>
           <td>£ <?= number_format($toBePaid, 2, '.', ',') ?></td>
           <td>£ <?= number_format($totPaid, 2, '.', ',')  ?></td>

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

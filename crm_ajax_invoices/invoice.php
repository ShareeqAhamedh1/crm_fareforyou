<?php include '../backend/website/conn.php';
$u_type=$_SESSION['u_type'];
$uid = $_SESSION['u_id'];
?>

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
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $skey = isset($_REQUEST['s_key']) ? $conn->real_escape_string($_REQUEST['s_key']) : '';
                                            $dateFrom = isset($_REQUEST['date_from']) ? $_REQUEST['date_from'] : '';
                                            $dateTo = isset($_REQUEST['date_to']) ? $_REQUEST['date_to'] : '';
                                            $paymentPlan = isset($_REQUEST['payment_plan']) ? $_REQUEST['payment_plan'] : '';
                                            $status = isset($_REQUEST['status']) ? $_REQUEST['status'] : '';

                                            $sqlSearchE = "SELECT * FROM tbl_passenger_flight_bookings WHERE e_ticket_no LIKE '%$skey%'";
                                            $rsSearchE = $conn->query($sqlSearchE);
                                            $whereClause = [];


                                            // Build dynamic WHERE clause


                                            if ($skey) {
                                              if($rsSearchE->num_rows > 0){
                                                $rowE = $rsSearchE->fetch_assoc();
                                                $eBid = $rowE['b_id'];
                                                $whereClause[] = "(b_id LIKE '%$eBid%' OR user_name LIKE '%$skey%' OR customer_name LIKE '%$skey%' OR e_ticket_no LIKE '%$skey%')";
                                              }
                                              else {
                                                $whereClause[] = "(b_id LIKE '%$skey%' OR user_name LIKE '%$skey%' OR customer_name LIKE '%$skey%' OR e_ticket_no LIKE '%$skey%')";
                                              }
                                            }
                                            if ($dateFrom && $dateTo) {
                                                $whereClause[] = "booked_date_time BETWEEN '$dateFrom' AND '$dateTo'";
                                            }
                                            if ($paymentPlan) {
                                                // Adjust this condition based on how payment plan is stored in your database
                                                $whereClause[] = "p_sta = '$paymentPlan'";  // Assuming 'p_sta' is the column for payment plan
                                            }
                                            if ($status) {
                                                $whereClause[] = "status = '$status'";
                                            }



                                            // Construct SQL query
                                            $sqlBooking = "SELECT * FROM vw_booking_details";
                                            if (!empty($whereClause)) {
                                                $sqlBooking .= " WHERE " . implode(" AND ", $whereClause);
                                            }
                                            $sqlBooking .= " ORDER BY `vw_booking_details`.`b_id` DESC";


                                            // Execute query
                                            $rsBooking = $conn->query($sqlBooking);

                                            if ($rsBooking->num_rows > 0) {
                                               while ($rowsBooking = $rsBooking->fetch_assoc()) {
                                                   $bid = $rowsBooking['b_id'];
                                                   $userName = $rowsBooking['user_name'];
                                                   $leadPlatform = $rowsBooking['lead_platform'];
                                                   $cid = $rowsBooking['c_id'];
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
                                                   $invoice_status_code= getDataBack($conn,'tbl_booking','b_id',$bid,'status');
                                                   $customerName= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name')." ".getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_l_name');

                                                   $sqlBstatus="SELECT * FROM tbl_booking WHERE b_id='$bid'";
                                                   $rsBstatus=$conn->query($sqlBstatus);

                                                   $rowBstatus = $rsBstatus->fetch_assoc();
                                                   $b_status=$rowBstatus['b_status'];

                                                   if($pay_term ==0){
                                                     $invtext = "P-INV";
                                                     $paymentSys ="Payment Plan";
                                                   }
                                                   else {
                                                     $invtext = "INV";
                                                     $paymentSys ="Fully Paid";
                                                   }

                                                   if($invoice_status_code == 0){
                                                    // && $b_status==0
                                                   ?>

       <tr>
           <td><?= $invtext ?> 000<?= $rowsBooking['b_id'] ?></td>
           <td><?= $userName ?></td>
           <td><?= $leadPlatform ?></td>
           <td> <a style="cursor:pointer;color:#2474f2;" onclick="changeUser(<?= $rowsBooking['b_id'] ?>)"><?= $customerName ?> </a> </td>
           <td><?= $ticketNo ?></td>
           <td><a style="cursor:pointer;color:blue;" onclick="openModelAmount(<?= $rowsBooking['b_id'] ?>)">£ <?= number_format($totalSale, 2, '.', ',')?></a></td>
           <td><?= $dateconverted ?></td>
           <td><?= $paymentSys ?></td>
           <td> <a style="cursor:pointer;" onclick="changeInvStatus(1,<?= $rowsBooking['b_id'] ?>)"> <span class="label-custom label label-default">Active</span> </a> </td>
           <td>
               <a href="invoice/invoice.php?b_id=<?= $rowsBooking['b_id'] ?>"
                  class="btn btn-warning btn-sm">Download Invoice</a> |
               <a href="invoice_details.php?b_id=<?= $rowsBooking['b_id'] ?>"
                  class="btn btn-info btn-sm">Add/View Details</a> </td>
                  <td>
                    <?php if ($u_type != 4) { ?>
                     <a class="btn btn-warning btn-sm" onclick="openEditInvoice(<?= $bid ?>,<?= $cid ?>)"><i class="fa fa-pencil"></i></a>
                   <?php } ?>
                    </td>
       </tr>
     <?php }  } ?>
       <?php
   }

?>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

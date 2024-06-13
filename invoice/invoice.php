<?php include '../backend/website/conn.php';
  $b_id = $_REQUEST['b_id'];
  $flights =0;
  $hotel =0;
  $transfers = 0;
  $otherCharge = 0;

  $sqlBooking = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
  $rsBooking =$conn->query($sqlBooking);
  if($rsBooking->num_rows > 0){
    $rowB = $rsBooking->fetch_assoc();
    $c_id = $rowB['c_id'];
    $b_date = $rowB['booked_date_time'];
  }
  $sqlCus = "SELECT * FROM tbl_customer_info WHERE c_id='$c_id'";
  $rsCus =$conn->query($sqlCus);
  if($rsCus->num_rows > 0){
    $rowCus = $rsCus->fetch_assoc();
  }

  $newDateFormat = date("d-m-Y", strtotime($b_date)); // Convert to DD-MM-YYYY format


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FFU_Invoice_#INV00<?= $b_id ?> </title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
/>

    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js" charset="utf-8"></script>
  </head>
  <body>
    <footer>
       <!-- Your footer content goes here -->
       <p class="footer_text">&copy; 2024 Fareforyou. All rights reserved.</p>
   </footer>
              <div class="page-setup">
                <div class="row">
                  <div class="col-4">
                    <img class="" src="logo.png" alt="" width="100%;">
                  </div>
                  <div class="col-8">
                    <div  style="text-align:right;">
                      <div class="info-text"><i class="fa fa-map-marker spl ws" aria-hidden="true"></i> Unit313 Barking Entreprise Centre 50 <br> Cambridge Road </div>
                      <div class="info-text"><i class="fa fa-mobile spl ws" aria-hidden="true"></i> 0203 9165946 </div>
                      <div class="info-text"><i class="fa fa-envelope spl ws" aria-hidden="true"></i> info@fareforyou.co.uk </div>
                      <div class="info-text"><i class="fa fa-globe spl ws" aria-hidden="true"></i> http://fareforyou.co.uk/ </div>
                    </div>

                  </div>
                </div>
                <hr class="pill">


                <div class="row">
                <div class="col-8">
                    <span class="med_text">Invoice To:</span>
                    <hr>
                    <div class="info-text"><i class="fa fa-user spl ws" aria-hidden="true"></i> <?= $rowCus['c_f_name']." ".$rowCus['c_l_name'] ?> </div>
                    <div class="info-text"><i class="fa fa-envelope spl ws" aria-hidden="true"></i> <?= $rowCus['c_email'] ?> </div>
                    <div class="info-text"><i class="fa fa-mobile spl ws" aria-hidden="true"></i> <?= $rowCus['c_phone_no'] ?> </div>
                </div>
                <div class="col-4">
                  <div class="float-right">
                      <span class="inv_text">INVOICE</span>
                      <div class="small_text"> #INV00<?= $b_id ?> </div>
                      <div class="small_text"> Date: <?= $newDateFormat ?> </div>
                    </div>
                </div>
                </div>
                <br>
                <span class="med_text">Flights <i class="fa fa-plane spl ws"></i> </span>
                <table>
                 <thead>
                   <tr>
                     <th>Passenger</th>
                     <th>E-Ticket No</th>
                     <th>Amount</th>
                     <th>Ticket Issued Date</th>
                   </tr>
                 </thead>
                 <tbody>

                    <?php

                         $sqlFlights="SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id' ORDER BY `tbl_passenger_flight_bookings`.`lead_passenger` DESC";
                          $rsFlights=$conn->query($sqlFlights);

                          if($rsFlights->num_rows>0){
                            while($rowsFlight=$rsFlights->fetch_assoc()){
                                ?>
                          <tr>
                            <td><?= $rowsFlight['p_f_name'] ?> <?= $rowsFlight['p_l_name'] ?></td>
                            <td><?= $rowsFlight['e_ticket_no'] ?></td>
                            <td>£ <?= number_format($rowsFlight['sell_amount'], 2, '.', ',') ?></td>
                            <td><?= $rowsFlight['issued_date'] ?></td>
                          </tr>
                          <?php
                            $flights += $rowsFlight['sell_amount'];
                            }
                          }
                      ?>
                      <tr>
                        <td colspan="3"> Total Amount  </td>
                        <td colspan="6" style="background:grey;color:#fff;font-weight:bold;"> £ <?= number_format($flights, 2, '.', ',') ?> </td>
                      </tr>
                 </tbody>
                </table>

              </div>
              <!-- end of page 01 -->
              <hr style="margin-bottom:200px;">
              <div class="page-setup">
                <br>
                 <span class="med_text">Flights Itinerary <i class="fa fa-th-list" aria-hidden="true"></i> </span>
                 <table>
                    <thead>
                       <tr>
                          <th>Airline</th>
                          <th>Flight No</th>
                          <th>Depart From</th>
                          <th>Departure Date</th>
                          <th>Arrive To</th>
                          <th>Arrive Time</th>
                          <th>Duration</th>
                       </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sqlFlightIt ="SELECT * FROM tbl_flights_itenery WHERE b_id='$b_id'";
                        $rsFlightIt = $conn->query($sqlFlightIt);
                        if($rsFlightIt->num_rows > 0){
                          while($rowFi = $rsFlightIt->fetch_assoc()){
                          ?>
                          <tr>
                              <td> <img src="<?= $rowFi['airline'] ?>" style="width:80px;" alt=""> </td>
                              <td> <?= $rowFi['flight_no'] ?></td>
                              <td> <?= $rowFi['depart_from'] ?></td>
                              <td> <?= $rowFi['depart_time'] ?></td>
                              <td> <?= $rowFi['at_airport'] ?></td>
                              <td> <?= $rowFi['arrive_time'] ?></td>
                              <td> <?= $rowFi['duration'] ?></td>
                          </tr>
                      <?php } } ?>
                    </tbody>
                 </table>
                 <?php
                 $hotel = 0;
                 $sqlHotel="SELECT * FROM tbl_hote_det WHERE b_id='$b_id'";
                 $rsHotel=$conn->query($sqlHotel);

                 if ($rsHotel->num_rows > 0) { ?>
                 <span class="med_text">Hotel Details <i class="fa fa-building" aria-hidden="true"></i> </span>
                 <table>
                                                              <thead>
                                                                 <tr>
                                                                    <th>Hotel Name</th>
                                                                    <th>Check In Date</th>
                                                                    <th>Check Out Date</th>
                                                                    <th>Room Type</th>
                                                                    <th>Board Basis</th>
                                                                    <th>Amount</th>
                                                                 </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                 while($rowHotel=$rsHotel->fetch_assoc()){
                                                                    if($rowHotel['board_basis']==1){
                                                                       $board_basis="Room only";
                                                                    }elseif ($rowHotel['board_basis']==2) {
                                                                       $board_basis="Bed & Breakfast";
                                                                    }elseif ($rowHotel['board_basis']==3) {
                                                                       $board_basis="Half Board";
                                                                    }elseif ($rowHotel['board_basis']==4) {
                                                                       $board_basis="Full Board";
                                                                    }elseif ($rowHotel['board_basis']==5) {
                                                                       $board_basis="All Inclusive";
                                                                    }elseif ($rowHotel['board_basis']==6) {
                                                                       $board_basis="Premium All Inclusive";
                                                                    }elseif ($rowHotel['board_basis']==7) {
                                                                       $board_basis="Ultra All-Inclusive";
                                                                    }else{
                                                                       $board_basis = "ERROR";
                                                                    }

                                                                    $v_id=$rowHotel['v_id'];

                                                                    $sqlvendor = "SELECT * FROM tbl_vendor_det WHERE v_id LIKE $v_id";
                                                                    $rsvendor = $conn->query($sqlvendor);

                                                                    if ($rsvendor->num_rows == 1) {
                                                                       $rowVendor = $rsvendor->fetch_assoc();
                                                                     }
                                                                    ?>



                                                                 <tr>
                                                                    <td><?= $rowHotel['h_name'] ?> </td>
                                                                    <td><?= $rowHotel['check_in_date'] ?></td>
                                                                    <td><?= $rowHotel['check_out_date'] ?></td>
                                                                    <td><?= $rowHotel['room_type'] ?></td>
                                                                    <td><?= $board_basis ?></td>
                                                                    <td>£ <?= number_format($rowHotel['sell_amount'], 2, '.', ',') ?></td>

                                                                 </tr><?php
                                                                    $hotel += $rowHotel['sell_amount'];
                                                                 }
                                                               ?>
                                                              <tr>
                                                                <td colspan="3"> Total Amount  </td>
                                                                <td colspan="7" style="background:grey;color:#fff;font-weight:bold;"> £ <?= number_format($hotel, 2, '.', ',')  ?> </td>
                                                              </tr>
                                                            </tbody>
                                                           </table>
                                                         <?php }   ?>
               </div>
               <?php
               $transfers = 0;
               $sqlTran="SELECT * FROM tbl_transfer WHERE b_id='$b_id'";
               $rsTrans=$conn->query($sqlTran);

               if ($rsTrans->num_rows>0) {
                 while ($rowTrans=$rsTrans->fetch_assoc()) {
                ?>
               <hr style="margin-bottom:200px;">
               <div class="page-setup">
                 <br>

                   <br>
                   <span class="med_text">Transfer Details <i class="fa fa-th-list" aria-hidden="true"></i> </span>
                   <table>
                                                              <tbody>
                                                                   <tr>
                                                                      <td>Pick Up Point</td>
                                                                      <td><?= $rowTrans['pick_up_point'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Drop off</td>
                                                                     <td><?= $rowTrans['drop_off'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Pick up Date & time</td>
                                                                     <td><?= $rowTrans['pick_up_date_time'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Drop off Date & time</th>
                                                                     <td><?= $rowTrans['drop_off_date_time'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Transfer Type</th>
                                                                     <td><?= $rowTrans['transfer_type'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Number of passengers</th>
                                                                     <td><?= $rowTrans['no_of_passenger'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Vehicle Type</td>
                                                                     <td><?= $rowTrans['vehicle_type'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td>Description</td>
                                                                     <td><?= $rowTrans['description'] ?></td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td>Amount</td>
                                                                     <td>£ <?= number_format($rowTrans['sell_amount'], 2, '.', ',') ?></td>
                                                                   </tr>
                                                                   <?php
                                                                      $transfers += $rowTrans['sell_amount'];

                                                                 ?>
                                                                <tr>
                                                                  <td> Total Amount  </td>
                                                                  <td style="background:grey;color:#fff;font-weight:bold;"> £ <?= number_format($transfers, 2, '.', ',') ?> </td>
                                                                </tr>


                                                                </tbody>
                                                             </table>



               </div>
               <hr style="margin-bottom:200px;">
               <?php } } ?>
               <!-- end of transfer -->
               <!-- start of other charge -->

               <div class="page-setup">
                 <br>
                 <?php
                 $otherCharge=0;
                    $sqlOther="SELECT * FROM tbl_other_charges WHERE b_id='$b_id'";
                    $rsOthers=$conn->query($sqlOther);

                    if ($rsOthers->num_rows>0) {
                          ?>
                 <span class="med_text">Other Charges <i class="fa fa-money" aria-hidden="true"></i> </span>
                 <table>
                                                              <thead>
                                                                 <tr>
                                                                    <th>Description</th>
                                                                    <th>Amount</th>
                                                                 </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                   while ($rowOthers=$rsOthers->fetch_assoc()) { ?>
                                                                 <tr>
                                                                    <td><?= $rowOthers['o_c_name'] ?></td>
                                                                    <td>£ <?= number_format($rowOthers['sell_price'], 2, '.', ',') ?></td>
                                                                 </tr>
                                                                 <?php
                                                                    $otherCharge += $rowOthers['sell_price'];
                                                               ?>
                                                              <tr>
                                                                <td colspan="1"> Total Amount  </td>
                                                                <td colspan="3" style="background:grey;color:#fff;font-weight:bold;"> £ <?= number_format($otherCharge, 2, '.', ',') ?> </td>
                                                              </tr>
                                                              <?php }  ?>

                                                              </tbody>
                                                           </table>
                                                           <br>
                                                           <hr>
                                                         <?php } ?>
                                                         <?php if ($flights > 0 && $hotel > 0 || $transfers > 0 || $otherCharge > 0): ?>
                                                           <table>
                                                             <thead>
                                                               <tr>
                                                                 <th>Flights</th>
                                                                 <th>Hotel</th>
                                                                 <th>Transfers</th>
                                                                 <th>Other Charges</th>
                                                               </tr>
                                                             </thead>
                                                             <tbody>
                                                               <tr>
                                                                 <td>£ <?= number_format($flights, 2, '.', ',') ?> </td>
                                                                 <td>£ <?= number_format($hotel, 2, '.', ',') ?> </td>
                                                                 <td>£ <?= number_format($transfers, 2, '.', ',') ?> </td>
                                                                 <td>£ <?= number_format($otherCharge, 2, '.', ',') ?> </td>
                                                               </tr>
                                                               <?php
                                                                  $totalAmount = $flights + $hotel + $transfers + $otherCharge;
                                                                ?>
                                                               <tr>
                                                                 <td>Total Amount</td>
                                                                 <td colspan="3" style="background:grey;color:#fff;font-weight:bold;">£ <?= number_format($totalAmount, 2, '.', ',') ?></td>
                                                               </tr>
                                                             </tbody>
                                                           </table>
                                                         <?php endif; ?>

               </div>
               <hr style="margin-bottom:200px;">

               <!-- end of other charge -->
<script type="text/javascript">
  window.print();
</script>
  </body>
</html>

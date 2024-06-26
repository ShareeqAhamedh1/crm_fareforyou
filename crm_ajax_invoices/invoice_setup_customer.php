<?php include '../backend/website/conn.php';

$fromDate = isset($_REQUEST['date_from']) ? $_REQUEST['date_from'] : '';
$toDate = isset($_REQUEST['date_to']) ? $_REQUEST['date_to'] : '';
$id=$_REQUEST['customer_id'];


$opening_ballance=0;
$closing_ballance=0;

    $total_debt=0;
    $total_cred=0;
    $flightVal =0;
    $hotelVal =0;
    $transferVal =0;
    $otherVal =0;

    $total_dr =0;
    $total_cr=0;


    $sqlBookings = "SELECT * FROM tbl_booking WHERE booked_date_time < '$fromDate' AND c_id='$id'";
    $rsBookings = $conn->query($sqlBookings);



    if($rsBookings->num_rows > 0){
      while($rowB = $rsBookings->fetch_assoc()){
        $bid= $rowB['b_id'];
        $flightVal += getSumValue($conn,'sell_amount','tbl_passenger_flight_bookings','b_id',$bid);
        $hotelVal +=getSumValue($conn,'sell_amount','tbl_hote_det','b_id',$bid);;
        $transferVal +=getSumValue($conn,'sell_amount','tbl_transfer','b_id',$bid);
        $otherVal +=getSumValue($conn,'sell_price','tbl_other_charges','b_id',$bid);
      }
    }

    $total_debt = $flightVal + $hotelVal + $transferVal + $otherVal;


    $sqlCredit = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date < '$fromDate' AND c_id='$id'";
    $rsCredit = $conn->query($sqlCredit);

    if($rsCredit->num_rows >0){
      $rowCredit = $rsCredit->fetch_assoc();
      $total_cred = $rowCredit['tot_paid'];
    }


    $drOrCr = "";


    if($total_debt > $total_cred){
      $drOrCr = "DR";
      $opening_ballance=$total_debt-$total_cred;

    }
    else {
      $drOrCr = "CR";
      $opening_ballance=$total_cred-$total_debt;
    }


    $selected_total_debt=0;
    $selected_total_cred=0;

    $selected_flightVal =0;
    $selected_hotelVal =0;
    $selected_transferVal =0;
    $selected_otherVal =0;


    $startDate = new DateTime($fromDate);
    $endDate = new DateTime($toDate);
    $endDate->modify('+1 day');

    $cbDrOrCr = "";


              if($opening_ballance == 0){
                $closing_ballance =0;
              }
              else if($drOrCr == "DR"){
                $closing_ballance += $opening_ballance;
                $cbDrOrCr = "DR";
              }
              else {
                $closing_ballance += $opening_ballance;
                $cbDrOrCr = "CR";
              }

              $fullName = getDataBack($conn,'tbl_customer_info','c_id',$id,'c_f_name')." ".getDataBack($conn,'tbl_customer_info','c_id',$id,'c_l_name');

?>



<div class="card-body">
  <table class="table">
    <thead class="success">
       <tr class="success">
          <th> <span style="border-radius:5px;padding:10px;background:grey;color:#fff;">Id:  <?= "#FFC 00$id" ?> </span> </th>
          <th>
            <span style="border-radius:5px;padding:10px;background:grey;color:#fff;">Name:
            <?= $fullName ?>
             </span>
           </th>
          <th>
            <span style="border-radius:5px;padding:10px;background:grey;color:#fff;">
            Opening Balance :£<?= number_format($opening_ballance,2) ?>
            </span>
          </th>
       </tr>
    </thead>
  </table>
                                 <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>DR</th>
                                                <th>CR</th>
                                                <th>Closing Amount</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                        <?php
                                        for ($date = $startDate; $date < $endDate; $date->modify('+1 day')) {
                                            $currentDate = $date->format('Y-m-d');

                                            $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time = '$currentDate' AND c_id='$id' AND status=0";
                                            $rsBookingsSelected = $conn->query($sqlBookingsSelected);

                                            $sqlCreditSelected = "SELECT * FROM tbl_customer_pay WHERE pi_date='$currentDate' AND c_id='$id'";
                                            $rsCreditSelected = $conn->query($sqlCreditSelected);

                                            $sqlPaid = "SELECT * FROM tbl_payments_to_customer WHERE pc_date='$currentDate' AND c_id='$id'";
                                            $rsPaid = $conn->query($sqlPaid);

                                          if($rsBookingsSelected->num_rows > 0){
                                            while($rowBSelected = $rsBookingsSelected->fetch_assoc()){
                                              $bid= $rowBSelected['b_id'];
                                              $flightValSelected = getSumValue($conn,'sell_amount','tbl_passenger_flight_bookings','b_id',$bid);
                                              $hotelValSelected =getSumValue($conn,'sell_amount','tbl_hote_det','b_id',$bid);;
                                              $transferValSelected =getSumValue($conn,'sell_amount','tbl_transfer','b_id',$bid);
                                              $otherValSelected =getSumValue($conn,'sell_price','tbl_other_charges','b_id',$bid);

                                              $selected_total_debt = $flightValSelected + $hotelValSelected + $transferValSelected + $otherValSelected;


                                              if($closing_ballance == 0){
                                                $closing_ballance +=$selected_total_debt;
                                                $cbDrOrCr = "DR";
                                              }
                                              else if($cbDrOrCr == "CR"){
                                                if($closing_ballance > $selected_total_debt){
                                                  $closing_ballance -=$selected_total_debt;
                                                }
                                                else {
                                                  $closing_ballance =$selected_total_debt -$closing_ballance;
                                                  $cbDrOrCr = "DR";
                                                }
                                              }
                                              else {
                                                $closing_ballance +=$selected_total_debt;
                                                $cbDrOrCr = "DR";
                                              }
                                              $tour_id =$rowBSelected['tour_id'];
                                              ?>
                                                <tr>
                                                  <td> <?= $currentDate ?> </td>
                                                  <td> Towards INV 00<?= $bid ?> | <?= $currentDate ?> | <?= $fullName ?> | (<?= getDataBack($conn,'tbl_tour','tr_id',$tour_id,'tr_title'); ?>) </td>
                                                  <td> £<?= number_format($selected_total_debt,2) ?> </td>
                                                  <td> </td>
                                                  <td> £<?= number_format($closing_ballance,2) ?> <?= $cbDrOrCr ?> </td><!-- Closing Balance -->
                                                </tr>
                                              <?php
                                            }
                                          }

                                          if($rsPaid->num_rows > 0){
                                            $rowPaid=$rsPaid->fetch_assoc();
                                              $rcp_id = $rowPaid['pc_id'];
                                              $selected_total_paid=$rowPaid['pc_amount'];

                                              if($closing_ballance == 0){
                                                $closing_ballance +=$selected_total_paid;
                                                $cbDrOrCr = "DR";
                                              }
                                              else if($cbDrOrCr == "CR"){
                                                if($closing_ballance > $selected_total_paid){
                                                  $closing_ballance -=$selected_total_paid;
                                                }
                                                else {
                                                  $closing_ballance =$selected_total_paid -$closing_ballance;
                                                  $cbDrOrCr = "DR";
                                                }
                                              }
                                              else {
                                                $closing_ballance +=$selected_total_paid;
                                                $cbDrOrCr = "DR";
                                              }

                                          ?>
                                          <tr>
                                            <td><?= $currentDate ?></td>
                                            <td> Paid to <?= $fullName ?> Via #RPC 00<?= $rcp_id ?> </td>
                                            <td> £<?= number_format($selected_total_paid,2) ?> </td>
                                            <td></td>
                                            <td>£<?= number_format($closing_ballance,2) ?> <?= $cbDrOrCr ?></td>
                                          </tr>
                                         <?php  }

                                          if($rsCreditSelected->num_rows > 0){
                                            while($rowCredit = $rsCreditSelected->fetch_assoc()){
                                              $selected_total_cred = $rowCredit['pi_amount'];

                                              $rid = $rowCredit['cp_id'];

                                              if($closing_ballance == 0){
                                                $closing_ballance +=$selected_total_cred;
                                                $cbDrOrCr = "CR";
                                              }
                                              else if($cbDrOrCr == "DR"){
                                                if($closing_ballance > $selected_total_cred){
                                                  $closing_ballance -=$selected_total_cred;
                                                }
                                                else {
                                                  $closing_ballance =$selected_total_cred -$closing_ballance;
                                                  $cbDrOrCr = "CR";
                                                }
                                              }
                                              else {
                                                $closing_ballance +=$selected_total_cred;
                                                $cbDrOrCr = "CR";
                                              }


                                              ?>
                                                <tr>
                                                  <td> <?= $currentDate ?> </td>
                                                  <td> #RCP 00<?= $rid ?> Cash Received From <?= $fullName ?> </td>
                                                  <td>  </td>
                                                  <td> £<?= number_format($selected_total_cred,2) ?> </td>
                                                  <td> £<?= number_format($closing_ballance,2) ?> <?= $cbDrOrCr ?> </td><!-- Closing Balance -->
                                                </tr>

                                              <?php
                                            }
                                          }

                                          ?>


<?php

                                        }
                                         ?>



                                          </tbody>
                                       </table>
                                    </div>

                                    <a href="statement/statement.php?customer_id=<?= $id ?>&date_from=<?= $fromDate ?>&date_to=<?= $toDate ?>" target="_blank" class="btn btn-warning btn-sm">Download Customer Statement</a>

                                 </div>

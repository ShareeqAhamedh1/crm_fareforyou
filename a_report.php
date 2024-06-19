<?php
 include './backend/website/conn.php';

$fromDate ="2024-05-06";
$toDate="2024-06-25";


$opening_ballance=0;

$closing_ballance=0;

    $id = '2';
    $total_debt=0;
    $total_cred=0;
    $flightVal =0;
    $hotelVal =0;
    $transferVal =0;
    $otherVal =0;


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
    } else {
      echo "No bookings found for c_id: $id<br>";  // Debug line to see if no bookings are found
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

    echo "$id | Opening Balance:$opening_ballance |$drOrCr| <hr>";



    $selected_total_debt=0;
    $selected_total_cred=0;

    $selected_flightVal =0;
    $selected_hotelVal =0;
    $selected_transferVal =0;
    $selected_otherVal =0;


    $startDate = new DateTime($fromDate);
    $endDate = new DateTime($toDate);
    $endDate->modify('+1 day');

    for ($date = $startDate; $date < $endDate; $date->modify('+1 day')) {
        $currentDate = $date->format('Y-m-d');

        $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time = '$currentDate' AND c_id='$id'";
        $rsBookingsSelected = $conn->query($sqlBookingsSelected);

        $sqlCreditSelected = "SELECT * FROM tbl_customer_pay WHERE pi_date='$currentDate' AND c_id='$id'";
        $rsCreditSelected = $conn->query($sqlCreditSelected);

      if($rsBookingsSelected->num_rows > 0 || $V->num_rows>0 ){
        while($rowBSelected = $rsBookingsSelected->fetch_assoc()){
          $bid= $rowBSelected['b_id'];
          $flightValSelected = getSumValue($conn,'sell_amount','tbl_passenger_flight_bookings','b_id',$bid);
          $hotelValSelected =getSumValue($conn,'sell_amount','tbl_hote_det','b_id',$bid);;
          $transferValSelected =getSumValue($conn,'sell_amount','tbl_transfer','b_id',$bid);
          $otherValSelected =getSumValue($conn,'sell_price','tbl_other_charges','b_id',$bid);
          $drOrCrSel="DR";
          $drOrCr=$drOrCrSel;

          if($rsCreditSelected->num_rows >0){
            $rowBCredit = $rsCreditSelected->fetch_assoc();
            $selected_total_cred = $rowBCredit['tot_paid'];
            echo "<hr>Total paid $selected_total_cred <hr>";
            $drOrCrCred="CR";
            $drOrCr=$drOrCrCred;
          }

          // $selected_total_cred = $rowBCredit['tot_paid'];

          
          $selected_total_debt = $flightValSelected + $hotelValSelected + $transferValSelected + $otherValSelected;

          // $opening_ballance ="1000"; CR

        

          if ($drOrCr=="DR") {
            $amount=$opening_ballance + $selected_total_debt;
           $closing_ballance += $amount;
          }else {
            $amount=$opening_ballance + $selected_total_cred;
            $closing_ballance -= $amount;
          }

          ?>
          <tr>
            <td> <?= $currentDate ?> </td>
            <td> | <?= $bid ?> (description) </td>
            <?php 
              if ($selected_total_cred==0) {
                ?> 
                 <td> |<?= $selected_total_debt,$drOrCr ?>  </td><!-- DR --> 
                 <td> |</td><!-- CR -->
                <?php
                
              }else if ($selected_total_debt==0) {
                ?> 
                 <td> |</td><!-- DR -->
                 <td> |<?= $selected_total_cred,$drOrCr ?>  </td><!-- DR --> 
                <?php

              }
            ?>
           
          
            <td> |<?= $closing_ballance,$drOrCr ?></td><!-- Closing Balance -->
          </tr>
          <hr>
          <?php

        }
      }
      else {
        // echo "$sqlBookingsSelected";
      }



    }
    exit();












//
//
// $tot_debt = "1000";
//
// $tot_recived = "300";
//
// $opening_balance = "700"."CR";
// // done
//
// $selectedDate_tot_deb = "400";
//
// $selectedDate_tot_recived = "100";
//
// $amount  ="300"."DR";
//
// $closingBalance = "400"."CR";
//
// $sql ="";



 ?>

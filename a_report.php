<?php
 include './backend/website/conn.php';

$fromDate ="2024-06-11";
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


    echo "Opening Balance: $opening_ballance | $drOrCr<hr>";

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
  echo "Closing Balance: $closing_ballance | $cbDrOrCr <hr> ";

    for ($date = $startDate; $date < $endDate; $date->modify('+1 day')) {
        $currentDate = $date->format('Y-m-d');

        $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time = '$currentDate' AND c_id='$id'";
        $rsBookingsSelected = $conn->query($sqlBookingsSelected);

        $sqlCreditSelected = "SELECT * FROM tbl_customer_pay WHERE pi_date='$currentDate' AND c_id='$id'";
        $rsCreditSelected = $conn->query($sqlCreditSelected);

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

          ?>
            <tr>
              <td> <?= $currentDate ?> </td>
              <td> <?= $bid ?> (description) </td>
              <td> <?= $selected_total_debt ?> </td>
              <td> </td>
              <td> <?= $closing_ballance,$cbDrOrCr ?></td><!-- Closing Balance -->
            </tr>
          <hr>
          <?php
        }
      }

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
              <td> <?= $rid ?> (description) </td>
              <td>  </td>
              <td> <?= $selected_total_cred ?> </td>
              <td> <?= $closing_ballance,$cbDrOrCr ?></td><!-- Closing Balance -->
            </tr>

          <?php
        }
      }



    }




 ?>

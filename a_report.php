<?php
 include './backend/website/conn.php';

$fromDate ="2024-05-02";
$toDate="2024-05-25";


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

        echo "$id | Opening Dept:$total_debt <hr>";
        echo "$id | Opening Credit:$total_cred <hr>";

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
      if($rsBookingsSelected->num_rows > 0){
        while($rowBSelected = $rsBookingsSelected->fetch_assoc()){
          $bid= $rowBSelected['b_id'];
          $flightValSelected += getSumValue($conn,'sell_amount','tbl_passenger_flight_bookings','b_id',$bid);
          $hotelValSelected +=getSumValue($conn,'sell_amount','tbl_hote_det','b_id',$bid);;
          $transferValSelected +=getSumValue($conn,'sell_amount','tbl_transfer','b_id',$bid);
          $otherValSelected +=getSumValue($conn,'sell_price','tbl_other_charges','b_id',$bid);

          $selected_total_debt = $flightValSelected + $hotelValSelected + $transferValSelected + $otherValSelected;

      ?>


      <?php

        }
      }

      $sqlCreditSelected = "SELECT * FROM tbl_customer_pay WHERE pi_date = '$currentDate' AND c_id='$id'";
       $rsCreditSelected = $conn->query($sqlCreditSelected);

      if($rsCreditSelected->num_rows >0){
        while($rowCreditSelected = $rsCreditSelected->fetch_assoc()){
            $selected_total_cred = 1000;
            $drOrCrSel = "";
            $amount=0;


            if($selected_total_debt > $selected_total_cred){
              $drOrCrSel = "DR";
              $amount=$selected_total_debt-$selected_total_cred;

            }
            else {
              $drOrCrSel = "CR";
              $amount=$selected_total_cred-$selected_total_debt;
            }

            $drOrCrFinal="";
            if ($drOrCr==$drOrCrSel) {
                $closing_ballance=$opening_ballance+$amount;
                $drOrCrFinal=$drOrCr;
            }else if($drOrCr="CR" && $drOrCrSel="DR") {
                if ($opening_ballance>$amount) {
                    $closing_ballance=$opening_ballance-$amount;
                    $drOrCrFinal="CR";

                }else{
                    $closing_ballance=$amount-$opening_ballance;
                    $drOrCrFinal="DR";
                }

            }else if($drOrCr="DR" && $drOrCrSel="CR"){
                if ($opening_ballance>$amount) {
                    $closing_ballance=$opening_ballance-$amount;
                    $drOrCrFinal="DR";
                }else{
                    $closing_ballance=$amount-$opening_ballance;
                    $drOrCrFinal="CR";
                }
            }
        }
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

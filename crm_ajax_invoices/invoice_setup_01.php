<?php include '../backend/website/conn.php';

$fromDate = isset($_REQUEST['date_from']) ? $_REQUEST['date_from'] : '';
$toDate = isset($_REQUEST['date_to']) ? $_REQUEST['date_to'] : '';

$tpack_id = $_REQUEST['tpack_id'];

$finalAmountDr=0;
$finalAmountCr=0;
?>


<div class="card-body">
                                 <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>Customer Id</th>
                                                <th>Name</th>
                                                <th>Opening Balance</th>
                                                <th>Dr/Cr</th>
                                                <th>Debit Amount</th>
                                                <th>Credit Amount</th>
                                                <th>Closing Balance</th>
                                                <th>Cr/Dr</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $sql = "SELECT * FROM tbl_customer_info";
                                            $rs = $conn->query($sql);
                                            $opening_ballance=0;
                                            $closing_ballance=0;

                                            if($rs->num_rows > 0){
                                              $i=0;
                                              while($row = $rs->fetch_assoc()){
                                                $id = $row['c_id'];
                                                $total_debt=0;
                                                $total_Cred=0;
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
                                                  $total_Cred = $rowCredit['tot_paid'];
                                                }

                                                $DrOrCr = "";


                                                if($total_debt > $total_Cred){
                                                  $DrOrCr = "Dr";
                                                  $opening_ballance=$total_debt-$total_Cred;

                                                }
                                                else {
                                                  $DrOrCr = "Cr";
                                                  $opening_ballance=$total_Cred-$total_debt;
                                                }


                                                $selected_total_debt=0;
                                                $selected_total_Cred=0;

                                                $selected_flightVal =0;
                                                $selected_hotelVal =0;
                                                $selected_transferVal =0;
                                                $selected_otherVal =0;

                                                $setofarray = array();

                                                if($tpack_id != "all"){
                                                  $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time BETWEEN '$fromDate' AND '$toDate' AND c_id='$id'  AND tour_id='$tpack_id'";
                                                }
                                                else {
                                                  $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time BETWEEN '$fromDate' AND '$toDate' AND c_id='$id'";
                                                }

                                                $rsBookingsSelected = $conn->query($sqlBookingsSelected);


                                                if($rsBookingsSelected->num_rows > 0){
                                                  while($rowBSelected = $rsBookingsSelected->fetch_assoc()){
                                                    $bid= $rowBSelected['b_id'];
                                                    $selected_flightVal += getSumValue($conn,'sell_amount','tbl_passenger_flight_bookings','b_id',$bid);
                                                    $selected_hotelVal +=getSumValue($conn,'sell_amount','tbl_hote_det','b_id',$bid);;
                                                    $selected_transferVal +=getSumValue($conn,'sell_amount','tbl_transfer','b_id',$bid);
                                                    $selected_otherVal +=getSumValue($conn,'sell_price','tbl_other_charges','b_id',$bid);

                                                    $sqlPush = "SELECT * FROM tbl_set_off_invoice WHERE b_id='$bid'";
                                                    $rsPush = $conn->query($sqlPush);
                                                    if($rsPush->num_rows > 0){
                                                      while($rowPush = $rsPush->fetch_assoc()){
                                                        $cp_id = $rowPush['cp_id'];
                                                        array_push($setofarray,$cp_id);
                                                      }
                                                    }
                                                  }
                                                }

                                                $selected_total_debt = $selected_flightVal + $selected_hotelVal + $selected_transferVal + $selected_otherVal;

                                                $selected_total_debt = $selected_flightVal + $selected_hotelVal + $selected_transferVal + $selected_otherVal;

                                                $convertedSetOfValues = implode(',',$setofarray);

                                                if($tpack_id == "all"){
                                                  $sqlCreditSelected = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date BETWEEN '$fromDate' AND '$toDate' AND c_id='$id'";
                                                }
                                                else{
                                                  $sqlCreditSelected = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date BETWEEN '$fromDate' AND '$toDate' AND cp_id IN ($convertedSetOfValues)";
                                                }

                                                $convertedSetOfValues = implode(',',$setofarray);

                                                if($tpack_id == "all"){
                                                  $sqlCreditSelected = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date BETWEEN '$fromDate' AND '$toDate' AND c_id='$id'";
                                                }
                                                else{
                                                  if($convertedSetOfValues != ""){
                                                    $sqlCreditSelected = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date BETWEEN '$fromDate' AND '$toDate' AND cp_id IN ($convertedSetOfValues)";
                                                  }
                                                }
                                                if($convertedSetOfValues != ""){
                                                  $rsCreditSelected = $conn->query($sqlCreditSelected);
                                                }
                                                if($rsCreditSelected->num_rows >0){
                                                  $rowCreditSelected = $rsCreditSelected->fetch_assoc();
                                                  $selected_total_Cred = $rowCreditSelected['tot_paid'];
                                                }
                                                else{
                                                  $selected_total_Cred = 0;
                                                }

                                                $DrOrCrSel = "";
                                                $balance_am =0;

                                                if ($selected_total_debt != 0 || $selected_total_Cred != 0) {
                                                    if ($selected_total_debt == $selected_total_Cred) {
                                                        $DrOrCrSel = "Cr";
                                                        $balance_am = 0;
                                                    } else if ($selected_total_debt > $selected_total_Cred) {
                                                        $DrOrCrSel = "Dr";
                                                        $balance_am = $selected_total_debt - $selected_total_Cred;
                                                    } else {
                                                        $DrOrCrSel = "Cr";
                                                        $balance_am = $selected_total_Cred - $selected_total_debt;
                                                    }

                                                    if ($opening_ballance == 0) {
                                                        $closing_ballance = $balance_am;
                                                        $DrOrCr = $DrOrCrSel; // Set the DrOrCr based on the current calculation
                                                    } else {
                                                        if ($DrOrCr == $DrOrCrSel) {
                                                            $closing_ballance += $balance_am;
                                                        } else {
                                                            if ($DrOrCr == "Dr") {
                                                                if ($opening_ballance > $balance_am) {
                                                                    $DrOrCrSel = "Dr";
                                                                    $closing_ballance = $opening_ballance - $balance_am;
                                                                } else {
                                                                    $DrOrCrSel = "Cr";
                                                                    $closing_ballance = $balance_am - $opening_ballance;
                                                                }
                                                            } else if ($DrOrCr == "Cr") {
                                                                if ($opening_ballance > $balance_am) {
                                                                    $DrOrCrSel = "Cr";
                                                                    $closing_ballance = $opening_ballance - $balance_am;
                                                                } else {
                                                                    $DrOrCrSel = "Dr";
                                                                    $closing_ballance = $balance_am - $opening_ballance;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }



                                                $finalDebt +=$selected_total_debt;
                                                $finalCr +=$selected_total_Cred;

                                                if($DrOrCrSel == "Dr"){
                                                  $finalAmountDr +=$closing_ballance;
                                                }

                                                if($DrOrCrSel == "Cr") {
                                                  $finalAmountCr +=$closing_ballance;
                                                }

                                                $skip_use = $selected_total_debt+ $selected_total_Cred;
                                                if($skip_use == 0){
                                                  continue;
                                                }
                                                else{
                                                ?>



       <tr>
        <td> <?= "#FFC 00$id" ?> </td>
        <td> <?= getDataBack($conn,'tbl_customer_info','c_id',$id,'c_f_name')." ".getDataBack($conn,'tbl_customer_info','c_id',$id,'c_l_name'); ?> </td>
        <td> £<?= number_format($opening_ballance,2) ?> </td>
        <td> <span style="font-weight:bold;color:<?php if($DrOrCr =='Dr'){ echo '#0af295'; }else{ echo '#066d80'; } ?>;"><?= $DrOrCr ?></span> </td>
        <td> £<?= number_format($selected_total_debt,2) ?> </td>
        <td> £<?= number_format($selected_total_Cred,2) ?> </td>
        <td> £<?= number_format($closing_ballance,2) ?> </td>
        <td> <span style="font-weight:bold;color:<?php if($DrOrCrSel =='Dr'){ echo '#0af295'; }else{ echo '#066d80'; } ?>;"><?= $DrOrCrSel ?></span>  </td>
       </tr>
       <?php
     }
         }
       }

       if($finalAmountDr > $finalAmountCr){
         $DrOrCrTot = "Dr";
         $oneFinalAmount=$finalAmountDr-$finalAmountCr;

       }
       else {
         $DrOrCrTot = "Cr";
         $opening_ballance=$finalAmountCr-$finalAmountDr;
       }

       ?>
       <tr>
         <td colspan="4" > <div style="float:right;font-weight:bold;"> Total </div>  </td>
         <td colspan="1" style="font-weight:bold;"> £<?= number_format($finalDebt,2) ?> </td>
         <td colspan="1" style="font-weight:bold;"> £<?= number_format($finalCr,2) ?> </td>
         <td colspan="1" style="font-weight:bold;"> £<?= number_format($finalAmountDr,2) ?> </td>
         <td colspan="1"> <span style="font-weight:bold;color:<?php if($DrOrCrTot =='Dr'){ echo '#0af295'; }else{ echo '#066d80'; } ?>;"><?= $DrOrCrTot ?></span>  </td>
       </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

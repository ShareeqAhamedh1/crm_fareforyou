<?php include '../backend/website/conn.php';

$fromDate = isset($_REQUEST['date_from']) ? $_REQUEST['date_from'] : '';
$toDate = isset($_REQUEST['date_to']) ? $_REQUEST['date_to'] : '';

$tpack_id = $_REQUEST['tpack_id'];

$finalAmountDr = 0;
$finalAmountCr = 0;
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

                if ($rs->num_rows > 0) {
                    while ($row = $rs->fetch_assoc()) {
                        $id = $row['c_id'];

                        $opening_balance = 0;
                        $closing_balance = 0;

                        $cOp = $row['op_baln'];
                        $cDrCr = $row['dr_cr'];

                        $total_debt = 0;
                        $total_credit = 0;

                        // Calculate the opening balance
                        $sqlBookings = "SELECT * FROM tbl_booking WHERE booked_date_time < '$fromDate' AND c_id='$id'";
                        $rsBookings = $conn->query($sqlBookings);

                        if ($rsBookings->num_rows > 0) {
                            while ($rowB = $rsBookings->fetch_assoc()) {
                                $bid = $rowB['b_id'];
                                $total_debt += getSumValue($conn, 'sell_amount', 'tbl_passenger_flight_bookings', 'b_id', $bid);
                                $total_debt += getSumValue($conn, 'sell_amount', 'tbl_hote_det', 'b_id', $bid);
                                $total_debt += getSumValue($conn, 'sell_amount', 'tbl_transfer', 'b_id', $bid);
                                $total_debt += getSumValue($conn, 'sell_price', 'tbl_other_charges', 'b_id', $bid);
                            }
                        }

                        $sqlCredit = "SELECT SUM(pi_amount) AS tot_paid FROM tbl_customer_pay WHERE pi_date < '$fromDate' AND c_id='$id'";
                        $rsCredit = $conn->query($sqlCredit);

                        if ($rsCredit->num_rows > 0) {
                            $rowCredit = $rsCredit->fetch_assoc();
                            $total_credit = $rowCredit['tot_paid'];
                        }

                        if ($total_debt > $total_credit) {
                            $drOrCr = "DR";
                            $opening_balance = $total_debt - $total_credit;
                        } else {
                            $drOrCr = "CR";
                            $opening_balance = $total_credit - $total_debt;
                        }


                        $setofarray = array();
                        // Calculate the closing balance
                        $selected_total_debt = 0;
                        $selected_total_credit = 0;

                        if($tpack_id == "all"){
                          $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time >= '$fromDate' AND booked_date_time <= '$toDate' AND c_id='$id' AND pay_term=1 AND status=0";
                        }
                        else {
                          $sqlBookingsSelected = "SELECT * FROM tbl_booking WHERE booked_date_time >= '$fromDate' AND booked_date_time <= '$toDate' AND c_id='$id' AND tour_id='$tpack_id' AND pay_term=1 AND status=0";
                        }

                        $rsBookingsSelected = $conn->query($sqlBookingsSelected);

                        if ($rsBookingsSelected->num_rows > 0) {
                            while ($rowBSelected = $rsBookingsSelected->fetch_assoc()) {
                                $bid = $rowBSelected['b_id'];
                                $selected_total_debt += getSumValue($conn, 'sell_amount', 'tbl_passenger_flight_bookings', 'b_id', $bid);
                                $selected_total_debt += getSumValue($conn, 'sell_amount', 'tbl_hote_det', 'b_id', $bid);
                                $selected_total_debt += getSumValue($conn, 'sell_amount', 'tbl_transfer', 'b_id', $bid);
                                $selected_total_debt += getSumValue($conn, 'sell_price', 'tbl_other_charges', 'b_id', $bid);

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


                        if($setofarray == ""){
                          $selected_total_credit = 0;
                        }
                        else{
                          $convertedSetOfValues = implode(',',$setofarray);
                          $sqlCreditSelected = "SELECT * FROM tbl_customer_pay WHERE pi_date >= '$fromDate' AND pi_date <= '$toDate' AND cp_id IN($convertedSetOfValues) AND c_id='$id'";
                          $rsCreditSelected = $conn->query($sqlCreditSelected);

                          if ($rsCreditSelected->num_rows > 0) {
                              while ($rowCreditSelected = $rsCreditSelected->fetch_assoc()) {
                                  $selected_total_credit += $rowCreditSelected['pi_amount'];
                              }
                          }
                        }




                        if($tpack_id != "all"){
                          if($selected_total_debt == 0){
                            $selected_total_credit = 0;
                          }
                        }
                        // Calculate closing balance based on opening balance and transactions within the selected date range
                        if ($opening_balance == 0) {
                            if ($selected_total_debt > $selected_total_credit) {
                                $closing_balance = $selected_total_debt - $selected_total_credit;
                                $cbDrOrCr = "DR";
                            } else {
                                $closing_balance = $selected_total_credit - $selected_total_debt;
                                $cbDrOrCr = "CR";
                            }
                        } else {
                            if ($drOrCr == "DR") {
                                $closing_balance = $opening_balance + $selected_total_debt - $selected_total_credit;
                                $cbDrOrCr = $closing_balance >= 0 ? "DR" : "CR";
                                $closing_balance = abs($closing_balance);
                            } else {
                                $closing_balance = $opening_balance + $selected_total_credit - $selected_total_debt;
                                $cbDrOrCr = $closing_balance >= 0 ? "CR" : "DR";
                                $closing_balance = abs($closing_balance);
                            }
                        }

                        $fullName = getDataBack($conn, 'tbl_customer_info', 'c_id', $id, 'c_f_name') . " " . getDataBack($conn, 'tbl_customer_info', 'c_id', $id, 'c_l_name');

    if($opening_ballance == 0){
                          $DrOrCr = $cDrCr;
                            $opening_ballance=$cOp;
                        }
                        else if($DrOrCr == $cDrCr){
                            $opening_ballance +=$cOp;
                        }

                        $finalDebt +=$selected_total_debt;
                        $finalCr +=$selected_total_credit;


                        if($finalDebt >= $finalCr){
                          $DrOrCrTot ="Dr";
                          $finalAmountDr = $finalDebt - $finalCr;
                        }
                        else {
                          $DrOrCrTot ="Dr";
                          $finalAmountDr =  $finalCr - $finalDebt;
                        }

                        if($finalAmountDr == 0){
                          $DrOrCrTot ="Cr";
                        }

                        if($closing_balance !=0){
                ?>

                        <tr>
                            <td><?= "#FFC 00$id" ?></td>
                            <td><a href="payment_plan_customer.php?name=<?= $fullName ?>&ccid=<?= $id ?>" target="_blank"><?= $fullName ?></a></td>
                            <td>£<?= number_format($opening_balance, 2) ?></td>
                            <td><span style="font-weight:bold;color:<?php if ($drOrCr == 'DR') {
                                                                            echo '#0af295';
                                                                        } else {
                                                                            echo '#066d80';
                                                                        } ?>;"><?= $drOrCr ?></span></td>
                            <td>£<?= number_format($selected_total_debt, 2) ?></td>
                            <td>£<?= number_format($selected_total_credit, 2) ?></td>
                            <td>£<?= number_format($closing_balance, 2) ?></td>
                            <td><span style="font-weight:bold;color:<?php if ($cbDrOrCr == 'DR') {
                                                                            echo '#0af295';
                                                                        } else {
                                                                            echo '#066d80';
                                                                        } ?>;"><?= $cbDrOrCr ?></span></td>
                        </tr>
                <?php
              }
                    }
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

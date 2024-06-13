<?php include '../backend/website/conn.php';
 $b_id = $_REQUEST['b_id'];
 $_SESSION['b_id'] = $_REQUEST['b_id'];
 $sqlBooking = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
 $rsBooking = $conn->query($sqlBooking);
 if($rsBooking->num_rows > 0){
   $rowBooking = $rsBooking->fetch_assoc();
   $pay_st = $rowBooking['p_sta'];
 }
?>


<div class="table-responsive">
                                      <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                         <thead class="back_table_color">
                                            <tr class="info">
                                               <th>ID</th>
                                               <th>Amount</th>
                                               <th>Description</th>
                                               <th>Date</th>
                                               <th>Payment Type</th>
                                               <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           <?php
                                              $sql_cus = "SELECT * FROM tbl_paid_info WHERE b_id='$b_id'";
                                              $rs_cus = $conn->query($sql_cus);
                                              if($rs_cus->num_rows > 0){
                                                while($row_cus = $rs_cus->fetch_assoc()){
                                                  $paytypeid =$row_cus['pm_id'];
                                                  $paytype = getDataBack($conn,'tbl_payment_method','pm_id',$paytypeid,'pm_type');
                                            ?>
                                           <tr>
                                             <td><?= $row_cus['pi_id'] ?></td>
                                             <td>£ <?= number_format($row_cus['pi_amount'], 2, '.', ',') ?></td>
                                             <td><?= $row_cus['pi_description'] ?></td>
                                             <td><?= $row_cus['pi_date'] ?></td>
                                             <td><?= $paytype ?></td>
                                             <td> <a href="recipt/paidinvoice.php?id=<?= $row_cus['pi_id'] ?>" class="btn btn-warning btn-sm">Download Payment Recipt</a> </td>
                                           </tr>
                                         <?php } } ?>
                                         </tbody>
                                       </table>
                                     </div>

<?php include '../backend/website/conn.php';

$b_id=$_SESSION['b_id'];?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>Vendors</th>
                                                   <th>Hotel Name</th>
                                                   <th>Hotel Address</th>
                                                   <th>Check In Date</th>
                                                   <th>Check Out Date</th>
                                                   <th>Room Type</th>
                                                   <th>Board Basis</th>
                                                   <th>Buy Amount</th>
                                                   <th>Sell Amount</th>
                                                   <th>Free Cancelation Date Deadline</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                               $cost =0;
                                               $sales = 0;
                                               $pro_lost =0;
                                               $sqlHotel="SELECT * FROM tbl_hote_det WHERE b_id='$b_id'";
                                               $rsHotel=$conn->query($sqlHotel);

                                               if ($rsHotel->num_rows > 0) {
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
                                                   <td><?= $rowVendor['v_name'] ?></td>
                                                   <td><?= $rowHotel['h_name'] ?> </td>
                                                   <td><?= $rowHotel['hotel_address'] ?> </td>
                                                   <td><?= $rowHotel['check_in_date'] ?></td>
                                                   <td><?= $rowHotel['check_out_date'] ?></td>
                                                   <td><?= $rowHotel['room_type'] ?></td>
                                                   <td><?= $board_basis ?></td>
                                                   <td>£ <?= $rowHotel['buy_amount'] ?></td>
                                                   <td>£ <?= $rowHotel['sell_amount'] ?></td>
                                                   <td><?= $rowHotel['free_cancellation_date_deadline'] ?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-add btn-sm" onclick="openHotelEditModal(<?= $rowHotel['h_id'] ?>)"><i class="fa fa-pencil"></i></button> <br> <br>
                                                    <button type="button" onclick="del_p_hd(<?= $rowHotel['h_id'] ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr><?php
                                                }

                                             }
                                              ?>




                                             </tbody>
                                          </table>
                                       </div>

<?php include '../backend/website/conn.php';

$b_id=$_SESSION['b_id'];
?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Name</th>
                                                   <th>Vendor name</th>
                                                   <th>E-Ticket No</th>
                                                   <th>Basic Fare</th>
                                                   <th>Sold Amount</th>
                                                   <th>Ticket Issued Date</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>

                                             <?php
                                             $cost =0;
                                             $sales = 0;
                                             $pro_lost =0;
                                                $sqlFlights="SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id'";
                                                $rsFlights=$conn->query($sqlFlights);

                                                if($rsFlights->num_rows>0){
                                                   while($rowsFlight=$rsFlights->fetch_assoc()){

                                                   $v_id=$rowsFlight['v_id'];

                                                   $sqlvendor = "SELECT * FROM tbl_vendor_flights WHERE f_id LIKE $v_id";
                                                   $rsvendor = $conn->query($sqlvendor);

                                                   if ($rsvendor->num_rows == 1) {
                                                      $rowVendor = $rsvendor->fetch_assoc();
                                                    }
                                                    $pas_id = $rowsFlight['pas_id'];
                                                    $pasName = $rowsFlight['p_f_name'];
                                                      ?>

                                                <tr>
                                                   <td><?= $pasName ?></td>
                                                   <td><?= $rowVendor['f_v_name'] ?></td>
                                                   <td><?= $rowsFlight['e_ticket_no'] ?></td>
                                                   <td>£ <?= $rowsFlight['buy_amount'] ?></td>
                                                   <td>£ <?= $rowsFlight['sell_amount'] ?></td>
                                                   <td><?= $rowsFlight['issued_date'] ?></td>
                                                    <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="openPassengerEditModal(<?= $rowsFlight['p_id'] ?>)"><i class="fa fa-pencil"></i></button> 
                                                      <button type="button" onclick="del_p_fd(<?= $rowsFlight['p_id'] ?>,<?= $lpn ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                                <?php

                                                  }
                                                }
                                             ?>



                                             </tbody>
                                          </table>
                                       </div>

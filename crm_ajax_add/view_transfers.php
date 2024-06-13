<?php include '../backend/website/conn.php';
$b_id=$_SESSION['b_id'];
?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                  <th>Vendor</th>
                                                   <th>Pick Up Point</th>
                                                   <th>Drop off</th>
                                                   <th>Pick up Date & time</th>
                                                   <th>Drop off Date & time</th>
                                                   <th>Transfer Type</th>
                                                   <th>Number of passengers</th>
                                                   <th>Vehicle Type</th>
                                                   <th>Description</th>
                                                   <th>Buy Amount</th>
                                                   <th>Sell Amount</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                $cost =0;
                                                $sales = 0;
                                                $pro_lost=0;
                                                $sqlTran="SELECT * FROM tbl_transfer WHERE b_id='$b_id'";
                                                $rsTrans=$conn->query($sqlTran);

                                                if ($rsTrans->num_rows>0) {
                                                   while ($rowTrans=$rsTrans->fetch_assoc()) {

                                                    $v_id=$rowTrans['v_id'];


                                                      ?>


                                                <tr>
                                                   <td><?= getDataBack($conn,'tbl_vendor_det','v_id',$v_id,'v_name') ?></td>
                                                   <td><?= $rowTrans['pick_up_point'] ?></td>
                                                   <td><?= $rowTrans['drop_off'] ?></td>
                                                   <td><?= $rowTrans['pick_up_date_time'] ?></td>
                                                   <td><?= $rowTrans['drop_off_date_time'] ?></td>
                                                   <td><?= $rowTrans['transfer_type'] ?></td>
                                                   <td><?= $rowTrans['no_of_passenger'] ?></td>
                                                   <td><?= $rowTrans['vehicle_type'] ?></td>
                                                   <td><?= $rowTrans['description'] ?></td>
                                                   <td><?= $rowTrans['buy_amount'] ?></td>
                                                   <td><?= $rowTrans['sell_amount'] ?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-add btn-sm" onclick="openTransferEditModal(<?= $rowTrans['t_id'] ?>)"><i class="fa fa-pencil"></i></button> <br> <br>
                                                    <button type="button" onclick="del_p_td(<?= $rowTrans['t_id'] ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                    </td>
                                                </tr>
                                                <?php

                                                  }
                                                }


                                              ?>


                                             </tbody>
                                          </table>
                                       </div>

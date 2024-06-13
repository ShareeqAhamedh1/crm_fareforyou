<?php include '../backend/website/conn.php'; ?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Description</th>
                                                   <th>Vendor</th>
                                                   <th>Buy Price</th>
                                                   <th>Sell Price</th>

                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $cost =0;
                                                $sales=0;
                                                $pro_lost=0;
                                                $bid = $_SESSION['b_id'];
                                                   $sqlOther="SELECT * FROM tbl_other_charges WHERE b_id='$bid'";
                                                   $rsOthers=$conn->query($sqlOther);

                                                   if ($rsOthers->num_rows>0) {
                                                      while ($rowOthers=$rsOthers->fetch_assoc()) {



                                                   $v_id=$rowOthers['v_id'];

                                                         ?>
                                                <tr>

                                                   <td><?= $rowOthers['o_c_name'] ?></td>
                                                   <td><?= getDataBack($conn,'tbl_vendor_det','v_id',$v_id,'v_name') ?></td>
                                                   <td>£ <?= $rowOthers['buy_price'] ?></td>
                                                   <td>£ <?= $rowOthers['sell_price'] ?></td>
                                                    <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="openOtherChargesEditModal(<?= $rowOthers['o_c_id'] ?>)"><i class="fa fa-pencil"></i></button>
                                                      <button type="button" class="btn btn-danger btn-sm"
                                                      onclick="delOtherCharge(<?= $rowOthers['o_c_id'] ?>)"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                                <?php
                                                
                                                }
                                              }
                                              ?>



                                             </tbody>
                                          </table>
                                       </div>

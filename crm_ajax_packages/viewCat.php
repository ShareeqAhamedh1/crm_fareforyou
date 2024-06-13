<?php include '../backend/website/conn.php'; ?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Categories</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php

                                                $id = $_SESSION['pack_insert_id'];
                                                   $sqlOther="SELECT * FROM tbl_cat_of_packages WHERE pack_id='$id'";
                                                   $rsOthers=$connWeb->query($sqlOther);

                                                   if ($rsOthers->num_rows>0) {
                                                      while ($rowOthers=$rsOthers->fetch_assoc()) {
                                                        $cid = $rowOthers['pc_id'];

                                                         ?>
                                                <tr>

                                                   <td><?= getDataBack($connWeb,'tbl_package_cat','pc_id',$cid,'pc_name') ?></td>
                                                    <td>
                                                      <button type="button" class="btn btn-danger btn-sm"
                                                      onclick="delCat(<?= $rowOthers['cp_id'] ?>)"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                                <?php

                                                  }
                                                }

                                              ?>


                                             </tbody>
                                          </table>
                                       </div>

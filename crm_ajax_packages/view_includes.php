<?php include '../backend/website/conn.php'; ?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Includes</th>

                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                               
                                                $id = $_SESSION['pack_insert_id'];
                                                   $sqlOther="SELECT * FROM tbl_includes WHERE pack_id='$id'";
                                                   $rsOthers=$connWeb->query($sqlOther);

                                                   if ($rsOthers->num_rows>0) {
                                                      while ($rowOthers=$rsOthers->fetch_assoc()) {

                                                         ?>
                                                <tr>

                                                   <td><?= $rowOthers['include'] ?></td>
                                                    <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="openIncludeEditModal(<?= $rowOthers['i_id'] ?>)"><i class="fa fa-pencil"></i></button>
                                                      <button type="button" class="btn btn-danger btn-sm"
                                                      onclick="delInclude(<?= $rowOthers['i_id'] ?>)"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                                <?php
                                            
                                                  }
                                                }
                                              
                                              ?>
                                           

                                             </tbody>
                                          </table>
                                       </div>

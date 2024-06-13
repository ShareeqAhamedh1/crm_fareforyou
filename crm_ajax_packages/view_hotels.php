<?php include '../backend/website/conn.php'; ?>
<div class="table-responsive">

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">

                                                   <th>Hotel name</th>
                                                   <th>Hotel Location Link</th>
                                                   <th>Hotel Other Link</th>
                                                   <th>Rating</th>

                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php

                                                $id = $_SESSION['pack_insert_id'];
                                                   $sqlOther="SELECT * FROM tbl_hotels WHERE pack_id='$id'";
                                                   $rsOthers=$connWeb->query($sqlOther);

                                                   if ($rsOthers->num_rows>0) {
                                                      while ($rowOthers=$rsOthers->fetch_assoc()) {

                                                         ?>
                                                <tr>

                                                   <td><?= $rowOthers['hotel'] ?></td>
                                                   <td><?= $rowOthers['h_location_link'] ?></td>
                                                   <td><?= $rowOthers['h_other_links'] ?></td>
                                                   <td><?= $rowOthers['h_rating'] ?>&#9733;</td>
                                                    <td>
                                                      <button type="button" class="btn btn-add btn-sm" onclick="openHotelEditModal(<?= $rowOthers['h_id'] ?>)"><i class="fa fa-pencil"></i></button>
                                                      <a href="multi_images_package_hotel.php?id=<?= $rowOthers['h_id'] ?>" class="btn btn-warning btn-sm"> Add more images</a>
                                                      <button type="button" class="btn btn-danger btn-sm"
                                                      onclick="delHotel(<?= $rowOthers['h_id'] ?>)"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                                <?php

                                                  }
                                                }

                                              ?>


                                             </tbody>
                                          </table>
                                       </div>

<?php
  include '../backend/website/conn.php';
  $id = $_REQUEST['a_id'];

  $sqlAirline = "SELECT * FROM tbl_airlines WHERE al_id='$id'";
  $rsAirline = $connWeb->query($sqlAirline);

  if($rsAirline->num_rows > 0){
    $rowAirline = $rsAirline->fetch_assoc();
  }
 ?>

<div class="card-body">
    <input type="hidden" value="<?= $id ?>" name="" id="e_id">
                                <div class="form-group">
                                   <label>Airline Code</label>
                                   <input id="e_al_code" type="text" class="form-control" placeholder="Ex:EK" value="<?= $rowAirline['al_code'] ?>" required>
                                </div>
                                <div class="form-group">
                                   <label>Airline Name</label>
                                   <input id="e_al_name" type="text" class="form-control" placeholder="Ex:Emirates" value="<?= $rowAirline['al_name'] ?>" required>
                                </div>                                
                                <div class="form-group">
                                   <label>Airline Country</label>
                                   <input id="e_al_country" type="text" class="form-control" placeholder="Ex:America" value="<?= $rowAirline['al_country'] ?>" required>
                                </div>
                                <div class="form-group">
                                   <label>Airline Image</label>
                                   <input id="e_al_image" type="file" class="form-control" required>
                                   <small>Size: 200 X 300</small>
                                </div>
                                
                                <div class="reset-button">
                                   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                   <a onClick="editAirline()" class="btn btn-success"> Edit</a>
                                </div>
                           </div>
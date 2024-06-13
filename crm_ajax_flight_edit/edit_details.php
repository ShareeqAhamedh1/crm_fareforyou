<?php
  include '../backend/website/conn.php';
  $id = $_REQUEST['fid'];

  $sqlFlight = "SELECT * FROM tbl_flights WHERE flight_id='$id'";
  $rsFlight = $connWeb->query($sqlFlight);

  if($rsFlight->num_rows > 0){
    $rowFlight = $rsFlight->fetch_assoc();

    $continent_id = $rowFlight['continent_id'];
    $country_id = $rowFlight['country_id'];
  }
 ?>

<input type="hidden" id="id"  name="" value="<?= $rowFlight['flight_id'] ?>">
<div class="form-group">
   <label>Fly From</label>
   <input id="flyFrom" type="text" value="<?= $rowFlight['fly_from'] ?>" class="form-control" placeholder="Ex:Dubai To" required>
</div>
<div class="form-group">
   <label>Fly To</label>
   <input id="flyTo" type="text" value="<?= $rowFlight['fly_to'] ?>" class="form-control" placeholder="Ex:London" required>
</div>
<div class="form-group">
   <label>Price From</label>
   <input id="priceFrom" type="text" value="<?= $rowFlight['fly_price'] ?>" class="form-control" placeholder="Ex:200" required>
</div>
<div class="form-group">
   <label>Continent</label>
   <select id="continent" class="form-control" name="continent">
        <option value="0">Select a Continent</option>
        <?php
          $sql="SELECT * FROM tbl_continent";
          $rs=$connWeb->query($sql);

          if($rs->num_rows>0){
             while($rows=$rs->fetch_assoc()){
                ?>

                <option value="<?= $rows['continent_id'] ?>" <?php if($rows['continent_id'] == $continent_id){ echo "selected"; } ?>> <?= $rows['continent_name'] ?></option>
                <?php
             }
          }
        ?>
        </select>
 </div>
<div class="form-group">
   <label>Country</label>
   <select id="country" class="form-control" name="country">
        <option value="0">Select a Country</option>
        <?php
        $sqlCountry = "SELECT * FROM tbl_country";
        $rsCountry=$connWeb->query($sqlCountry);

        if($rsCountry->num_rows>0){
          while($rowsCountry=$rsCountry->fetch_assoc()){
             ?>

          <option value="<?= $rowsCountry['country_id'] ?>" <?php if($rowsCountry['country_id'] == $country_id){ echo "selected"; } ?>><?= $rowsCountry['country_name'] ?></option>
             <?php
          }
        }
        ?>
      </select>
 </div>
<div class="form-group">
   <label>Image</label>
   <input id="flight_image" type="file" class="form-control" accept="image/*">
</div>
<div class="reset-button">
   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
   <a onClick="editFlights()" class="btn btn-success"> Edit</a>
</div>

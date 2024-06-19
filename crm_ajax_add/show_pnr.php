<?php
   include '../backend/website/conn.php';

 ?>
 <h5>Segment Details</h5>
 <hr>

  <div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label for="flight_no">Flight No <span style="color:red;">*</span></label>
            <input type="text" class="form-control" id="flight_no" name="flight_no" placeholder="" required>
        </div>
    </div>
         <div class="col-lg-2">
             <div class="form-group">
                 <label for="depart_from">Orgin <span style="color:red;">*</span></label>
                 <input type="text" class="form-control" id="depart_from" name="depart_from" placeholder="Ex: Lon" required>
             </div>
         </div>
         <div class="col-lg-2">
             <div class="form-group">
                 <label for="arrive_to">Destination <span style="color:red;">*</span></label>
                 <input type="text" class="form-control" id="arrive_to" placeholder="DXB" name="arrive_to" required>
             </div>
         </div>
      <div class="col-lg-2">
          <div class="form-group">
              <label for="airline_code">Airline <span style="color:red;">*</span></label>
              <select class="form-control" name="airline" id="airline_code">
                  <?php
                  $sqlAirline = "SELECT * FROM tbl_airlines";
                  $rsAirline = $connWeb->query($sqlAirline);
                  if ($rsAirline->num_rows > 0) {
                      while ($rowAirline = $rsAirline->fetch_assoc()) {
                          ?>
                          <option value="<?= $rowAirline['al_id'] ?>"><?= $rowAirline['al_name'] ?></option>
                      <?php }
                  } ?>
              </select>
          </div>
      </div>




      <div class="col-lg-2">
          <div class="form-group">
              <label for="depar_date">Flight Date <span style="color:red;">*</span></label>
              <input type="date" class="form-control" id="depar_date" name="depar_date" required>
          </div>
      </div>
      <div class="col-lg-2">
          <div class="form-group">
              <label for="arrive_time">Arrival Date <span style="color:red;">*</span></label>
              <input type="date" class="form-control" id="arrive_time" name="arrive_time" required>
          </div>
      </div>



           <div class="col-lg-2">
               <div class="form-group">
                   <!-- <label for="duration">Duration</label> -->
                   <input type="hidden" class="form-control" id="duration" placeholder="In hours" name="duration" value="0">
               </div>
           </div>
  </div>


 <div class="button">
   <button  class="btn green_btn" onclick="addItenry()">+ Add Segment</button>
   <!-- <a class="btn green_btn">Add</a> -->
 </div>

 <br>
 <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
    <thead class="back_table_color">
       <tr class="info">
          <th>Airline</th>
          <th>Flight No</th>
          <th>Depart From</th>
          <th>Departure Date</th>
          <th>Arrive To</th>
          <th>Arrive Time</th>
          <th>Action </th>
       </tr>
    </thead>
    <tbody>
      <?php
        $b_id = $_SESSION['b_id'];
        $sqlFlightIt ="SELECT * FROM tbl_flights_itenery WHERE b_id='$b_id'";
        $rsFlightIt = $conn->query($sqlFlightIt);
        if($rsFlightIt->num_rows > 0){
          while($rowFi = $rsFlightIt->fetch_assoc()){
            $f_i_id=$rowFi['f_i_id'];
            $airlineCode = $rowFi['airline'];
          ?>
          <tr>
              <td> <?= getDataBack($connWeb,'tbl_airlines','al_id',$airlineCode,'al_name') ?> </td>
              <td> <?= $rowFi['flight_no'] ?></td>
              <td> <?= $rowFi['depart_from'] ?></td>
              <td> <?= $rowFi['depart_time'] ?></td>
              <td> <?= $rowFi['at_airport'] ?></td>
              <td> <?= $rowFi['arrive_time'] ?></td>
              <td>
                <button type="button" onclick="del_p_pnr(<?= $f_i_id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
             </td>
          </tr>
      <?php } } ?>
    </tbody>
 </table>

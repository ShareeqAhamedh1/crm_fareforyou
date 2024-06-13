<?php include '../backend/website/conn.php';

$b_id=$_REQUEST['b_id'];

?>

  <div class="container">
    <h3 class="text-center">Sales Summery</h3>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
              <h4 style="margin:10px;"> <i class="fa fa-plane spl ws"></i> Flights</h4>
                  <?php
                      $sqlFlights="SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id' ORDER BY `tbl_passenger_flight_bookings`.`lead_passenger` DESC";
                      $rsFlights=$conn->query($sqlFlights);
                      $flightsCost=0;
                      $flightsSale=0;
                      if($rsFlights->num_rows>0){
                          while($rowsFlight=$rsFlights->fetch_assoc()){
                              $flightsSale += $rowsFlight['sell_amount'];
                              $flightsCost += $rowsFlight['buy_amount'];
                              }
                            }

                            $pro_lost = $flightsSale-$flightsCost;
                            if($pro_lost < 0){
                              $style = "background:red;color:#fff;font-weight:bold;";
                            }
                            elseif ($pro_lost == 0) {
                              $style = "background:grey;color:#fff;font-weight:bold;";
                            }
                            else {
                              $style = "background:lightgreen;color:#000;font-weight:bold;";

                           }
                            ?>

                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Total Cost: £ <?= number_format( $flightsCost, 2, '.', ',') ?></li>
                      <li class="list-group-item">Total Sales: £ <?= number_format( $flightsSale, 2, '.', ',') ?></li>
                      <li class="list-group-item" style="<?= $style ?>font-size:14px;" >Total Profit/Loss: £ <?= number_format($pro_lost, 2, '.', ',') ?> </li>
                  </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
            <h4 style="margin:10px;"> <i class="fa fa-building" aria-hidden="true"></i> Hotels</h4>
            <?php
             $hotelSale=0;
             $hotelCost=0;
             $sqlHotel="SELECT * FROM tbl_hote_det WHERE b_id='$b_id'";
             $rsHotel=$conn->query($sqlHotel);

             if ($rsHotel->num_rows>0) {
                while ($rowHotel=$rsHotel->fetch_assoc()) {
                 $hotelSale += $rowHotel['sell_amount'];
                 $hotelCost += $rowHotel['buy_amount'];
                }
             }

             $pro_lost = $hotelSale-$hotelCost;
             if($pro_lost < 0){
               $style = "background:red;color:#fff;font-weight:bold;";
             }
             elseif ($pro_lost == 0) {
               $style = "background:grey;color:#fff;font-weight:bold;";
             }
             else {
               $style = "background:lightgreen;color:#000;font-weight:bold;";

            }
                 ?>

                <ul class="list-group list-group-flush">
                <li class="list-group-item">Total Cost: £ <?= number_format( $hotelCost, 2, '.', ',') ?></li>
                    <li class="list-group-item">Total Sales: £ <?= number_format( $hotelSale, 2, '.', ',') ?></li>
                    <li class="list-group-item" style="<?= $style ?>font-size:14px;" >Total Profit/Loss: £ <?= number_format( $pro_lost, 2, '.', ',') ?> </li>
                </ul>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card">
            <h4 style="margin:10px;"> <i class="fa fa-car" aria-hidden="true"></i> Transfers</h4>

            <?php
             $transfersSale = 0;
             $transfersCost=0;
             $sqlTran="SELECT * FROM tbl_transfer WHERE b_id='$b_id'";
             $rsTrans=$conn->query($sqlTran);

             if ($rsTrans->num_rows>0) {
               while ($rowTrans=$rsTrans->fetch_assoc()) {
                $transfersSale += $rowTrans['sell_amount'];
                $transfersCost += $rowTrans['buy_amount'];
               }
            }

            $pro_lost = $transfersSale-$transfersCost;
            if($pro_lost < 0){
              $style = "background:red;color:#fff;font-weight:bold;";
            }
            elseif ($pro_lost == 0) {
              $style = "background:grey;color:#fff;font-weight:bold;";
            }
            else {
              $style = "background:lightgreen;color:#000;font-weight:bold;";

           }
                ?>


                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Total Cost: £ <?= number_format( $transfersCost, 2, '.', ',') ?></li>
                    <li class="list-group-item">Total Sales: £ <?= number_format( $transfersSale, 2, '.', ',') ?></li>
                    <li class="list-group-item" style="<?= $style ?>font-size:14px;" >Total Profit/Loss: £ <?= number_format( $pro_lost, 2, '.', ',') ?></li>
                </ul>
            </div>
        </div>



        <div class="col-md-3">
            <div class="card">
                <h4 style="margin:10px;"><i class="fa fa-money" aria-hidden="true"></i> Other Services </h4>

                <?php
             $otherSale = 0;
             $otherCost=0;
             $sqlOther="SELECT * FROM tbl_other_charges WHERE b_id='$b_id'";
                    $rsOthers=$conn->query($sqlOther);

             if ($rsOthers->num_rows>0) {
               while ($rowOther=$rsOthers->fetch_assoc()) {
                $otherSale += $rowOther['sell_price'];
                $otherCost += $rowOther['buy_price'];
               }
            }

            $pro_lost = $otherSale-$otherCost;
            if($pro_lost < 0){
              $style = "background:red;color:#fff;font-weight:bold;";
            }
            elseif ($pro_lost == 0) {
              $style = "background:grey;color:#fff;font-weight:bold;";
            }
            else {
              $style = "background:lightgreen;color:#000;font-weight:bold;";

           }
                ?>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Total Cost: £ <?= number_format( $otherCost, 2, '.', ',') ?></li>
                    <li class="list-group-item">Total Sales: £ <?= number_format( $otherSale, 2, '.', ',') ?></li>
                    <li class="list-group-item" style="<?= $style ?>font-size:14px;" >Total Profit/Loss: £ <?= number_format( $pro_lost, 2, '.', ',')?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="col-md-12">
            <div class="">
                <?php
                    $totalCost = $flightsCost + $hotelCost + $transfersCost + $otherCost;
                    $totalSale = $flightsSale + $hotelSale + $transfersSale + $otherSale;
                    $tot_p=$totalSale-$totalCost;

                    if($tot_p < 0){
                        $style = "background:red;color:#fff;font-weight:bold;";
                      }
                      elseif ($tot_p == 0) {
                        $style = "background:grey;color:#fff;font-weight:bold;";
                      }
                      else {
                        $style = "background:lightgreen;color:#000;font-weight:bold;";

                     }
                ?>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Total Cost: £ <?= number_format( $totalCost, 2, '.', ',') ?></li>
                    <li class="list-group-item">Total Sales: £ <?= number_format( $totalSale, 2, '.', ',') ?></li>
                    <li class="list-group-item" style="<?= $style ?>">Total Profit/Loss:£ <?= number_format( $tot_p, 2, '.', ',')?></li>
                </ul>
            </div>
        </div>
</div>
<hr>
<div class="container">
  <h4 class="text-center">Customer Payments Summery</h4>
  <hr>
  <div class="row">
    <div class="col-lg-6 text-center">
        <span style="background:grey;color:#fff;font-weight:bold;padding:10px;">To Be Paid:£ <?= number_format($totalSale, 2, '.', ',') ?></span>
    </div>
    <div class="col-lg-6 text-center">
      <span style="background:lightgreen;color:#000;font-weight:bold;padding:10px;">Total Paid: £ 00 </span>
    </div>

  </div>

</div>
<hr>
<div class="container">
  <h4 class="text-center">Vendor Payment Summery</h4>
  <hr>
  <div class="row">
      <div class="col-md-3">
          <div class="card">
            <h4 style="margin:10px;"> <i class="fa fa-plane spl ws"></i> Flights</h4>
                <?php
                    $sqlFlights="SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id' ORDER BY `tbl_passenger_flight_bookings`.`lead_passenger` DESC";
                    $rsFlights=$conn->query($sqlFlights);
                    $flightsCost=0;
                    $flightsSale=0;
                    if($rsFlights->num_rows>0){
                        while($rowsFlight=$rsFlights->fetch_assoc()){
                            $flightsSale += $rowsFlight['sell_amount'];
                            $flightsCost += $rowsFlight['buy_amount'];
                            }
                          }

                          $pro_lost = $flightsSale-$flightsCost;
                          if($pro_lost < 0){
                            $style = "background:red;color:#fff;font-weight:bold;";
                          }
                          elseif ($pro_lost == 0) {
                            $style = "background:grey;color:#fff;font-weight:bold;";
                          }
                          else {
                            $style = "background:lightgreen;color:#000;font-weight:bold;";

                         }
                          ?>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Total To Be Paid: £ <?= number_format( $flightsCost, 2, '.', ',') ?></li>
                    <li class="list-group-item">Total Paid: £ 00.00 </li>
                    <li class="list-group-item" style="font-weight:bold;" >Vendor: Fly Emirates </li>
                </ul>
          </div>
      </div>

      <div class="col-md-3">
          <div class="card">
          <h4 style="margin:10px;"> <i class="fa fa-building" aria-hidden="true"></i> Hotels</h4>
          <?php
           $hotelSale=0;
           $hotelCost=0;
           $sqlHotel="SELECT * FROM tbl_hote_det WHERE b_id='$b_id'";
           $rsHotel=$conn->query($sqlHotel);

           if ($rsHotel->num_rows>0) {
              while ($rowHotel=$rsHotel->fetch_assoc()) {
               $hotelSale += $rowHotel['sell_amount'];
               $hotelCost += $rowHotel['buy_amount'];
              }
           }

               ?>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Total To Be Paid: £ <?= number_format( $hotelCost, 2, '.', ',') ?></li>
                <li class="list-group-item">Total Paid: £ 00.00 </li>
                <li class="list-group-item" style="font-weight:bold;" >Vendor: Beds Online </li>
              </ul>
          </div>
      </div>


      <div class="col-md-3">
          <div class="card">
          <h4 style="margin:10px;"> <i class="fa fa-car" aria-hidden="true"></i> Transfers</h4>

          <?php
           $transfersSale = 0;
           $transfersCost=0;
           $sqlTran="SELECT * FROM tbl_transfer WHERE b_id='$b_id'";
           $rsTrans=$conn->query($sqlTran);

           if ($rsTrans->num_rows>0) {
             while ($rowTrans=$rsTrans->fetch_assoc()) {
              $transfersSale += $rowTrans['sell_amount'];
              $transfersCost += $rowTrans['buy_amount'];
             }
          }

              ?>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Total To Be Paid: £ <?= number_format( $transfersCost, 2, '.', ',') ?></li>
                <li class="list-group-item">Total Paid: £ 00.00 </li>
                <li class="list-group-item" style="font-weight:bold;" >Vendor:  </li>
              </ul>

          </div>
      </div>



      <div class="col-md-3">
          <div class="card">
              <h4 style="margin:10px;"><i class="fa fa-money" aria-hidden="true"></i> Other Services </h4>

              <?php
           $otherSale = 0;
           $otherCost=0;
           $sqlOther="SELECT * FROM tbl_other_charges WHERE b_id='$b_id'";
                  $rsOthers=$conn->query($sqlOther);

           if ($rsOthers->num_rows>0) {
             while ($rowOther=$rsOthers->fetch_assoc()) {
              $otherSale += $rowOther['sell_price'];
              $otherCost += $rowOther['buy_price'];
             }
          }

              ?>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Total To Be Paid: £ <?= number_format( $otherCost, 2, '.', ',') ?></li>
                <li class="list-group-item">Total Paid: £ 00.00 </li>
                <li class="list-group-item" style="font-weight:bold;" >Vendor: Direct Disney </li>
              </ul>
          </div>
      </div>
  </div>
</div>

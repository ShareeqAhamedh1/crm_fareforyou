<?php include("layouts/header.php");
  $b_id = $_REQUEST['b_id'];
  $_SESSION['b_id'] = $_REQUEST['b_id'];
  $sqlBooking = "SELECT * FROM tbl_booking WHERE b_id='$b_id'";
  $rsBooking = $conn->query($sqlBooking);
  if($rsBooking->num_rows > 0){
    $rowBooking = $rsBooking->fetch_assoc();
    $pay_st = $rowBooking['p_sta'];
  }
?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
                  <h1>Payment Settings</h1>
                  <small>Payment List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Payment Setup</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-lg-8">
                                     <div class="container">
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
                                                               ?>

                                                     <ul class="list-group list-group-flush">
                                                       <li class="list-group-item" style="font-size:13px;">Total Amount: £ <?= number_format( $flightsSale, 2, '.', ',') ?></li>
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

                                                    ?>

                                                   <ul class="list-group list-group-flush">
                                                       <li class="list-group-item" style="font-size:13px;">Total Amount: £ <?= number_format( $hotelSale, 2, '.', ',') ?></li>
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
                                                       <li class="list-group-item" style="font-size:13px;">Total Amount: £ <?= number_format( $transfersSale, 2, '.', ',') ?></li>
                                                  </ul>
                                               </div>
                                           </div>



                                           <div class="col-md-3">
                                               <div class="card">
                                                   <h4 style="margin:10px;"><i class="fa fa-money" aria-hidden="true"></i> Other Charges </h4>

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
                                                     <li class="list-group-item" style="font-size:13px;">Total Amount: £ <?= number_format( $otherSale, 2, '.', ',') ?></li>
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

                                                   ?>
                                               </div>
                                           </div>
                                   </div>

                                   <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-size:20px;font-weight:bold;">
                                          Total Amount: £ <?= number_format( $totalSale, 2, '.', ',') ?></li>
                                          <li class="list-group-item" style="font-size:20px;font-weight:bold;"> <span  id="tot_setuped"></span> </li>
                                   </ul>
                                   <hr>
                                   </div>
                                   <div class="col-lg-4 text-right">
                                     <h4>INV00<?= $b_id ?> </h4> <br>
                                     <?= getPayStatus($pay_st) ?>
                                   </div>
                                   <hr>
                                   <?php if($pay_st == 2){ ?>
                                   <div class="container-fluid">
                                     <h4>Setup The Payment Plan</h4>
                                     <hr>
                                     <div class="row">
                                       <div class="col-4">
                                         <div class="form-group">
                                           <label for="">How many months?</label>
                                           <input type="text" class="form-control" id="tot_months" name="" value=""> <br>
                                           <label for="">Deposite Amount</label>
                                           <input type="text" class="form-control" id="depAmount" name="" value=""> <br>
                                           <button type="button" class="btn btn-success btn-sm" onclick="loadPaymentSetup()" name="button">Make the setup</button>
                                         </div>
                                       </div>
                                       <div class="col-8" id="load_payment_setup">

                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               <?php }elseif($pay_st == 4){ ?>
                                 <div class="container-fluid">
                                   <h4>Setuped Payment Plan</h4>
                                   <hr>
                                   <div id="load_payment_setup">

                                   <div class="table-responsive">
                                      <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                         <thead class="back_table_color">
                                            <tr class="info">
                                               <th>Date</th>
                                               <th>Amount</th>
                                               <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           <?php
                                              $sql_cus = "SELECT * FROM tbl_payment_setup WHERE b_id='$b_id'";
                                              $rs_cus = $conn->query($sql_cus);
                                              if($rs_cus->num_rows > 0){
                                                while($row_cus = $rs_cus->fetch_assoc()){

                                                  $ps_id=$row_cus['ps_id'];

                                            ?>
                                           <tr>
                                             <td><?= $row_cus['ps_date'] ?></td>
                                             <td>£ <?= number_format($row_cus['ps_amount'], 2, '.', ',') ?></td>
                                             <td>
                                               <button type="button" class="btn btn-add btn-sm"
                                               onclick="openModelEdit(<?= $row_cus['ps_id'] ?>)"><i class="fa fa-pencil"></i></button> |
                                               <button type="button" class="btn btn-info btn-sm"
                                               onclick="openModelPayNow(<?= $row_cus['ps_id'] ?>)"><i class="fa fa-money"></i> Pay Now</button>
                                            </td>
                                           </tr>
                                         <?php } } ?>
                                         </tbody>
                                       </table>
                                     </div>

                                   </div>
                                 </div>
                                 <hr>
                                 <div class="container-fluid">
                                   <h4>Paid Informations</h4>
                                   <hr>
                                   <div id="load_payment_setup_coll">
                                   </div>
                                </div>
                               <?php } ?>
                               </div>
                           </div>
                        </div>
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- Empty Modal -->
                <div class="modal fade" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                              <h3><i class="fa fa-money m-r-5"></i> Paynow</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                        <div class="modal-body" id="load_data">
                    </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- /.content-wrapper -->
         <input type="hidden" name="" id="tot_amount" value="<?= $totalSale ?>">
         <input type="hidden" name="" id="setupedAmount" value="<?= $totalSale ?>">
         <?php include("layouts/footer.php"); ?>
         <script type="text/javascript">

          $('#load_payment_setup_coll').load('crm_ajax_payment/setup_payment.php',{ b_id:<?= $b_id ?> });

            function openModelPayNow(id){
              $('#load_modal').modal('show');
              $('#load_data').load('crm_ajax_payment/paynow.php',{p_id:id,e_b_id:<?= $b_id ?> });
            }

            function openModelEdit(id){
              $('#load_modal').modal('show');
              $('#load_data').load('crm_ajax_payment/edit_pay.php',{p_id:id });
            }

            function submitEditNow(){

             var p_date=document.getElementById('ed_p_date').value;
             var p_amount=document.getElementById('ed_p_amount').value;
             var p_id=document.getElementById('ed_p_id').value;

             $.ajax({
                url:'backend/edit_payment.php',
                method:'POST',
                data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                 e_p_id:p_id

                },
                success:function(resp){
                    if(resp == 200){

                      // $('#load_payment_setup').load('crm_ajax_payment/paynow.php');
                     $('#load_modal').modal('hide');
                    swal("Changed", "edited", "success");  }
                    else {
                      console.log(resp);
                    }
                }
              });
           }

            function submitPayNow(){

              var p_date=document.getElementById('p_date').value;
              var p_amount=document.getElementById('p_amount').value;
              var desc=document.getElementById('desc').value;
              var p_id=document.getElementById('p_id').value;
              var b_id=document.getElementById('e_b_id').value;
              var pmethod_id=document.getElementById('pmethod_id').value;
              // var p_slip=document.getElementById('p_slip').value;
              // alert(p_slip);

              $.ajax({
                 url:'backend/add_payment.php',
                 method:'POST',
                 data:{
                  e_p_date:p_date,
                  e_p_amount:p_amount,
                  e_desc:desc,
                  e_p_id:p_id,
                  e_b_id:b_id,
                  e_pmethod_id:pmethod_id
                 },
                 success:function(resp){
                     if(resp == 200){
                      $('#load_payment_setup_coll').load('crm_ajax_payment/setup_payment.php',{ b_id:<?= $b_id ?> });
                      $('#load_modal').modal('hide');
                     swal("Changed", "Other Charges Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
            }

           function loadPaymentSetup(){
             var tmonths = document.getElementById('tot_months').value;
             var tot_amount = document.getElementById('tot_amount').value;
             var depAmount = document.getElementById('depAmount').value;
             $('#load_payment_setup').load('crm_ajax_payment/payment_setup.php',{
               tot_months:tmonths,
               tot_depAmount:depAmount,
               total_amount:tot_amount
             });
           }
           function getData(){
    var setupedAmount = 0;
    var tmonths = parseInt(document.getElementById('tot_months').value);
    var amount = 0;
    var depAmount = parseFloat(document.getElementById('depAmountForm').value);

    for (var i = 1; i <= tmonths; i++) {
        amount = parseFloat(document.getElementById('amount' + i).value);
        setupedAmount += amount;
    }

    setupedAmount += depAmount;

    // Format setupedAmount to display with two decimal places and the currency symbol
    var formattedAmount = "£ " + new Intl.NumberFormat('en-US', { minimumFractionDigits: 2 }).format(setupedAmount);

    // Update HTML elements
    document.getElementById('tot_setuped').innerHTML = "Payment Plan Total Amount: " + formattedAmount;
    document.getElementById('setupedAmount').value = setupedAmount;
}

           function setupDates(){
             var defaultDate = document.getElementById('defaultDate').value;
             var tmonths = document.getElementById('tot_months').value;
             for (var i = 1; i <= tmonths; i++) {
               document.getElementById('date'+i).value = defaultDate;

               var dateObject = new Date(defaultDate);
               dateObject.setMonth(dateObject.getMonth() + 1);
               var newDate = dateObject.toISOString().split('T')[0];
               defaultDate = newDate;
             }
           }

           function setupAmount(){
             var defaultAmount = document.getElementById('defaultAmount').value;
             var tmonths = document.getElementById('tot_months').value;
             for (var i = 1; i <= tmonths; i++) {
               document.getElementById('amount'+i).value = defaultAmount;
             }
             getData();
           }
           function finalizeSetup(){
             var tot_amount = document.getElementById('tot_amount').value;
             var setupedAmount = document.getElementById('setupedAmount').value;
             if(tot_amount != setupedAmount){
               swal("Warning", "Payment setup & Total value mismatch", "warning");
               return false;
             }
           }

         </script>

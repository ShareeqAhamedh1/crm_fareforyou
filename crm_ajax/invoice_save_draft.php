<?php
$b_id = $_REQUEST['b_id'];
include '../backend/website/conn.php';
$sqlStatus="SELECT * FROM tbl_booking WHERE b_id='$b_id'";
$rsStatus=$conn->query($sqlStatus);
// $b_status=getDataBack($conn,'tbl_booking','b_id','$b_id','b_status');
if ($rsStatus->num_rows>0) {
   $rowStatus = $rsStatus->fetch_assoc();
   $b_status=$rowStatus['b_status'];





   $sqlFlights="SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id'";
   $rsFlights=$conn->query($sqlFlights);

   $sqlFlightIt ="SELECT * FROM tbl_flights_itenery WHERE b_id='$b_id'";
   $rsFlightIt = $conn->query($sqlFlightIt);
   if($rsFlights->num_rows>0 && $rsFlightIt->num_rows > 0){
      $s_status=0;
   }else{
      $s_status=1;
   }

   if ($b_status==1) {
?>
<div class="button">
<button  class="btn green_btn" onclick="save(<?= $s_status ?>,<?= $b_id ?>)">Save</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>

<?php } else if ($b_status==0) {
# code...

?>
<div class="button">
<button  class="btn btn-warning" onclick="draft(1,<?= $b_id ?>)">Change to draft</button>
</div>
<?php
}

}?>

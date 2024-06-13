<?php

include 'website/conn.php';

$fiid= $_REQUEST['fiid'];



$flight_no=$_REQUEST['e_flight_no'];
$depart_from=$_REQUEST['e_depart_from'];
$depar_date=$_REQUEST['e_depar_date'];
$arrive_to=$_REQUEST['e_arrive_to'];
$arrive_time=$_REQUEST['e_arrive_time'];
$duration=$_REQUEST['e_duration'];
$b_id=$_SESSION['b_id'];


$sqlFlightIt="UPDATE tbl_flights_itenery SET 
                    flight_no='$flight_no',
                    depart_time='$depar_date',
                    depart_from='$depart_from',
                    arrive_time='$arrive_time',
                    at_airport='$arrive_to',
                    duration='$duration' WHERE f_i_id ='$fiid'";


$rsFlightIt=$conn->query($sqlFlightIt);


if ($rsFlightIt>0) {
     echo 200;
   exit();
}else{
 echo $sqlFlightIt;
  exit();
}
?>

<?php  include 'website/conn.php';

$flight_no=$_REQUEST['c_flight_no'];
$depart_from=$_REQUEST['c_depart_from'];
$depar_date=$_REQUEST['c_depar_date'];
$arrive_to=$_REQUEST['c_arrive_to'];
$arrive_time=$_REQUEST['c_arrive_time'];
$duration=$_REQUEST['c_duration'];
$airline_code = $_REQUEST['c_airline_code'];
$b_id=$_SESSION['b_id'];

$sql="INSERT INTO tbl_flights_itenery (airline,flight_no,depart_time,depart_from,arrive_time,at_airport,duration,b_id)
      VALUES ('$airline_code','$flight_no','$depar_date','$depart_from','$arrive_time','$arrive_to','$duration','$b_id')";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
 }else{
    echo 300;
    exit();
 }
?>

<?php  include 'website/conn.php';

$b_id=$_SESSION['b_id'];

$pnr = $_REQUEST['pnr'];

$publicAppKey = '8506305952934781544a1ab5c1d4911a4df276a3f3ac530eb4b8795d0f02e63a';
$privateAppKey = 'Dyk064YGR8pb6dPwbBmFCl9C9h3SbWz0N3L';

$url = 'https://api.pnrconverter.com/api';

$curl = curl_init();

// Data to be sent in the request
$data = array(
    'pnr' => $pnr
);

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'PUBLIC_APP_KEY: ' . $publicAppKey,
        'PRIVATE_APP_KEY: ' . $privateAppKey
    )
));

// Execute the request
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    // Decode JSON response
    $json_response = json_decode($response, true);

    // Check if decoding was successful
    if ($json_response !== null) {
        // Handle the JSON response
        $flightData = $json_response['flightData']['flights'];

        // Now you can use $flightData to iterate and display flight details
    }
}

// Close cURL session
curl_close($curl);

$sqlLeadP = "SELECT * FROM tbl_passenger_flight_bookings WHERE b_id='$b_id' AND lead_passenger='1'";
$rsLeadP =$conn->query($sqlLeadP);
if($rsLeadP->num_rows == 1){
  $rowP = $rsLeadP->fetch_assoc();
  $p_id=$rowP['p_id'];
}
else {
  echo 9001;
  exit();
}

foreach ($flightData as $flight) {
   $airlineLogo = $flight['flt']['svg-logo-high-res'];
    $airline = $flight['flt']['name'];
    $ddate = $flight['flt']['departure']['string'];
    $depart = $flight['dep']['airportname'];
    $adate = $flight['flt']['arrival']['string'];
    $flightNo = $flight['flt']['flightNo'];

    $arrive = $flight['arr']['airportname']." ".$flight['arr']['cityname'];

    $durationHours = $flight['flt']['duration']['hours'];
    $durationMinutes = $flight['flt']['duration']['minutes'];
    $duration =$durationHours." h & ".$durationMinutes." m";

  $sql = "INSERT INTO tbl_flights_itenery (airline,flight_no,depart_time,depart_from,arrive_time,at_airport,duration,p_id,b_id)
          VALUE ('$airlineLogo','$flightNo','$ddate','$depart','$adate','$arrive','$duration','$p_id','$b_id')";
  $rs = $conn->query($sql);
}
echo 200;


?>

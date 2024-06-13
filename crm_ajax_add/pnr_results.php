<?php
 include '../backend/website/conn.php';
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

$bid = 1;
$pid = 1;

foreach ($flightData as $flight) {
  $airline = $flight['flt']['name'];
  $date = $flight['flt']['departure']['string'];
  $flightNo = $flight['flt']['flightNo'];
  $depart = $flight['dep']['airportname'];
  $from = $flight['dep']['cityname'];
  $arrive = $flight['arr']['airportname'];
  $at = $flight['arr']['cityname'];
  $durationHours = isset($flight['flt']['duration']['hours']) ? $flight['flt']['duration']['hours'] : '';
  $durationMinutes = isset($flight['flt']['duration']['minutes']) ? $flight['flt']['duration']['minutes'] : '';
  $duration = ($durationHours !== '' ? $durationHours . 'h ' : '') . ($durationMinutes !== '' ? $durationMinutes . 'm' : '');
  $transitHours = isset($flight['flt']['transit_time']['hours']) ? $flight['flt']['transit_time']['hours'] : '';
  $transitMinutes = isset($flight['flt']['transit_time']['minutes']) ? $flight['flt']['transit_time']['minutes'] : '';
  $transit = ($transitHours !== '' ? $transitHours . 'h ' : '') . ($transitMinutes !== '' ? $transitMinutes . 'm' : 'None');

  // $sql = "INSERT INTO tbl_flights_itenery (book_date,airline,flight_no,depart_time,depart_from,arrive_time,at_airport,duration,transit,p_id,b_id)
  //         VALUE ('$date','$airline','$flightNo','$depart','$from','$arrive','$at','$duration','$transit','$pid','$bid')";
  // $rs = $conn->query($sql);
}

?>

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Airline</th>
         <th>Flight No</th>
         <th>Depart From</th>
         <th>Departure Date</th>
         <th>Arrive To</th>
         <th>Arrive Time</th>
         <th>Duration</th>
      </tr>
   </thead>
   <tbody>
     <?php
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


         ?>
         <tr>
             <td> <img src="<?= $airlineLogo ?>" style="width:80px;" alt=""> </td>
             <td> <?= $flightNo ?></td>
             <td> <?= $depart ?></td>
             <td> <?= $ddate ?></td>
             <td> <?= $arrive ?></td>
             <td> <?= $adate ?></td>
             <td> <?= $duration ?></td>
         </tr>
     <?php } ?>
   </tbody>
</table>

<button type="button" name="button" onclick="finalizePNR()" class="btn btn-success btn-sm">Finalize The Itinerary</button>

<?php
 include '../backend/website/conn.php';
$pnr = $_REQUEST['pnr'];

$publicAppKey = '21e6141299d633a592b4ffcdb0ea2cfc7b600cd5ad542c1bec8059be24879390';
$privateAppKey = 'lUI4qf3BWLAUD9AFOYlAOSkHbdibQbeCMHO';

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

  $sql = "INSERT INTO tbl_flights_itenery (book_date,airline,flight_no,depart_time,depart_from,arrive_time,at_airport,duration,transit,p_id,b_id)
          VALUE ('$date','$airline','$flightNo','$depart','$from','$arrive','$at','$duration','$transit','$pid','$bid')";
  $rs = $conn->query($sql);
}

?>

<table id="dataTableExample1" class="table table-bordered table-striped table-hover">
   <thead class="back_table_color">
      <tr class="info">
         <th>Airline</th>
         <th>Date</th>
         <th>Flight No</th>
         <th>Depart</th>
         <th>From</th>
         <th>Arrive</th>
         <th>At</th>
         <th>Duration</th>
         <th>Transit</th>
      </tr>
   </thead>
   <tbody>
     <?php
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

         ?>
         <tr>
             <td> <?= $airline ?> </td>
             <td> <?= $date ?></td>
             <td> <?= $flightNo ?></td>
             <td> <?= $depart ?></td>
             <td> <?= $from ?></td>
             <td> <?= $arrive ?></td>
             <td> <?= $at ?></td>
             <td> <?= $duration ?></td>
             <td> <?= $transit ?></td>
         </tr>
     <?php } ?>
   </tbody>
</table>

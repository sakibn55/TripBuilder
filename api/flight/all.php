<?php 
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$flight = new Flight($db);

$result = $flight->index();
$num = $result->rowCount();
if($num > 0){
    $flight_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $flight_item = array(
            'airline' => $airline,
            'number' => $number,
            'departure_airport' => $departure_airport,
            'departure_time' => $departure_time,
            'arrival_airport' => $arrival_airport,
            'arrival_time' => $arrival_time,
            'price' => $price,
        );
        array_push($flight_arr, $flight_item);
    }
    echo json_encode($flight_arr);
}else{
    echo json_encode(array('message' => "No flight Available"));
}
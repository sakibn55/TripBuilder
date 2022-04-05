<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

//flight
$flight = new Flight($db);

$data = json_decode(file_get_contents("php://input"));

$flight->airline = $data->airline;

$flight->number = $data->number;

$flight->departure_airport = $data->departure_airport;

$flight->departure_time = $data->departure_time;

$flight->arrival_airport = $data->arrival_airport;

$flight->arrival_time = $data->arrival_time;

$flight->price = $data->price;

//check flight exists with same number
if ($flight->show()) {
    echo json_encode(array('message' => "Flight number must be unique!"));
    return false;
}

if($flight->store()){
    echo json_encode(array('message' => "Flight created"));
}else{
    echo json_encode(array('message' => "Flight  Not creted"));
}



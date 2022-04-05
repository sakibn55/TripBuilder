<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
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

if ($flight->update()) {
    echo json_encode(array('message' => "Flight Updated"));
} else {
    echo json_encode(array('message' => "Flight  Not Updated"));
}

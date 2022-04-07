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
$flight->departure_airport = $data->departure_airport;
$flight->arrival_airport = $data->arrival_airport;
$flight->trip_type = $data->trip_type;

$result['response'] = $flight->search();

echo json_encode($result);

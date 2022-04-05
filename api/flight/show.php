<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$flight = new Flight($db);

$flight->number = isset($_GET['number'])?$_GET['number'] : die();
$flight->show();
$flight_item = array(
    'airline' => $flight->airline,
    'number' => $flight->number,
    'departure_airport' => $flight->departure_airport,
    'departure_time' => $flight->departure_time,
    'arrival_airport' => $flight->arrival_airport,
    'arrival_time' => $flight->arrival_time,
    'price' => $flight->price,
);
print_r(json_encode($flight_item));

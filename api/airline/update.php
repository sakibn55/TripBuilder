<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

//flight
$airline = new Airline($db);

$data = json_decode(file_get_contents("php://input"));

$airline->code = $data->code;

$airline->name = $data->name;

if ($airline->update()) {
    echo json_encode(array('message' => "Airline Updated"));
} else {
    echo json_encode(array('message' => "Airline  Not Updated"));
}

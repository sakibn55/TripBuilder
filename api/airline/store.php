<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

//flight
$airline = new Airline($db);

$data = json_decode(file_get_contents("php://input"));

$airline->code = $data->code;

$airline->name = $data->name;
//check for unique code
if ($airline->show()) {
    echo json_encode(array('message' => "Airline code must be unique!"));
    return false;
}
//store airline 
if ($airline->store()) {
    echo json_encode(array('message' => "Airline created"));
} else {
    echo json_encode(array('message' => "Airline Not creted"));
}

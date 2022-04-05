<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

//flight
$flight = new Flight($db);

$data = json_decode(file_get_contents("php://input"));

$flight->number = $data->number;

if ($flight->delete()) {
    echo json_encode(array('message' => "Flight Deleted"));
} else {
    echo json_encode(array('message' => "Flight  Not Deleted"));
}

<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

$airline = new Airline($db);

$data = json_decode(file_get_contents("php://input"));

$airline->code = $data->code;

if ($airline->delete()) {
    echo json_encode(array('message' => "Airline Deleted"));
} else {
    echo json_encode(array('message' => "Airline  Not Deleted"));
}

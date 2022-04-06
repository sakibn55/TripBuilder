<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//initializing
include_once('../../core/initialize.php');

//flight
$airport = new Airport($db);

$data = json_decode(file_get_contents("php://input"));

$airport->code = $data->code;
$airport->city_code = $data->city_code;
$airport->name = $data->name;
$airport->city = $data->city;
$airport->country_code = $data->country_code;
$airport->region_code = $data->region_code;
$airport->latitude = $data->latitude;
$airport->longitude = $data->longitude;
$airport->timezone = $data->timezone;
//check for unique code
if ($airport->show()) {
    echo json_encode(array('message' => "Airports code must be unique!"));
    return false;
}
//store airline 
if ($airport->store()) {
    echo json_encode(array('message' => "Airport created"));
} else {
    echo json_encode(array('message' => "Airport Not creted"));
}

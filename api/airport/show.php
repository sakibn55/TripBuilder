<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$airport = new Airport($db);

$airport->code = isset($_GET['code']) ? $_GET['code'] : die();
if ($airport->show()) {
    $item = array(
        'code' => $airport->code,
        'city_code' => $airport->city_code,
        'name' => $airport->name,
        'city' => $airport->city,
        'country_code' => $airport->country_code,
        'region_code' => $airport->region_code,
        'latitude' => $airport->latitude,
        'longitude' => $airport->longitude,
        'timezone' => $airport->timezone,
    );

    print_r(json_encode($item));
} else {
    echo json_encode(array('message' => "No Airport found!"));
}

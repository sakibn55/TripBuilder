<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$airport = new Airport($db);

$result = $airport->index();
$num = $result->rowCount();
if ($num > 0) {
    $arr = array();
    $arr['airports'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $items = array(
            'code' => $code,
            'city_code' => $city_code,
            'name' => $name,
            'city' => $city,
            'country_code' => $country_code,
            'region_code' => $region_code,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'timezone' => $timezone,
        );
        array_push($arr['airports'], $items);
    }
    echo json_encode($arr);
} else {
    echo json_encode(array('message' => "No Airports Available"));
}

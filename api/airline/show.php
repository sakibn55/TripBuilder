<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$airline = new Airline($db);

$airline->code = isset($_GET['code']) ? $_GET['code'] : die();
if ($airline->show()) {
    $item = array(
        'code' => $airline->code,
        'name' => $airline->name,
    );

    print_r(json_encode($item));
} else {
    echo json_encode(array('message' => "No Airlines found!"));
}

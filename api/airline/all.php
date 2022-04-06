<?php
//headers

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//initializing
include_once('../../core/initialize.php');

//flight
$airline = new Airline($db);

$result = $airline->index();
$num = $result->rowCount();
if ($num > 0) {
    $arr = array();
    $arr['airlines'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $items = array(
            'code' => $code,
            'name' => $name,
        );
        array_push($arr['airlines'], $items);
    }
    echo json_encode($arr);
} else {
    echo json_encode(array('message' => "No Airlines Available"));
}

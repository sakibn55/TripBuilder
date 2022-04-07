<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip_builder";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  define('APP_NAME', 'Trip Builder');

} catch (PDOException $e) {
  echo $e->getMessage();
}
?>

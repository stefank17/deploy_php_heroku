<?php
try {
  $name = $_GET['name'];
  $url = "https://apis.is/company?name={$name}";
  header('Access-Control-Allow-Headers: X-Requested-With, Accept, Origin, Referer, User-Agent, Content-Type, Authorization, X-Mindflash-SessionID');
  header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE');
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json; charset=utf-8');

  $response = file_get_contents($url);

  if($response !== false) {
    $JSON = $response;
    echo $JSON;
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
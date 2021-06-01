<?php
try {
  $name = $_GET['name'];
  $url = "https://apis.is/company?name={$name}";
  header('Content-Type: application/json');

  $response = file_get_contents($url);

  if($response !== false) {
    $JSON = $response;
    echo $JSON;
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

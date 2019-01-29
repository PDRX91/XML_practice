<?php
$entityBody = file_get_contents('php://input');
$request = json_decode($entityBody, true);


$url = 'dummy_data2.xml';
$xml = simplexml_load_file($url) or die("Can't connect");
$result = $xml->xpath("books/book/author");

$response = json_encode($result);

print_r($response);

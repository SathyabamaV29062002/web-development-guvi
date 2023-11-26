<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$companydb = $client->companydb;

$result1 = $companydb -> empcollection->insertOne([
    'item' => 'canvas',
    'qty' => 100,
    'tags' => ['cotton'],
    'size' => ['h' => 28, 'w' => 35.5, 'uom' => 'cm'],
]);
var_dump($result1);

?>
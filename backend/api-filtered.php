<?php 


require_once __DIR__ . "/../database/database.php";

$genre = $_GET["genere"];

$databaseFiltered = array_filter($database, function($item) use ($genre){
    return $item['genre'] === $genre;
});

header('Content-Type: application/json');
echo json_encode($databaseFiltered);




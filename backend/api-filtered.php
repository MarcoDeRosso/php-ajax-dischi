<?php 


require_once __DIR__ . "/../database/database.php";
require_once __DIR__ . "/../functions/printJson.php";

$genre = $_GET["genere"];

$databaseFiltered = array_filter($database, function($item) use ($genre){
    return $item['genre'] === $genre;
});

printJson($databaseFiltered);



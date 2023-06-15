<?php

require 'database.php';

$dropdown = $_POST["dropdown"];

var_dump($dropdown);
if($dropdown == 'omschrijving')
{
    $sql = 'SELECT omschrijving FROM workouts ORDER BY LENGTH(omschrijving) DESC';
}
elseif($dropdown == 'datum'){
    $sql = 'SELECT * FROM workouts ORDER BY toevoegdatum ASC';
    
}
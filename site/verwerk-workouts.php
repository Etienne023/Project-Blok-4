<?php
require "database.php";

$omschrijving = $_POST["omschrijving"];
$notitie  = $_POST["notitie"];
$duur = $_POST["duur"];
$toevoegdatum = $_POST["toevoegdatum"];

$sql = "INSERT INTO workouts (omschrijving,notitie ,duur,toevoegdatum) 
    
VALUES('$omschrijving','$notitie ','$duur','$toevoegdatum')";
mysqli_query($conn, $sql);
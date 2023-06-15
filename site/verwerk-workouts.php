<?php
require "database.php";

$omschrijving = $_POST["omschrijving"];
$notitie = $_POST["notitie"];
$tijd = $_POST["tijd"];
$toevoegdatum = $_POST["toevoegdatum"];
$rol = $_POST["rol"];

if ($rol == "admin") {
    $sql = "INSERT INTO workouts (omschrijving, notitie, duur, toevoegdatum, role) 
    VALUES ('$omschrijving', '$notitie', '$tijd', '$toevoegdatum', 'administrator')";
    mysqli_query($conn, $sql);
} elseif ($rol == "manager") {
    $sql = "INSERT INTO workouts (omschrijving, notitie, duur, toevoegdatum, role) 
    VALUES ('$omschrijving', '$notitie', '$tijd', '$toevoegdatum', 'manager')";
    mysqli_query($conn, $sql);
} elseif ($rol == "regular") {
    $sql = "INSERT INTO workouts (omschrijving, notitie, duur, toevoegdatum, role) 
    VALUES ('$omschrijving', '$notitie', '$tijd', '$toevoegdatum', 'regular')";
    mysqli_query($conn, $sql);
}

header("location: bekijken-workouts.php");
exit;

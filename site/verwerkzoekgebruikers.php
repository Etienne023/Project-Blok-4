<?php

require 'database.php';

$gebruikers = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM gebruiker"), MYSQLI_ASSOC);


$zoekterm = $_POST["zoekveld"];

if (empty($zoekterm)) {
    header("location: bekijken-gebruikers.php");
    exit;
}

$sql = "SELECT *
    FROM gebruiker
    LEFT JOIN administrator USING (administratorid)
    LEFT JOIN manager USING (managerid)
    LEFT JOIN regular USING (regularid)
    WHERE voornaam LIKE '%$zoekterm%'
    OR gebruikersid LIKE '%$zoekterm%'
    OR geslacht LIKE '%$zoekterm%'
    OR email LIKE '%$zoekterm%'
    OR gebruikersnaam LIKE '%$zoekterm%'
    OR straat LIKE '%$zoekterm%'
    OR huisnummer LIKE '%$zoekterm%'
    OR postcode LIKE '%$zoekterm%'
    OR plaats LIKE '%$zoekterm%'
    OR telefoonnummer LIKE '%$zoekterm%'
    OR mobielnummer LIKE '%$zoekterm%'
    OR regularid LIKE '%$zoekterm%'
    OR managerid LIKE '%$zoekterm%'
    OR administratorid LIKE '%$zoekterm%'
    OR indienst LIKE '%$zoekterm%'
    OR afdeling LIKE '%$zoekterm%'
    OR aantalmensen LIKE '%$zoekterm%'
    OR perwaneer LIKE '%$zoekterm%'";


$result = mysqli_query($conn, $sql);

$infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

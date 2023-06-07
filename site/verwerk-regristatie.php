<?php
require "database.php";

$voornaam = $_POST["voornaam"];
$tussenvoegsels = $_POST["tussenvoegsels"];
$achternaam = $_POST["achternaam"];
$geslacht = $_POST["geslacht"];
$email = $_POST["email"];
$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$postcode = $_POST["postcode"];
$plaats = $_POST["plaats"];
$land = $_POST["land"];
$telefoonnummer = $_POST["telefoonnummer"];
$mobielnummer = $_POST["mobielnummer"];
$rol = $_POST["rol"];
$indienst = $_POST["indienst"];
$perwaneer = $_POST["perwaneer"];
$afdeling = $_POST["afdeling"];
$aantalmensen = $_POST["aantalmensen"];



$wachtwoord_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);


$sql = "INSERT INTO administrator(indienst)";

$sql = "INSERT INTO regular(perwaneer)";

$sql = "INSERT INTO administrator(afdeling,aantalmensen)";


$sql = "INSERT INTO gebruiker (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, rol) 

VALUES('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$rol')";
var_dump($sql);
if (mysqli_query($conn, $sql)) {
    header("location: index.php");
}

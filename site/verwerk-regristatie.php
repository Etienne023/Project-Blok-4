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



if ($rol == "admin") {
    $sql = "INSERT INTO administrator (indienst)
    VALUES('$indienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, administratorid) 
    
    VALUES('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";
    mysqli_query($conn, $sql);

} elseif ($rol == "manager") {
    $sql = "INSERT INTO manager (afdeling,aantalmensen)
    
    VALUES('$afdeling','$aantalmensen')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, managerid) 
    
    VALUES('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";

    mysqli_query($conn, $sql);

} elseif ($rol == "regular") {

    $sql = "INSERT INTO regular (perwaneer) 

   VALUES('$perwaneer')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, regularid) 
    
    VALUES('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";
    mysqli_query($conn, $sql);

}




header("location: bekijken-workouts.php");
exit;

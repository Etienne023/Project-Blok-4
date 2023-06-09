<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];

require 'database.php';

$sql = "SELECT * FROM gebruiker where email = '$email'";


$result = mysqli_query($conn, $sql);

// echo password_hash('welkom', PASSWORD_DEFAULT);die; 

$gebruiker = mysqli_fetch_assoc($result);
if (!is_array($gebruiker)) {
    header("location: inlog-pagina.php");
    exit;
}
if (password_verify($wachtwoord,$gebruiker["wachtwoord"])) {

    session_start();
    
    $_SESSION['voornaam'] = $gebruiker["voornaam"];

    $_SESSION['gebruikersid'] = $gebruiker["gebruikersid"];




    
    if(!is_null($gebruiker["administratorid"] )){
        header('location: admin-dashboard.php');
        exit;
    }
    if(!is_null($gebruiker["regularid"] )){
        header('location: index-dashboard.php');
        exit;
    }
    if(!is_null($gebruiker["managerid"] )){
        header('location: manager-dashboard.php');
        exit; 
    }

    header("location: inlog-pagina.php");
    exit;
}

header("location: inlog-pagina.php");
exit;

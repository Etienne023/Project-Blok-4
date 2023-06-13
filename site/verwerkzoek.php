<?php

require 'database.php';

$gebruikers = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM gebruiker"), MYSQLI_ASSOC);

if (isset($_POST['submit'])) {

    $zoekveld = $_POST['zoekveld'];

    $sql = "SELECT * FROM gebruiker WHERE voornaam LIKE '%$zoekveld%'";

    $result = mysqli_query($conn, $sql);
    $gebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
 var_dump($gebruikers);
 die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


</body>

</html>
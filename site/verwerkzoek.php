<?php

$zoekterm = $_POST["zoekveld"];

if (empty($zoekterm)) {
    header("location: index.php");
    exit;
}

require 'database.php';

$sql = "SELECT * FROM gebruiker where voornaam like '%$zoekterm%' ";


$result = mysqli_query($conn, $sql);

$gebruikers = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    while ($gebruiker = mysqli_fetch_assoc($result)) {
        echo "<h1>" . $gebruiker["voornaam"] . "</h1>";
    }
    ?>
</body>

</html>
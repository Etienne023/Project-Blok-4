<?php

require 'database.php';

$gebruikers = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM gebruiker"), MYSQLI_ASSOC);


$zoekterm = $_POST["zoekveld"];

if (empty($zoekterm)) {
    header("location: bekijken-gebruikers.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inlog.css">
    <title>Document</title>
</head>

<body>
    <table>
        <?php include("navbar.php") ?>
        <form action="verwerkzoekworkouts.php" method="get">
            <section id="searchworkouts" class="search">
                <input type="text" name="zoekveld">
                <button type="submit">zoek!</button>
        </form>
        <tr>

            <th>omschrijving</th>
            <th>notitie</th>
            <th>duur</th>
            <th>toevoegdatum</th>
            <th>workoutid</th>
        </tr>
        <tr>
            <?php foreach ($workouts as $workout) :  ?>
                <td><?php echo $workout["omschrijving"] ?></td>
                <td><?php echo $workout["notitie"] ?></td>
                <td><?php echo $workout["duur"] ?></td>
                <td><?php echo $workout["toevoegdatum"] ?></td>
                <td><?php echo $workout["workoutid"] ?></td>
            <?php endforeach ?>
</body>

</html>
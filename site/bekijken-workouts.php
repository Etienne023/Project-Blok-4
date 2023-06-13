<?php

require "database.php";

$sql = "SELECT * FROM workouts";

$result = mysqli_query($conn, $sql);

$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<link rel="stylesheet" href="css/inlog.css">

  
<body>

    <table>
        <?php include("navbar.php") ?>
        <form action="verwerkzoek.php" method="get">
            <section class="search">
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
    </table>
    <?php include("footer.php") ?>
</body>
<?php

require "database.php";

$sql = "SELECT * FROM workouts";

$result = mysqli_query($conn, $sql);

$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);




$sql = "SELECT 
(SELECT COUNT(*) FROM workouts WHERE role = 'administrator') AS administrator,
(SELECT COUNT(*) FROM workouts WHERE role = 'manager') AS manager,
(SELECT COUNT(*) FROM workouts WHERE role = 'regular') AS regular";

$result = mysqli_query($conn, $sql);

$role = mysqli_fetch_assoc($result);




$sql = "SELECT COUNT(*) AS workout FROM workouts";

$result = mysqli_query($conn, $sql);

$aantalworkouts = mysqli_fetch_assoc($result);


?>


    <?php include("navbar.php") ?>

    <div class="sorteer">
        <?php include 'zoek-formulier.php' ?>
    </div>

    <table>
        <tr>

            <th>omschrijving</th>
            <th>notitie</th>
            <th>duur</th>
            <th>toevoegdatum</th>
            <th>workoutid</th>
            <th>role</th>
        </tr>
        <tr>
            <?php foreach ($workouts as $workout) :  ?>
                <td><?php echo $workout["omschrijving"] ?></td>
                <td><?php echo $workout["notitie"] ?></td>
                <td><?php echo $workout["duur"] ?></td>
                <td><?php echo $workout["toevoegdatum"] ?></td>
                <td><?php echo $workout["workoutid"] ?></td>
                <td><?php echo $workout["role"] ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <table>
        <tr>
            <th>
                aantal workouts
            </th>
            <th>
                admins
            </th>
            <th>
                managers
            </th>
            <th>
                regulars
            </th>
        </tr>
        <tr>
            <td><?php echo $aantalworkouts["workout"] ?></td>
            <td><?php echo $role['administrator'] ?></td>
            <td><?php echo $role['manager'] ?></td>
            <td><?php echo $role['regular'] ?></td>
        </tr>
    </table>
    <?php include("footer.php") ?>
</body>
</html>
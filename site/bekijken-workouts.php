<?php

session_start();

if (!isset($_SESSION['isingelogd'])) {
    header("location: inlog-pagina.php");
}




require "database.php";

$sql = "SELECT * FROM workouts";

$result = mysqli_query($conn, $sql);

$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['submit'])) {

    $zoekterm = $_POST["zoekveld"];

    if (empty($zoekterm)) {
        header("location: bekijken-workouts.php");
        exit;
    }

    $sql = "SELECT *
        FROM workouts WHERE toevoegdatum LIKE '%$zoekterm%' or notitie like '%$zoekterm%' or duur like '%$zoekterm%' or omschrijving like '%$zoekterm%' or workoutid like '%$zoekterm%' or role like '%$zoekterm%'  ";


    $result = mysqli_query($conn, $sql);

    $workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if (isset($_POST['dropdown'])) {

    $dropdown = $_POST["dropdown"];

    if ($dropdown == 'omschrijving') {
        $sql = 'SELECT * FROM workouts ORDER BY omschrijving ASC';
    } elseif ($dropdown == 'datum') {
        $sql = 'SELECT * FROM workouts ORDER BY toevoegdatum ASC';
    }

    $result = mysqli_query($conn, $sql);

    $workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

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
<br>
<br>
<br>
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
    <?php foreach ($workouts as $workout) : ?>
        <?php if (is_null($_SESSION['regularid'])) : ?>
            <tr>
                <td><?php echo $workout["omschrijving"] ?></td>
                <td><?php echo $workout["notitie"] ?></td>
                <td><?php echo $workout["duur"] ?></td>
                <td><?php echo $workout["toevoegdatum"] ?></td>
                <td><?php echo $workout["workoutid"] ?></td>
                <td><?php echo $workout["role"] ?></td>
            </tr>
        <?php elseif (is_null($workout["role"])) : ?>
            <tr>
                <td><?php echo $workout["omschrijving"] ?></td>
                <td><?php echo $workout["notitie"] ?></td>
                <td><?php echo $workout["duur"] ?></td>
                <td><?php echo $workout["toevoegdatum"] ?></td>
                <td><?php echo $workout["workoutid"] ?></td>
                <td><?php echo $workout["role"] ?></td>
            </tr>
        <?php endif ?>
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
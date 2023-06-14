<?php

require "database.php";

$sql = "SELECT * FROM gebruiker";

$result = mysqli_query($conn, $sql);

$gebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<link rel="stylesheet" href="css/navbar.css">
<nav class="navbar">

  <div class="navbar-text">
    Welcome
  </div>
  <ul class="nav-links">
    <li><a href="bekijken-gebruikers.php">gebruikers</a></li>
    <li><a href="bekijken-workouts.php">workouts</a></li>
    <li><a href="workouts-toevoegen.php">workouts toevoegen</a></li>
  </ul>
  <div class="nav-rechts">
    <a href="regristatie.php" class="logout-button">registreren </a>
    <a href="logout.php" class="logout-button">login/out</a>
  </div>
</nav>
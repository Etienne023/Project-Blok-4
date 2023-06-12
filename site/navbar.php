<?php

require "database.php";

$sql = "SELECT * FROM gebruiker";

$result = mysqli_query($conn, $sql);

$gebruikers = mysqli_fetch_assoc($result);


?>

<link rel="stylesheet" href="css/navbar.css">
<nav class="navbar">

  <div class="navbar-text">
    Welcome, <?php echo $gebruikers['gebruikersnaam'] ?>
    <?php
    if (!is_null($gebruikers['regularid']))
      echo '(customer)';

    elseif (!is_null($gebruikers['administratorid']))
      echo '(admin)';

    elseif (!is_null($gebruikers['managerid']))
      echo '(manager)';
    ?>


  </div>
  <ul class="nav-links">
    <li><a href="bekijken-gebruikers.php">gebruikers</a></li>
    <li><a href="workouts-toevoegen.php">workouts toevoegen</a></li>
  </ul>
  <div>
    <a href="regristatie.php" class="logout-button">regristreren</a>
    <a href="logout.php" class="logout-button">login/out</a>
  </div>
</nav>
<link rel="stylesheet" href="css/regristatie.css">
<?php include("navbar.php") ?>
<main>
    <div class="container">
        <form action="verwerk-workouts.php" method="post">
            <ul>
                <li>
                    <label for="txtomschrijving">omschrijving</label><br>

                    <input type="text" id="omschrijving" name="omschrijving" placeholder="omschrijving" autofocus>
                </li>
                <li>
                    <label for="txtnotitie">notitie</label><br>
                    <input type="text" id="notitie" name="notitie" placeholder="notitie">
                </li>
                <li>
                    <label for="txtduur">duur</label><br>
                    <input type="text" id="duur" name="duur" placeholder="duur">
                </li>
                <li>
                    <label for="txttoevoegdatum ">toevoegdatum</label><br>
                    <input type="text" id="toevoegdatum" name="toevoegdatum" placeholder="toevoegdatum">
                </li>
            <ul>
                <li>
                    <button type="submit">Verstuur</button>
                </li>
            </ul>
        </form>
    </div>
</main>
<?php include("footer.php") ?>
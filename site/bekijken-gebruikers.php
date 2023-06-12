<?php

require "database.php";

$sql = "SELECT * FROM gebruiker";

$result = mysqli_query($conn, $sql);

$gebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<link rel="stylesheet" href="css/inlog.css">

  
<body>

    <table>
        <?php include("navbar.php") ?>
        <form action="verwerkzoek.php" method="post">
            <section class="search">
                <input type="text" name="zoekveld" id="">
                <button type="submit">zoek!</button>
        </form>
        <tr>

            <th>gebruikersid</th>
            <th>voornaam</th>
            <th>tussenvoegsels</th>
            <th>achternaam</th>
            <th>geslacht</th>
            <th>email</th>
            <th>gebruikersnaam</th>
            <th>straat</th>
            <th>huisnummer</th>
            <th>postcode</th>
            <th>plaats</th>
            <th>telefoonnummer</th>
            <th>mobielnummer</th>
        </tr>
        <tr>
            <?php foreach ($gebruikers as $gebruiker) :  ?>
                <td><?php echo $gebruiker["gebruikersid"] ?></td>
                <td><?php echo $gebruiker["voornaam"] ?></td>
                <td><?php echo $gebruiker["tussenvoegsels"] ?></td>
                <td><?php echo $gebruiker["achternaam"] ?></td>
                <td><?php echo $gebruiker["geslacht"] ?></td>
                <td><?php echo $gebruiker["email"] ?></td>
                <td><?php echo $gebruiker["gebruikersnaam"] ?></td>
                <td><?php echo $gebruiker["straat"] ?></td>
                <td><?php echo $gebruiker["huisnummer"] ?></td>
                <td><?php echo $gebruiker["postcode"] ?></td>
                <td><?php echo $gebruiker["plaats"] ?></td>
                <td><?php echo $gebruiker["telefoonnummer"] ?></td>
                <td><?php echo $gebruiker["mobielnummer"] ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <?php include("footer.php") ?>
</body>
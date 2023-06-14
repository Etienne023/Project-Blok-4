<?php

require "database.php";

$sql = "SELECT *
        FROM gebruiker
        LEFT JOIN administrator USING (administratorid)
        LEFT JOIN manager USING (managerid)
        LEFT JOIN regular USING (regularid)";
$result = mysqli_query($conn, $sql);

$infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT COUNT(*) AS aantalgebruikers FROM gebruiker";

$result = mysqli_query($conn, $sql);

$aantalgebruikers = mysqli_fetch_assoc($result);



$sql = "SELECT 
(SELECT COUNT(managerid) FROM gebruiker WHERE managerid IS NOT NULL) AS manager,
(SELECT COUNT(administratorid) FROM gebruiker WHERE administratorid IS NOT NULL) AS administrator,
(SELECT COUNT(regularid) FROM gebruiker WHERE regularid IS NOT NULL) AS regular;
";


$result = mysqli_query($conn, $sql);

$rol = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="css/inlog.css">


<body>

    <table>
        <?php include("navbar.php") ?>
        <br>
        <br>
        <br>
        <form action="verwerkzoek.php" method="post">
            <section class="search">
                <input type="text" name="zoekveld">
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
            <th>regularid</th>
            <th>managerid</th>
            <th>adminid</th>
            <th>indienst</th>
            <th>afdeling</th>
            <th>aantalmensen</th>
            <th>perwaneer</th>
        </tr>
        <tr>
            <?php foreach ($infogebruikers as $infogebruiker) :  ?>
        <tr>
            <td><?php echo $infogebruiker["gebruikersid"] ?></td>
            <td><?php echo $infogebruiker["voornaam"] ?></td>
            <td><?php echo $infogebruiker["tussenvoegsels"] ?></td>
            <td><?php echo $infogebruiker["achternaam"] ?></td>
            <td><?php echo $infogebruiker["geslacht"] ?></td>
            <td><?php echo $infogebruiker["email"] ?></td>
            <td><?php echo $infogebruiker["gebruikersnaam"] ?></td>
            <td><?php echo $infogebruiker["straat"] ?></td>
            <td><?php echo $infogebruiker["huisnummer"] ?></td>
            <td><?php echo $infogebruiker["postcode"] ?></td>
            <td><?php echo $infogebruiker["plaats"] ?></td>
            <td><?php echo $infogebruiker["telefoonnummer"] ?></td>
            <td><?php echo $infogebruiker["mobielnummer"] ?></td>
            <td><?php echo $infogebruiker["regularid"] ?></td>
            <td><?php echo $infogebruiker["managerid"] ?></td>
            <td><?php echo $infogebruiker["administratorid"] ?></td>
            <td><?php echo $infogebruiker["indienst"] ?></td>
            <td><?php echo $infogebruiker["afdeling"] ?></td>
            <td><?php echo $infogebruiker["aantalmensen"] ?></td>
            <td><?php echo $infogebruiker["perwaneer"] ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <br>
    <br>
    <table>
        <tr>
            <th>
                gebruikers in database
            </th>
            <th>
                admins in database
            </th>
            <th>
                managers in database
            </th>
            <th>
                regulars in database
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $aantalgebruikers['aantalgebruikers']; ?>
            </td>
            <td>
                <?php echo $rol['administrator']; ?>
            </td>
            <td>
                <?php echo $rol['manager']; ?>
            </td>
            <td>
                <?php echo $rol['regular']; ?>
            </td>
        </tr>
    </table>
    <?php include("footer.php") ?>
</body>
<?php

require 'database.php';

$gebruikers = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM gebruiker"), MYSQLI_ASSOC);


$zoekterm = $_POST["zoekveld"];

if (empty($zoekterm)) {
    header("location: bekijken-gebruikers.php");
    exit;
}

$sql = "SELECT *
    FROM gebruiker
    LEFT JOIN administrator USING (administratorid)
    LEFT JOIN manager USING (managerid)
    LEFT JOIN regular USING (regularid)
    WHERE voornaam LIKE '%$zoekterm%'
    OR gebruikersid LIKE '%$zoekterm%'
    OR geslacht LIKE '%$zoekterm%'
    OR email LIKE '%$zoekterm%'
    OR gebruikersnaam LIKE '%$zoekterm%'
    OR straat LIKE '%$zoekterm%'
    OR huisnummer LIKE '%$zoekterm%'
    OR postcode LIKE '%$zoekterm%'
    OR plaats LIKE '%$zoekterm%'
    OR telefoonnummer LIKE '%$zoekterm%'
    OR mobielnummer LIKE '%$zoekterm%'
    OR regularid LIKE '%$zoekterm%'
    OR managerid LIKE '%$zoekterm%'
    OR administratorid LIKE '%$zoekterm%'
    OR indienst LIKE '%$zoekterm%'
    OR afdeling LIKE '%$zoekterm%'
    OR aantalmensen LIKE '%$zoekterm%'
    OR perwaneer LIKE '%$zoekterm%'";


$result = mysqli_query($conn, $sql);

$infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
<?php include("footer.php") ?>
</body>

</html>
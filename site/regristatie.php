<link rel="stylesheet" href="css/regristatie.css">
<?php include("navbar.php") ?>
<main>
    <div class="container">
        <form action="verwerk-regristatie.php" method="post">
            <ul>
                <li>
                    <label for="txtVoornaam">Voornaam</label><br>

                    <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" autofocus>
                </li>
                <li>
                    <label for="txtTussenvoegsels">Tussenvoegsels</label><br>
                    <input type="text" id="tussenvoegsels" name="tussenvoegsels" placeholder="Tussenvoegsels">
                </li>
                <li>
                    <label for="txtAchternaam">Achternaam</label><br>
                    <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam">
                </li>
                <li>
                    <label for="txtGebruikersnaam">Gebruikersnaam</label><br>
                    <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam">
                </li>
                <li>
                    <label for="txtemail">email</label><br>
                    <input type="text" id="email" name="email" placeholder="email">
                </li>
                <li>
                    <label for="txtRol">Rol</label><br>
                    <select id="rol" name="rol">
                        <option value="admin">admin</option>
                        <option value="manager">manager</option>
                        <option value="regular">regular</option>
                    </select>
                </li>
                <li>
                    <label for="txtwachtwoord">wachtwoord</label><br>
                    <input type="text" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord">
                </li>
                <li>
                    <label for="txtperwaneer">perwaneer</label><br>
                    <input type="text" id="perwaneer" name="perwaneer" placeholder="perwaneer">
                </li>
                <li>
                    <label for="txtafdeling">afdeling</label><br>
                    <input type="text" id="afdeling" name="afdeling" placeholder="afdeling">
                </li>
                <li>
                    <label for="txtaantalmensen">aantalmensen</label><br>
                    <input type="text" id="aantalmensen" name="aantalmensen" placeholder="aantalmensen">
                </li>
                <li>
                    <label for="txtindienst">indienst</label><br>
                    <input type="text" id="indienst" name="indienst" placeholder="indienst">
                </li>
                <li>
                    <label for="txtGeslacht">geslacht</label><br>
                    <select id="geslacht" name="geslacht">
                        <option value="man">man</option>
                        <option value="vrouw">vrouw</option>
                    </select>
                </li>
                <li>
                    <label for="txttelefoonnummer">telefoonnummer</label><br>
                    <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="telefoonnummer">
                </li>
                <li>
                    <label for="txtmobielnummer ">mobielnummer</label><br>
                    <input type="text" id="mobielnummer" name="mobielnummer" placeholder="mobielnummer">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtStraat">Straat</label><br>
                    <input type="text" id="straat" name="straat" placeholder="Straat" autofocus>
                </li>
                <li>
                    <label for="txtHuisnummer">Huisnummer</label><br>
                    <input type="text" id="huisnummer" name="huisnummer" placeholder="Huisnummer">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtPostcode">Postcode</label><br>
                    <input type="text" id="postcode" name="postcode" placeholder="Postcode" autofocus>
                </li>
                <li>
                    <label for="txtPlaats">Plaats</label><br>
                    <input type="text" id="plaats" name="plaats" placeholder="Plaats">
                </li>
                <li>
                    <label for="txtLand">Land</label><br>
                    <input type="text" id="land" name="land" placeholder="Land">
                </li>
            </ul>
            <ul>
                <li>
                    <button type="submit">Verstuur</button>
                </li>
            </ul>
        </form>
    </div>
</main>
<?php include("footer.php") ?>
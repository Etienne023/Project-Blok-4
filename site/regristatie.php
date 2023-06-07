<link rel="stylesheet" href="regristatie.css">

<main>
    <div class="container">
        <form action="verwerk.php" method="get">
            <ul>
                <li>
                    <label for="txtVoornaam">Voornaam</label><br>
      
                    <input type="text" id="txtVoornaam" name="txtVoornaam" placeholder="Voornaam" autofocus>
                </li>
                <li>
                    <label for="txtTussenvoegsels">Tussenvoegsels</label><br>
                    <input type="text" id="txtTussenvoegsels" name="txtTussenvoegsels" placeholder="Tussenvoegsels">
                </li>
                <li>
                    <label for="txtAchternaam">Achternaam</label><br>
                    <input type="text" id="txtAchternaam" name="txtAchternaam" placeholder="Achternaam">
                </li>
                <li>
                    <label for="txtGebruikersnaam">Gebruikersnaam</label><br>
                    <input type="text" id="txtGebruikersnaam" name="txtGebruikersnaam" placeholder="Gebruikersnaam">
                </li>
                <li>
                    <label for="txtemail">E-mail</label><br>
                    <input type="text" id="txtemail" name="txtemail" placeholder="E-mail">
                </li>
                <li>
                    <label for="txtGeslacht">geslacht</label><br>
                    <input type="text" id="txtGeslacht" name="txtGeslacht" placeholder="Geslacht">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtStraat">Straat</label><br>
                    <input type="text" id="txtStraat" name="txtStraat" placeholder="Straat" autofocus>
                </li>
                <li>
                    <label for="txtHuisnummer">Huisnummer</label><br>
                    <input type="text" id="txtHuisnummer" name="txtHuisnummer" placeholder="Huisnummer">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtPostcode">Postcode</label><br>
                    <input type="text" id="txtPostcode" name="txtPostcode" placeholder="Postcode" autofocus>
                </li>
                <li>
                    <label for="txtPlaats">Plaats</label><br>
                    <input type="text" id="txtPlaats" name="txtPlaats" placeholder="Plaats">
                </li>
                <li>
                    <label for="txtLand">Land</label><br>
                    <input type="text" id="txtLand" name="txtLand" placeholder="Land">
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
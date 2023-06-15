<section class="search">
    <form action="verwerkzoekgebruikers.php" method="post">
        <input type="text" name="zoekveld" />
        <button type="submit">zoek!</button>
    </form>
</section>

<form action="verwerkdropdown.php" method="post">
    <select name="dropdown" id="dropdown">
        <option value="omschrijving">sorteer op omschrijving</option>
        <option value="datum">toevoegdatum</option>
    </select>
    <button type="submit">zoek</button>
</form>
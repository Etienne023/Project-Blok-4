<link rel="stylesheet" href="css/inlog.css">
<?php include("navbar.php") ?>
<h1>inloggen</h1>
<div class="container">
    <form action="verwerk-inloggen.php" method="post">

        <ul>
            <li>
                <label for="txtemail">E-mail</label><br>

                <input type="text" id="email" name="email" placeholder="email" autofocus>
            </li>
            <li>
                <label for="txtTwachtwoord">wachtwoord</label><br>
                <input type="password" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord">
            </li>
            <button class="submit">verstuur</button>
    </form>
</div>
<?php include("footer.php") ?>
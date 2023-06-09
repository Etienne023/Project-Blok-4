<?php

require "database.php";

$sql = "SELECT * FROM gebruiker";

$result = mysqli_query($conn, $sql);

$gebruikers = mysqli_fetch_all($result);

?>

<body>

    <table>
        <tr>
            <th>voornaam</th>
            <th>tussenvoegsels</th>
            <th>achternaam</th>
        </tr>
        <tr>
            <?php foreach ($gebruikers as $gebruiker) : ?>
                <td><?php echo $gebruiker["voornaam"]?></td>
                <td><?php echo $gebruiker["tussenvoegsels"]?></td>
                <td><?php echo $gebruiker["achternaam"]?></td>
        </tr>
    <?php endforeach ?>
    </table>

</body>
<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$result = $mysqli->query("SELECT `salles`.`nom`, `etage`.`nom` FROM `salles` INNER JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`");

$result = $result->fetch_all();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>Nom des salles</th>
            <th>Nom des étages</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($result as $val) : ?>
                <tr>
                    <?php foreach ($val as $value) : ?>
                        <td><?= $value ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid;
    }
</style>
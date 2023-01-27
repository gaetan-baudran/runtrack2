<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$result = $mysqli->query("SELECT AVG(capacite) as capacite_moyenne FROM salles");

$result = $result->fetch_assoc();

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

    </head>

    <body>
        <table>
            <thead>
                <th>CAPACITE MOYENNE</th>
            </thead>
            <tbody>
                <td> <?= $result['capacite_moyenne'] ?> </td>
            </tbody>
        </table>
    </body>

</html>
</body>

<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid;
    }
</style>
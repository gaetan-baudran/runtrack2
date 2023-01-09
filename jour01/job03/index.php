<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php

$name = true;
$nombre = 5;
$chaîne = 'mot';
$virgule = 1.5;



?>

<table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>boolean</td>
        <td>$name</td>
        <td><?php echo $name; ?></td>
        </tr>
        <tr>
        <td>entier</td>
        <td>$nombre</td>
        <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
        <td>chaîne de caractères</td>
        <td>$chaîne</td>
        <td><?php echo $chaîne; ?></td>
        </tr>
        <tr>
        <td>nombre à virgule flottante</td>
        <td>$virgule</td>
        <td><?php echo $virgule;?></td>
        </tr>
    </tbody>
</table>


</body>
</html>
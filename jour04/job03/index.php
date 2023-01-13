<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Un tableau associatif des valeurs passées au script courant via le protocole 'HTTP' et la 'méthode POST' lors de l'utilisation de la chaîne application comme en-tête 'HTTP Content-Type' dans la requête. -->
    <form action="" method="post">

        <input type="text" name="test">

        <input type="submit">

    </form>

    <?php

    // La variable ('$a') est égale 0.
    $a = 0;

    // foreach ( pour chaque) : pour chaque boucle '$_GET' les valeurs clés comme ("test").
    foreach ($_POST as $key => $value) {
        // if(si): Si notre variable '$_POST' avec la clé "Test" est (différent (avec le sigle ' != ')) de ( "" ) alors on acrémente ( augmente de 1) de 1 notre variable '$a'
        if ($_POST["test"] != "") {
            // $a++ = on acrémente ( augmente ) de 1 notre variable '$a' qui était = à 0 au début.
            $a++;
        }
    }

    // echo ( affiche ): echo Le nombre d'argument POST envoyé est : '. $a'
    echo "Le nombre d'argument POST envoyé est :" . $a;

    ?>

</body>

</html>
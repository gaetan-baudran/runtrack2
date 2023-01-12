<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">

        <input type="text" name="nombre">

        <input type="submit">

    </form>

    <?php
    // Boucle de la "method get" , $key = clé de la boucle
    foreach ($_GET as $key) {
        //  if(si): Si la clé ($key) est égal à la valeur 'Null'
        if ($key == null) {
            // echo(on affiche): on affiche rien ("")  
            echo "";
            // elseif(Sinon si): La clé de la boucle '$_GET' et modulo par 2 ( % == 0 est pair). (modulo = (Mathématiques) Fonction mathématique donnant le reste de la division d’une variable par un nombre donné. )
        } elseif ($_GET['nombre'] % 2 == 0) {
            echo 'Nombre pair';
        } else echo 'Nombre Impair';
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Method 'GET' = Un tableau associatif des valeurs passées au script courant via les paramètres d'URL (aussi connue sous le nom de "query string") -->

    <form action="" method="get">

        <input type="text" name="test">

        <input type="submit">

    </form>

    <?php

    //$counter = La variable 
    $counter = 0;

    // foreach (pour chaque) = Pour chaque boucle $_GET ('method get'), La première forme passe en revue le tableau ($_GET),À chaque itération la valeur de l'élément courant est assignée à ($key) 
    foreach ($_GET as $key) {
        //  if(si): Le contenu du formulaire est différent de vide (!= ""), et bien notre variable 'counter' augmente ( acrémente ) de 1 
        if ($_GET["test"] != "") {
            // $counter++ = sert à augmenter (acrémenter) de 1 
            $counter++;
        }
    }

    // echo (appeler , afficher = la variable)
    echo "Le nombre d'argument GET envoyé est :" . $counter;

    ?>

</body>

</html>
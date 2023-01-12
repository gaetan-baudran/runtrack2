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

        <input type="text" name="test">

        <input type="submit">

    </form>

    <?php

    $conter = 0;

    foreach ($_GET as $key) {
        //  if(si): Le contenu du formulaire est différent de vide (!= ""), et bien notre variable conter augmente ( acrémente ) de 
        if ($_GET["test"] != "") {
            $a++;
        }
    }

    echo "Le nombre d'argument GET envoyé est :" . $a;

    ?>

</body>

</html>
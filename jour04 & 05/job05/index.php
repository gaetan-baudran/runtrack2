<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Method 'post' = La boucle -->

    <form action="" method="post">

        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">

    </form>

    <?php

    // $key = les clés de la boucle ' username et password '.

    foreach ($_POST as $key) {
        // Si dans la boucle , la clé 'username = à John. " pareil pour le mot de passe " 
        if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
            //    echo = ça m'affiche , "c'est pas ma guerre".
            echo "C'est pas ma guerre";
            break;
            // elseif = (sinon si) sinon si " la clé ('username' et 'password') de ma boucle ('$_POST) est égale à Nul.
        } elseif ($_POST['username'] == null && $_POST['password'] == null) {
            // echo "" = ne m'affiche rien du tout.
            echo "";
            break;
            // else = (sinon) , sinon echo m'affiche "Votre pire cauchemar".
        } else {
            echo "Votre pire cauchemar";
            break;
        }
    }

    ?>
</body>

</html>
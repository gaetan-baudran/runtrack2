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

        <!-- L'élément HTML <input> est utilisé pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisatrice ou l'utilisateur de saisir des données. ( de type text) -->
        <input type="text" name="test">
        <input type="text" name="test2">

        <!-- Un bouton qui envoie le formulaire. -->
        <input type="submit">

    </form>



    <!-- Tableau avec une largeur de 3% ('width: 3%) et une bordure de 2 ('border=2') -->
    <table style="width: 3%;" border="2">
        <tbody>
            <tr>
                <td>Argument</td>
                <td>Valeur</td>
            </tr>
            <tr>
                <td><?php
                    // if (si): (isset — Détermine si une variable est déclarée et est différente de null).
                    // si notre variable déclarée ('$_GET' avec la clé ('test')) est égale ('==') à 'null'
                    if (isset($_GET['test']) == null) {
                        // echo (afficher , appeler) la variable '$_GET' avec la clé 'test', ne rien afficher avec ('')
                        echo $_GET['test'] = '';
                    }
                    echo $_GET['test'];
                    ?>
                </td>
                <td><?php
                    if (isset($_GET['test2']) == null) {
                        echo $_GET['test2'] = '';
                    }
                    echo $_GET['test2'];
                    ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!--  Un tableau associatif des valeurs passées au script courant via le protocole 'HTTP' et la 'méthode POST' lors de l'utilisation de la chaîne application comme en-tête 'HTTP Content-Type' dans la requête. -->
    <form action="" method="post">

        <input type="text" name="test">
        <input type="text" name="test2">

        <input type="submit">

    </form>



    <!-- Tableau avec un style de 3% de largeur ('width:3%') et une bordure de 2 ('border=2') -->
    <table style="width: 3%;" border="2">
        <tbody>
            <tr>
                <td>Argument</td>
                <td>Valeur</td>
            </tr>
            <tr>
                <td><?php
                    // Même chose que l'exercise "Job2" dans le "jour4"
                    if (isset($_POST['test']) == null) {
                        echo $_POST['test'] = '';
                    }
                    echo $_POST['test'];
                    ?>
                </td>
                <td><?php
                    if (isset($_POST['test2']) == null) {
                        echo $_POST['test2'] = '';
                    }
                    echo $_POST['test2'];
                    ?></td>
            </tr>
        </tbody>
    </table>



</body>

</html>
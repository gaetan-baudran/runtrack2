<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="post">

        <input type="text" name="test">
        <input type="text" name="test2">

        <input type="submit">

    </form>




    <table style="width: 3%;" border="2">
        <tbody>
            <tr>
                <td>Argument</td>
                <td>Valeur</td>
            </tr>
            <tr>
                <td><?php
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
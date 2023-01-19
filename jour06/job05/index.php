<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php if (isset($_GET['couleur']) != null) {
                                        echo $_GET['couleur'];
                                    } else {
                                        echo 'default';
                                    }
                                    ?>.css">
    <title>Job05</title>
</head>

<body>



    <form method="get">
        <select name="couleur">

            <option value="default">--- Default ---</option><br />
            <option value="red">Couleur rouge</option><br />
            <option value="bleu">Couleur bleu</option><br />
            <option value="vert">Couleur verte</option><br />

        </select>
        <input type="submit" />
    </form>

</body>

</html>
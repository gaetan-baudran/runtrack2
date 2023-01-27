<body>
    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    $result = $mysqli->query("SELECT SUM(superficie) AS superficie_totale FROM etage");

    $result = $result->fetch_assoc();

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>


    </html>

    <body>
        <table>
            <thead>
                <th>Superficie totale</th>
            </thead>
            <tbody>
                <tr>
                    <td><?= $result['superficie_totale'] ?></td>
                </tr>
            </tbody>
        </table>
    </body>

    </html>
    </table>

    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid;
        }
    </style>
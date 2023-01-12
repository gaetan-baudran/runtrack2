<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php


    $str = "On n'est pas le meilleur quand on  le croit mais quand on le sait.";

    $cons = ['b', 'B', 'c', 'C', 'd', 'D', 'f', 'F', 'g', 'G', 'h', 'H', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'v', 'V', 'w', 'W', 'x', 'X', 'z', 'Z'];

    $voyel = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];

    $c = 0;

    $v = 0;

    for ($i = 0; isset($str[$i]); $i++) {


        for ($x = 0; isset($cons[$x]); $x++) {
            if ($str[$i] == $cons[$x]) {
                $c++;
            }
        }
    }


    for ($i = 0; isset($str[$i]); $i++) {


        for ($x = 0; isset($voyel[$x]); $x++) {
            if ($str[$i] == $voyel[$x]) {
                $v++;
            }
        }
    }


    ?>

    <table style="width: 1%;" border="2">
        <tbody>
            <tr>
                <td></td>
                <td>Voyelles</td>
            </tr>
            <tr>
                <td><?php echo $c;
                    ?>
                </td>
                <td><?php echo $v;
                    ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>
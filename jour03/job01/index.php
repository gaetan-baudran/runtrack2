<?php

// Notre variable '$x' est = à notre tableau 'array'. 
$x = array(200, 204, 173, 98, 171, 404, 459);
// foreach (pour chaque): Pour chaque variable '$x' , les variables clés '$key' ( ex: 200 , 204 ect ...)
foreach ($x as $key => $x) {
    // if (si): Si notre variable '$x' et un modulo de 2 ('$x % 2 ') est égale à 0 (' == ').
    if ($x % 2 == 0) {
        // echo (affiche) : affiche les clés 'Pair de notre tableau , de la variable $x'
        echo "$x est pair <br>";
    }
    // else (sinon): affiche les clés 'Impair de notre tableau , de la variable $x'
    else {
        echo "$x est impair <br>";
    }
}
